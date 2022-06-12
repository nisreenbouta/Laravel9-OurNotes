<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Models\Content;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pid)
    {


        $content= Content::find($pid);
        $files = File::where('content_id', $pid)->get();
        return view('admin.file.index', [
            'content'=> $content,
            'files'=> $files,

        ]);
        foreach ($files as $rs){
            echo $rs;
        }exit();

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
    public function store(Request $request, $pid)
    {
        $data = new File();
        $data->content_id = $pid;
        $data->title = $request->title;
        if($request->file('file')){
            $data->file = $request->file('file')->store('file');
        }
        $data->save();
        return redirect()->route('admin.file.index',['pid'=>$pid]);
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
    public function destroy($pid, $id)
    {

        $data= File::find($id);
        if ($data->file && Storage::disk('public')->exists($data->file)) {
            Storage::delete($data->file);
        }
        $data->delete();
        return redirect()->route('admin.file.index',['pid'=>$pid]);
    }
}
