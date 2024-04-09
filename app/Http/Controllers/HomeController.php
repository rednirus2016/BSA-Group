<?php

namespace App\Http\Controllers;

use Setting;
use App\Models\Setting as AppSetting;
use Session;
use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        return view('home');
    }

    public function settings(){
        return view('settings');
    }

    public function store(Request $request){
        //dd($request->all());
        $this->validate($request,[
            'welcome_metatitle' => 'required',
            'welcome_metakeyword' => 'required',
            'welcome_metadescription' => 'required',
            'address' => 'required',
            'contactno' => 'required',
            'email' => 'required',
            'maps' => 'required',
            'footer' => 'required',
        ]);

        AppSetting::where('name','homepage')
            ->update([
                'value'=>$request->homepage
            ]);
        AppSetting::where('name','welcome_metatitle')
            ->update([
                'value'=>$request->welcome_metatitle
            ]);
        AppSetting::where('name','welcome_metakeyword')
            ->update([
                'value'=>$request->welcome_metakeyword
            ]);
        AppSetting::where('name','welcome_metadescription')
            ->update([
                'value'=>$request->welcome_metadescription
            ]);
        AppSetting::where('name','address')
            ->update([
                'value'=>$request->address
            ]);
        AppSetting::where('name','contactno')
            ->update([
                'value'=>$request->contactno
            ]);
        AppSetting::where('name','email')
            ->update([
                'value'=>$request->email
            ]);
        AppSetting::where('name','maps')
            ->update([
                'value'=>$request->maps
            ]);
        AppSetting::where('name','footer')
            ->update([
                'value'=>$request->footer
            ]);
        AppSetting::where('name','facebook')
            ->update([
                'value'=>$request->facebook
            ]);
        AppSetting::where('name','twitter')
            ->update([
                'value'=>$request->twitter
            ]);
        AppSetting::where('name','instagram')
            ->update([
                'value'=>$request->instagram
            ]);
        AppSetting::where('name','linkedin')
            ->update([
                'value'=>$request->linkedin
            ]);
        AppSetting::where('name','youtube')
            ->update([
                'value'=>$request->youtube
            ]);
        AppSetting::where('name','js')
            ->update([
                'value'=>$request->js
            ]);

        Session::flash('flash_type','success');
        Session::flash('flash_message','Settings Updated Successfully.');

        return view('home');
    }
}
