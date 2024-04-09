<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use Session;
use App\Mail\SendMailable;
use App\SendMessage;
use App\Mail\SendEmail;
use Illuminate\Support\Facades\Mail;

class EnquirysController extends Controller
{
    public function store(Request $request){
        //dd($request->all());
        $data=[
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'state' => $request->state,
            'city' => $request->city,
            'about' => $request->about,
            'message' => $request->message,
        ];
        Enquiry::create($data);
        
        Mail::to('sanju93578@gmail.com')
        ->send(new SendMailable($data));
        Session::flash('flash_type','success');
        Session::flash('flash_message','Thanku We have successfully registered your Enquiry !!');
        
        
        return back();
    }

    public function view(){
        return view('Enquiry.view')
            ->with('enquiries',Enquiry::orderBy('id','DESC')->paginate(20));
    }
}
