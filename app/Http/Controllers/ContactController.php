<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Mail\ContactUs;
use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Validator;
use App\Jobs\QueueSenderEmail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:contact-list|contact-create|contact-edit|contact-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:contact-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:contact-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:contact-delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $contacts = Contact::orderBy('id', 'DESC')->paginate(5);
        return view('contacts.index', compact('contacts'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('contacts.create', compact('permission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required|max:20',
            'phone' => 'required|numeric',
            'email' => 'required|email',

        ]);
        Contact::create($request->all());

        return redirect()->route('contacts.index')->with('success', 'Contact created successfully!');


        // Mail::send('emails.contact-message', [
        //     'message' => $request->message
        // ], function ($mail)  use ($request) {
        //     $mail->from($request->email, $request->name);
        //     $mail->to('hello@example.com')->subject('Contact Message');
        //     $qs = (new QueueSenderEmail($mail))->delay(now()->addMinutes(3));
        //     $this->dispatch($qs);
        // });
        // return redirect()->back()->with('flash_message', 'Спасибо вам за сообщение');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        $contact = Contact::find($contact);
        return view('contacts.show', compact('contacts'));
    }
    //     /**
    //      * Show the form for editing the specified resource.
    //      *
    //      * @param  int  $id
    //      * @return \Illuminate\Http\Response
    //      */

    public function edit(Contact $contact)
    {
        $contact = Contact::find($contact);
        return view('contacts.edit', compact('contacts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        request()->validate([
            'name' => 'required|max:20',
            'phone' => 'required|numeric',
            'email' => 'required|email',

        ]);


        $contact = Contact::find($contact);
        $contact->update($request->all());
        return redirect()->route('contacts.index')
            ->with('success', 'Contact updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact = Contact::find($contact);
        $contact->delete();

        return redirect()->route('contacts.index')
            ->with('success', 'Contact deleted successfully');
    }

    public function getContact()
    {
        return view('contact');
    }

    public function createContact()
    {
        return view('contact');
    }

    public function contactSubmit(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|numeric',
            'email' => 'required|email',

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
}
