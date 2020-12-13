<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function submit_fun(Request $req){
        $validation = $req->validate([
            'comment'=>'required|min:5|max:50',
            'name'=>'required|min:1|max:20'

        ]);


}
}
