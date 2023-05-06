<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id' => 'required',
            'name' => 'required',
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $id = $request->input('id');
        $name = $request->input('name');
        $email = $request->input('email');

        $data = [
            'name' => $name,
        ];

        Mail::send('emails.newsletter', $data, function ($message) use ($email, $name) {
            $message->to($email, $name)->subject('Newsletter');
        });

        return response()->json(['success' => true]);
    }
}
