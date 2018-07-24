<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests\StoreUser;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::All();
        return view('admin.users.index',['users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {

        User::create([
          'name'=>$request->name,
          'email'=>$request->email,
          'password'=>bcrypt($request->Password),
          'language_id'=>1,
          'privilege'=>$request->privilege,
          'status'=>$request->status
        ]);
        return redirect('admin/users')->with('status','El usuario "' . $request->name . '" ha sido creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
      return view('admin.users.update',['user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {

      if ($request->password != ''){
        $user->fill(['password'=>bcrypt($request->password)]);
      }
      
          $user->fill([
            'name'=>$request->name,
            'email'=>$request->email,
            'language_id'=>1,
            'privilege'=>$request->privilege,
            'status'=>$request->status
          ]);

        $user->save();

        return redirect('admin/users')->with('status','El Usuario "' . $user->name . '" Fue Actualizao correctamente');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect('admin/users')->with('status','El usuario ha sido eliminado exitosamente');
    }
}
