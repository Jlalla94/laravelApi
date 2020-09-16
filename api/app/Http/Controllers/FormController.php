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
            'message' => $mailRequest->message,
        ];

        Mail::send('emails.faq', $data, function ($message)  {
            $message->to('lapkir94@gmail.com')->subject('From FAQ');
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

        Mail::send('emails.priceRequest', $data, function ($message)  {
            $message->to('lapkir94@gmail.com')->subject('From Get Price');
        });
        return response()->json(['message' => 'Mail sent successfully'], Response::HTTP_OK);
    }

    public function sendCommercialPrice(Request $mailRequest)
    {
        $data = [
            'fullName' => $mailRequest->fullName,
            'phone' => $mailRequest->phone,
            'message' => $mailRequest->message,
        ];

        Mail::send('emails.commercialPrice', $data, function ($message) use ($mailRequest) {
            $message->attach($mailRequest->file);
            $message->to('lapkir94@gmail.com')->subject('From Commercial Price');
        });

        return response()->json(['message' => 'Mail sent successfully'], Response::HTTP_OK);
    }
}
