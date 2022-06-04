<?php

namespace App\Http\Controllers;

use App\Models\BookMark;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookMarkController extends Controller
{

    public static function countbookmark()
    {
        return BookMark::where('user_id', Auth::id())->count();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=BookMark::where('user_id', Auth::id())->get();
        return view('home.user.bookmark', [
            'data'=>$data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

        public function store(Request $request)
    {
        $id=$request->id;

        $data=BookMark::where('content_id', $id)->where('user_id', Auth::id())->first();
        $data = new BookMark();
        $data->content_id = $request->input('id');
        $data->user_id =Auth::id();
        $data->save();

        return redirect()->back()->with('info', 'Added to Bookmarks Succecfully!. ');

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data= Category::find($id);
        $data->delete();
        return redirect()->back()->with('info', 'Deleted From Bookmarks Succecfully!. ');

    }
}
