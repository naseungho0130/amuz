<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;

class notice_Controller extends Controller
{
    public function index() {
        return view('welcome');
    }
    public function write(){
        return 'test';
    }
}
