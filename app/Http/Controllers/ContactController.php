<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // Honeypot
        if (!empty($request->get('company'))) {
            return;
        }

        // Validate
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|max:255',
            'subject' => 'required|max:255',
            'msg' => 'required|max:1024'
        ]);

        // Input values
        $name = $request->get('name');
        $email = $request->get('email');
        $phone = $request->get('phone');
        $subject = $request->get('subject');
        $msg = $request->get('msg');

        // Send mail
        try {
            Mail::send(
                'mail',
                compact('name', 'email', 'phone', 'subject', 'msg'),
                function ($msg) use ($email, $name) {
                    /**
                     * @todo: at Go-Live change MAIL_USERNAME
                     */
                    $msg
                        ->to(env('MAIL_USERNAME'), env('APP_NAME'))
                        ->subject("TEST MAIL FROM " . $email)
                        ->replyTo($email, $name);
                    $msg->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
                }
            );

            return response()->json([
                'message' => 'Success'
            ], 200);
        } catch (Exception $e) {
            return response()->json([
                'message' => 'error'
            ], 400);
        }
    }
}
