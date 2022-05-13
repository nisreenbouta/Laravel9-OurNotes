<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\setting;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //

    public function index()
    {
        return view("admin.index");
    }

    public function setting()
    {
        $data= setting::first();
        if($data===null)
        {
            $data = new setting();
            $data->title = 'Project title';
            $data->save();
            $data= setting::first();
        }
        return view("admin.setting", ['data'=>$data]);
    }

    public function settingUpdate(Request $request)
    {
        $id = $request->input('id');
        $data = setting::find($id);
        $data->title = $request->input('title');
        $data->keyword = $request->input('keyword');
        $data->description = $request->input('description');
        $data->company = $request->input('company');
        $data->phone = $request->input('phone');
        $data->fax = $request->input('fax');
        $data->email = $request->input('email');
        $data->smtpserver = $request->input('smtpserver');
        $data->smtpemail = $request->input('smtpemail');
        $data->smtppassword = $request->input('address');
        $data->smtpport = $request->input('smtpport');
        $data->facebook = $request->input('facebook');
        $data->instagram = $request->input('instagram');
        $data->twitter = $request->input('twitter');
        $data->youtube = $request->input('youtube');
        $data->aboutus = $request->input('aboutus');
        $data->contact = $request->input('contact');
        $data->references = $request->input('references');
        if($request->file('icon')){
            $data->icon= $request->file('icon')->store('images');
        }
        $data->status = $request->input('status');
        $data->save();
        return redirect()->route('admin.setting');







    }

}
