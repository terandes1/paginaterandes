<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index(){
        return view('admin.trash.index');
    }


}