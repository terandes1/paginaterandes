<?php

namespace App\Http\Controllers;


use App\User;


use Illuminate\Http\Request;

class TrashController extends Controller
{
    public function index(){
        $users = User::onlyTrashed()->get();
        return view('admin.trash.index',['users'=>$users]);
    }

    public function restore_user($id){
        $user = User::onlyTrashed()->find($id)->restore();
        return redirect('admin/trash')->with('status','El Usuario Ha sido correctamenta restaurado');
    }


}
