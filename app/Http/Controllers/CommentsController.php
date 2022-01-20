<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
   public function postComment(Request $request,$slug,$id){

//        dd($request->all());
        $request->validate([
            'comment'=>'required'
        ]);
        $data=new Comment;
        $data->post_id=$id;
        $data->comment=$request->comment;
       $data->name=$request->name;
       $data->email=$request->email;
        $data->save();
        return redirect('detail/'.$slug.'/'.$id)->with('success','Comment has been submitted.');
    }
}
