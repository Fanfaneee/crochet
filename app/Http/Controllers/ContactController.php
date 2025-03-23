<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

       
        // Envoyer l'email
        Mail::send('emails.contact', [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'user_message' => $request->input('message'),
        ], function ($mail) use ($request) {
            $mail->from($request->input('email'), $request->input('name'));
            $mail->to('bugenne.fanie@gmail.com')->subject('Contact Form Submission');
        });

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
    }
}