<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class notice_Controller extends Controller
{
    public function index() {
        return view('welcome');
    }
    // public function write(){
    //     return view('create');
    // }
    public function write(Request $request){
        DB::table('post')->insert(['post'])([
            'title' => $request->title,
            'writer' => $request->writer,
            'password' => $request->password,
            'content' => $request->content,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/list');
    }
}
