<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
    public function submit_fun(Request $req){
        $contact = New Comment();
        $contact -> name = $req->input('name');
        $contact -> comment = $req->input('comment');

        $contact->save();

        return redirect('/');
}
}
