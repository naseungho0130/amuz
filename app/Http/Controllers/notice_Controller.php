<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class notice_Controller extends Controller

{
    public function index() {
        $posts = DB::table('post')->paginate(5);

        return view('list',compact("posts"));
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

    public function read(Request $request) {
        $id = $request->id;
        $post = DB::table('post')->where('id',$id)->first();
        return view('read',compact("post"));
    }

    public function updatepost(Request $request) {
        $id = $request->id;
        $post = DB::table('post')->where('id',$id)->first();
        return view('update',compact("post"));
        
        DB::table('post')->updatepost([
            'title' => $request->title,
            'writer' => $request->writer,
            'password' => $request->password,
            'content' => $request->content
        ]);
        
        $post->updatepost($request);
        return redirect()->route('post.list', $post);
    }

    public function edit(Request $request){
        DB::table('post')
              ->where('id', $request->id)
              ->update([
                'title' => $request->title,
                'content' => $request->content
              ]);
              return redirect()->route('list');
    }


    public function delete(Request $request){
        DB::table('post')->where('id', $request->id)->delete();
        return redirect()->route('list');
    }
}
