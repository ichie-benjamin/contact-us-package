<?php

namespace Benny\Contact\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Benny\Contact\Models\Contact;
use Benny\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
       public function index(){
           return view('contact-us::contact');
       }
       public function store(Request $request){
           Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->all()));
           Contact::create($request->all());
       }
}
