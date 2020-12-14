<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Http\Requests\CommentReqest;

class CommentController extends Controller
{
    public function submit_fun(CommentReqest $req){

        $comment = New Comment();
        $comment -> name = $req->input('name');
        $comment -> comment = $req->input('comment');


        $comment->save();
        return redirect('/');
}
}
