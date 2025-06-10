<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Newsletter;
use Exception;
use Illuminate\Support\Facades\Log;
use DrewM\MailChimp\MailChimp;

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
        // Validates email field
        $request->validate([
            'email' => 'required|email',
        ]);

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
                return redirect()->back()->with('error', 'Unable to connect to newsletter service. Please try again later.');
            }

            // Checks if the email is already subscribed to the newsletter
            if (Newsletter::isSubscribed($request->email)) {
                return redirect()->back()->with('error', 'You have already subscribed to our Newsletters.');
            }

            // Try to subscribe with more detailed error handling
            try {
                // Subscribes the email to the newsletter
                $result = Newsletter::subscribe($request->email);

                if (!$result) {
                    Log::error('Newsletter subscription failed', [
                        'email' => $request->email,
                        'error' => 'Subscription failed without specific error',
                        'config' => [
                            'api_key_exists' => !empty(config('newsletter.mailchimp.apiKey')),
                            'list_id_exists' => !empty(config('newsletter.mailchimp.listId'))
                        ]
                    ]);
                    return redirect()->back()->with('error', 'Failed to subscribe to newsletter. Please try again later.');
                }

                return redirect()->back()->with('success', 'You have successfully subscribed to our Newsletters.');

            } catch (Exception $e) {
                Log::error('Newsletter API error', [
                    'email' => $request->email,
                    'error' => $e->getMessage(),
                    'trace' => $e->getTraceAsString(),
                    'config' => [
                        'api_key_exists' => !empty(config('newsletter.mailchimp.apiKey')),
                        'list_id_exists' => !empty(config('newsletter.mailchimp.listId'))
                    ]
                ]);

                return redirect()->back()->with('error', 'An error occurred while subscribing to the newsletter. Please try again later.');
            }

        } catch (Exception $e) {
            Log::error('Newsletter general error', [
                'email' => $request->email,
                'error' => $e->getMessage(),
                'trace' => $e->getTraceAsString()
            ]);

            return redirect()->back()->with('error', 'An error occurred while subscribing to the newsletter. Please try again later.');
        }
    }
}