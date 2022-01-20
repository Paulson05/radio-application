<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    function save_comment(Request $request,$slug,$id){
        $request->validate([
            'comment'=>'required'
        ]);
        $data=new Comment;
        $data->post_id=$id;
        $data->comment=$request->comment;
        $data->save();
        return redirect('detail/'.$slug.'/'.$id)->with('success','Comment has been submitted.');
    }
}
