<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CkeditorController extends Controller
{
    public function ckedit() 
    {
        return view('ckeditor.ckedit');
    }

    public function insert(Request $request){
        DB::table('documents')->insert([
            'title'=>$request['title'],
            'content'=>$request['editor1'],
        ]);
        return back();
    }

    public function viewCode()
    {
    	$data=DB::table('documents')->get();
    	return view('ckeditor.viewCode', compact('data'));
    }

    public function readInfo($id)
    {
    	$data=DB::table('documents')->where('id',$id)->first();
    	return view('ckeditor.read', compact('data'));
    }

    public function deleteInfo($id)
    {
    	DB::table('documents')->where('id',$id)->delete();
    	return back();
    }

    public function editInfo($id)
    {
        $data=DB::table('documents')->where('id',$id)->first();
        return view('ckeditor.editInfo', compact('data'));
    }

     public function updateInfo(Request $request)
     {
        DB::table('documents')->where('id',$request['id'])->update([
            'title'=>$request['title'],
            'content'=>$request['editor1']
        ]);
        return back();
     }

}
