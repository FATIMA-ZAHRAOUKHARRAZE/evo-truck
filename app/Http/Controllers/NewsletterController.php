<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Newsletter;
use Exception;
use Illuminate\Support\Facades\Log;
use DrewM\MailChimp\MailChimp;
<<<<<<< HEAD
use Illuminate\Support\Facades\Validator;
=======

>>>>>>> 0035a2a3025e4151ccf458786733b61a3b20b900
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
<<<<<<< HEAD
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

=======
        // Validates email field
        $request->validate([
            'email' => 'required|email',
        ]);

>>>>>>> 0035a2a3025e4151ccf458786733b61a3b20b900
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
<<<<<<< HEAD
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
=======
                return redirect()->back()->with('error', 'Unable to connect to newsletter service. Please try again later.');
            }

            // Checks if the email is already subscribed to the newsletter
            if (Newsletter::isSubscribed($request->email)) {
                return redirect()->back()->with('error', 'You have already subscribed to our Newsletters.');
            }

            // Try to subscribe with more detailed error handling
            try {
                // Subscribes the email to the newsletter
>>>>>>> 0035a2a3025e4151ccf458786733b61a3b20b900
                $result = Newsletter::subscribe($request->email);

                if (!$result) {
                    Log::error('Newsletter subscription failed', [
                        'email' => $request->email,
                        'error' => 'Subscription failed without specific error',
<<<<<<< HEAD
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
=======
                        'config' => [
                            'api_key_exists' => !empty(config('newsletter.mailchimp.apiKey')),
                            'list_id_exists' => !empty(config('newsletter.mailchimp.listId'))
                        ]
                    ]);
                    return redirect()->back()->with('error', 'Failed to subscribe to newsletter. Please try again later.');
                }

                return redirect()->back()->with('success', 'You have successfully subscribed to our Newsletters.');
>>>>>>> 0035a2a3025e4151ccf458786733b61a3b20b900

            } catch (Exception $e) {
                Log::error('Newsletter API error', [
                    'email' => $request->email,
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
<<<<<<< HEAD
                    'config' => config('newsletter.mailchimp')
                ]);

                return response()->json([
                    'success' => false,
                    'message' => 'An error occurred while subscribing to the newsletter. Please try again later.'
                ], 500);
=======
                    'config' => [
                        'api_key_exists' => !empty(config('newsletter.mailchimp.apiKey')),
                        'list_id_exists' => !empty(config('newsletter.mailchimp.listId'))
                    ]
                ]);

                return redirect()->back()->with('error', 'An error occurred while subscribing to the newsletter. Please try again later.');
>>>>>>> 0035a2a3025e4151ccf458786733b61a3b20b900
            }

        } catch (Exception $e) {
            Log::error('Newsletter general error', [
                'email' => $request->email,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

<<<<<<< HEAD
            return response()->json([
                'success' => false,
                'message' => 'An unexpected error occurred. Please try again later.'
            ], 500);
=======
            return redirect()->back()->with('error', 'An error occurred while subscribing to the newsletter. Please try again later.');
>>>>>>> 0035a2a3025e4151ccf458786733b61a3b20b900
        }
    }
}