<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('home.index');
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
