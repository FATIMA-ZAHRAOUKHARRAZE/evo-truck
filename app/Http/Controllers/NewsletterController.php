<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Newsletter;
use Exception;
use Illuminate\Support\Facades\Log;
use DrewM\MailChimp\MailChimp;
use Illuminate\Support\Facades\Validator;
class NewsletterController extends Controller
{
    // Displays the form view
    public function index()
    {
        return view('form');
    }

    // Handles the subscription process
    public function subscribe(Request $request)
    {
        // Validate the request
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please provide a valid email address.'
            ], 422);
        }

        try {
            // Log the configuration for debugging
            Log::info('Newsletter configuration', [
                'api_key_exists' => !empty(config('newsletter.mailchimp.apiKey')),
                'list_id_exists' => !empty(config('newsletter.mailchimp.listId')),
                'driver' => config('newsletter.driver')
            ]);

            // Test Mailchimp connection
            $mailchimp = new MailChimp(config('newsletter.mailchimp.apiKey'));
            $result = $mailchimp->get('lists/' . config('newsletter.mailchimp.listId'));

            if (!$mailchimp->success()) {
                Log::error('Mailchimp API Error', [
                    'error' => $mailchimp->getLastError(),
                    'response' => $result
                ]);
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to connect to newsletter service. Please try again later.'
                ], 500);
            }

            // Check if email is already subscribed
            if (Newsletter::isSubscribed($request->email)) {
                return response()->json([
                    'success' => false,
                    'message' => 'You have already subscribed to our Newsletters.'
                ], 409); // 409 Conflict status code
            }

            // Try to subscribe
            try {
                $result = Newsletter::subscribe($request->email);

                if (!$result) {
                    Log::error('Newsletter subscription failed', [
                        'email' => $request->email,
                        'error' => 'Subscription failed without specific error',
                        'config' => config('newsletter.mailchimp')
                    ]);
                    return response()->json([
                        'success' => false,
                        'message' => 'Failed to subscribe to newsletter. Please try again later.'
                    ], 500);
                }

                return response()->json([
                    'success' => true,
                    'message' => 'You have successfully subscribed to our Newsletters!'
                ]);

            } catch (Exception $e) {
                Log::error('Newsletter API error', [
                    'email' => $request->email,
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                    'config' => config('newsletter.mailchimp')
                ]);

                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred while subscribing to the newsletter. Please try again later.'
                ], 500);
            }

        } catch (Exception $e) {
            Log::error('Newsletter general error', [
                'email' => $request->email,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred. Please try again later.'
            ], 500);
        }
    }
}