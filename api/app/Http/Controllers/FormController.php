<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function faqForm(Request $mailRequest)
    {
        $data = [
            'fullName' => $mailRequest->fullName,
            'phone' => $mailRequest->phone,
            'email' => $mailRequest->email,
            'company' => $mailRequest->company,
            'city' => $mailRequest->city,
        ];

        Mail::send('emails.faq', $data, function ($message)  {
            $message->to(config('mail.username'))->subject('From Get Price');
        });

        return response()->json(['message' => 'Mail sent successfully'], Response::HTTP_OK);
    }

    public function priceForm(Request $mailRequest)
    {
        $data = [
            'fullName' => $mailRequest->fullName,
            'phone' => $mailRequest->phone,
            'email' => $mailRequest->email,
            'company' => $mailRequest->company,
            'city' => $mailRequest->city,
        ];

        Mail::send('emails.faq', $data, function ($message)  {
            $message->to(config('mail.username'))->subject('From Get Price');
        });
        return response()->json(['message' => 'Mail sent successfully'], Response::HTTP_OK);
    }

    public function sendCommercialPrice(Request $mailRequest)
    {
        $data = [
            'fullName' => $mailRequest->fullName,
            'phone' => $mailRequest->phone,
            'email' => $mailRequest->email,
            'company' => $mailRequest->company,
            'city' => $mailRequest->city,
        ];

        Mail::send('emails.faq', $data, function ($message)  {
            $message->to(config('mail.username'))->subject('From Get Price');
        });

        return response()->json(['message' => 'Mail sent successfully'], Response::HTTP_OK);
    }
}
