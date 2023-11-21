<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class notice_Controller extends Controller

{
    public function index() {
        $posts = DB::table('post')->get();
        return view('list',compact("posts"));
    }

    public function post() {
        $posts = DB::table('post')->get();
        return view('posts',compact("read"));
    }

    public function update() {
        $posts = DB::table('post')->get();
        return view('posts',compact("update"));
    }

    public function write(Request $request){
        DB::table('post')->insert([
            'title' => $request->title,
            'writer' => $request->writer,
            'password' => $request->password,
            'content' => $request->content,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
        return redirect('/');
    }
}
