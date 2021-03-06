<?php

namespace App\Http\Controllers;

use App\User;
use App\Language;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     function __construct()
    {
         $this->middleware(['auth' ,'roles:normal,admin']);
    }
    public function index()
    {
        
        
        $users = User::All();
        $languages = Language::All();
        return view('admin.users.index',['users'=>$users,'languages'=>$languages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $languages = Language::All();
        return view('admin.users.create',['languages'=>$languages]);
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
          'password'=>bcrypt( $request->input('password') ),
          'language_id'=>$request->language_id,
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
      $languages = Language::All();
      return view('admin.users.update',['user'=>$user,'languages'=>$languages]);
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
            'language_id'=>$request->language_id,
            'privilege'=>$request->privilege,
            'status'=>$request->status
          ]);

        $user->save();

        return redirect('admin/users')->with('status','El Usuario "' . $user->name . '" Fue Actualizado correctamente');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->id == 1){
          return redirect('admin/users')->with('error','No se puede eliminar al super admin');
        }
        $user->delete();
        return redirect('admin/users')->with('status','El usuario ha sido eliminado exitosamente');
    }
}
