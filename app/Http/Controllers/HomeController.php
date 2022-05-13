<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use App\Models\Meassage;
use App\Models\setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public static function maincategorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }


    public function index()
    {
        $page='home';
        $sliderdata=Content::limit(4)->get();
        $contentlist1=Content::limit(6)->get();
        $setting= setting::first();
        return view('home.index',[
            'page'=>$page,
            'setting'=>$setting,
            'sliderdata'=>$sliderdata,
            'contentlist1'=>$contentlist1
        ]);
    }

    public function about()
    {
        $setting= setting::first();
        return view('home.about',[
            'setting'=>$setting
        ]);
    }

    public function references()
    {
        $setting= setting::first();
        return view('home.references',[
            'setting'=>$setting
        ]);
    }

    public function contact()
    {
        $setting= setting::first();
        return view('home.contact',[
            'setting'=>$setting
        ]);
    }

    public function storemessage(Request $request)
    {
        dd($request);
        $data = new Meassage();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip=request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your message has been sent, Thank you!. ');

    }

    public function content($id)
    {
        $images = DB::table('images')->where('content_id', $id)->get();
        $data= Content::find($id);
        return view('home.content',[
            'data'=>$data,
            'images'=>$images
        ]);
    }

    public function categorycontent($id)
    {

        $category= Category::find($id);
        $content = DB::table('contents')->where('category_id', $id)->get();

        return view('home.categorycontent',[
            'category'=>$category,
            'content'=>$content
        ]);
    }

    public function test()
    {
        return view('home.test');
    }

    public function param($id, $number)
    {
      //  echo "parameter 1:", $id;
        //echo "<br>parameter 2:", $number;
        //echo "<br>Sum parameters:", $id+$number;
        return view('home.test2',
            [
                'id' => $id,
                'number' => $number
            ]);
    }

    public function save(Request $request)
    {
        echo "save Function";
        echo "first name :", $_REQUEST["fname"];
        echo "last name :", $_REQUEST["lname"];
        return view('home.test2',
            [
                'fname' => $_REQUEST["fname"],
                'lname' => $_REQUEST["lname"]
            ]);
    }


}
