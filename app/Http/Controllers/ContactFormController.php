<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;


class ContactFormController extends Controller
{
    public function create( ){
        return view('contact.create'); // Calls create.blade.php view file under contact folder
        }
        public function store(){
            $data = request()->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'message' => 'required',
            ]);
       Mail::to($data['email'])->send(new ContactFormMail($data));
    // return redirect('/contact/create');  
    // Alert::success('Success Message', 'Message sent successfully');
    // return redirect('/contact/display');
     return redirect('/contact/display')->with('action-feedback', 'Message sent successfully');
     
    }
}
