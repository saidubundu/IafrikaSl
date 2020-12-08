<?php

namespace App\Http\Controllers;

use App\Http\Resources\AboutResource;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Inertia\Inertia;

class ContactController extends Controller
{
    //
    //
    public function index()
    {
        $about = About::findOrFail(1);
        return Inertia::render('Contact/Index', [
            'abouts' => new AboutResource($about),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'subject' => 'required'
        ]);

        Contact::create($request->all());
        return redirect()->back();

        Mail::send('emails.contact-message', [
            'msg' => $request->message
        ], function ($mail) use ($request){
            $mail->from($request->email, $request->name);
            $mail->to('peektower@gmail.com')->subject('Contact Message');
        }
        );

        return back()->with('success', 'Thank you for contact us!');
    }
}
