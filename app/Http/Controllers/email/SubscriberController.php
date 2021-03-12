<?php

namespace App\Http\Controllers\email;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriberMail;
use App\Mail\SubscriberMailToOwner;

class SubscriberController extends Controller
{
    //
    //
    public function store(Request $request)
    {
        $data = [
            'heading_data' => "Thank you for subscribing nifticals",
            'paragraph_data' => "Thank you for subscribing us",
        ];
        $geting_email = strtolower($request->input('subscribe_email_name'));
        Mail::to($geting_email)->send(new \App\Mail\SubscriberMail($data));

        $data1 = [
            'heading_data' => "Subscribers Mail",
            'paragraph_data' => $geting_email." has subscribe nifticals.io",
        ];
        Mail::to('satirtha64@gmail.com')->send(new \App\Mail\SubscriberMailToOwner($data1));

        $request->session()->flash('success_msg', 'Successfully sent the mail');
        return redirect()->back();
        
    }
}
