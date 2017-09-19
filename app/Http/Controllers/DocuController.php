<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
USE App\Document;

class DocuController extends Controller
{
   public function postdocu(Request $r)	
    {
    	if ($r->ajax())
    	{
     		$docu = new Docu();
    		$docu['readCount'] = $r->readCount;
    		$docu['commentCount'] = $r->commentCount;
    		$docu['title'] = $r->title;
    		$docu['content'] = $r->content;
			$docu['pureContent'] = $r->pureContent;
			$docu['regdate'] = $r->regdate;
			// $docu['id'] = $r['id']; 		
    		if ($docu ->save())
    		 {
    		 	// return response($r->all());
    		 	return response(['msg'=>'inserted successfully']);
    		 	// return view('docu.postdocu', compact('documents'));
    		 }
    	}
    }
 //     public function postdocu() {
 //        return view('docu.postdocu');
	// }
}
