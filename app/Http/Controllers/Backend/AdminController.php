<?php

namespace App\Http\Controllers\backend;

use App\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function admin(){
        return view("back-end/blog/admin");
    }

    public function store(){

        $admins = new admin();

        $admins->category = request('category');
        $admins->base = request('title');
        $admins->email = request('body');
        $admins->reply = request('reply');
        $admins->body = request('image');

        $admins->save();

        return redirect('/backend/blog');

    }
}
