<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index(){
        return view('user.index');
    }

    public function create(){
        return view('user.index');
    }

    public function update($id){
        return view('user.update', compact('id'));
    }

    public function delete($id){
        return view('user.delete', compact('id'));
    }

    public function view($id){
        return view('user.view', compact('id'));
    }
}
