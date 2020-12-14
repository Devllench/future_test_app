<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CommentReqest;

class CommentController extends Controller
{
    public function submit_fun(CommentReqest $req){

        $comments = New Comment();
        $comments -> name = $req->input('name');
        $comments -> comment = $req->input('comment');
        $comments -> save();
        return redirect('/');
    }
    public function allDate(){

        //dd(Comment::all());
        return view('index',['date' => Comment::all()]);
    }
}
