<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ContactUs;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Jobs\QueueSenderEmail;

class ContactController extends Controller
{
    //     /**
    //      * Display a listing of the resource.
    //      *
    //      * @return \Illuminate\Http\Response
    //      */
    // function __construct()
    // {
    //     $this->middleware('permission:contact-list|contact-create|contact-edit|contact-delete', ['only' => ['index', 'show']]);
    //     $this->middleware('permission:contact-create', ['only' => ['create', 'store']]);
    //     $this->middleware('permission:contact-edit', ['only' => ['edit', 'update']]);
    //     $this->middleware('permission:contact-delete', ['only' => ['destroy']]);
    // }
    public function index()
    {
        $contacts = Contact::latest()->paginate(5);
        return view('contacts.index', compact('contacts'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
    public function create()
    {
        return view('contact');
    }
    public function store(ContactRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:20',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required|max:500',
        ]);
        if ($validator->fails()) {
            return view('contact')->withErrors($validator);
        }

        Mail::send('emails.contact-message', [
            'message' => $request->message
        ], function ($mail)  use ($request) {
            $mail->from($request->email, $request->name);
            $mail->to('hello@example.com')->subject('Contact Message');
            $qs = (new QueueSenderEmail($mail))->delay(now()->addMinutes(3));
            $this->dispatch($qs);
        });
        return redirect()->back()->with('flash_message', 'Спасибо вам за сообщение');
    }

    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $contact = new Contact;
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        Mail::send('contact_email', [
            'name' => $request->get('name'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message'),
        ], function ($message) use ($request) {
            $message->from($request->email);
            $message->to('hello@example.com');
        });
        return back()->with('success', 'Сообщение было успешно отправлено!');
    }

    public function getContact()
    {
        return view('contact');
    }
    public function adminContact(Request $request)
    {
        $contacts = Contact::paginate(10);
        return view('contacts.index', ['contacts' => $contacts]);
    }
}
