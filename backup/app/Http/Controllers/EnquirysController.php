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
            'message' => $request->dep,
            'about' => $request->doc,
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->date,
            'location' => $request->time,
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
