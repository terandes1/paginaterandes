<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Icon;
use Image;
use DB;
class IconController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Icons = Icon::all();
 
        return view('admin.icons.index',['icons' => $Icons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.icons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           $img = $request->file('img');
           $url = $img->getClientOriginalExtension();
           $event = new Icon;
           $event->name = $request->name;
           $event->url = $url;        
           $event->save();
           $id=DB::table('icons')->max('id');
           $nombreImgen = $id.'.'.$img->getClientOriginalExtension();
           $destinationPath = '../public/assets/content/iconos';
           if (!file_exists($destinationPath)) {
              mkdir($destinationPath, 666, true);
             }
           $thumb_img = Image::make($img->getRealPath())->resize(64,64);
           $thumb_img->save($destinationPath.'/'.$nombreImgen,20);
           return redirect()->route('icons.index')->with('info' , 'Se registro correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          $icon = Icon::find($id);

          return view('admin.icons.update',['icon'=>$icon]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $img = $request->file('img');
        if(empty($img))
        {
          $icon = Icon::find($id);
          $icon->update([
              'name'         => $request->name,
          ]);
          return redirect()->route('icons.index');
        }else{
          $img = $request->file('img');
          $url = $img->getClientOriginalExtension();
          $event = Icon::find($id);
          $event->update([
              'name'         => $request->name,
              'img'         => $url,
          ]);
          $itemIcon = Icon::where('id', '=',$id)->get()[0];
          $destinationPath = '../public/assets/content/iconos/'.$id.'.'.$itemIcon->url;
          if(file_exists(public_path($destinationPath)))
            {
              unlink(public_path($destinationPath));
            }else{
            }
          $nombreImgen = $id.'.'.$img->getClientOriginalExtension();
          $destinationPathN = '../public/assets/content/iconos';
           if (!file_exists($destinationPathN))
           {
              mkdir($destinationPathN, 666, true);
           }
           $thumb_img = Image::make($img->getRealPath())->resize(64,64);
           $thumb_img->save($destinationPathN.'/'.$nombreImgen,20);
           return redirect()->route('icons.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $itemIcons = Icon::where('id', '=',$id)->get()[0];
        Icon::destroy($id);
        $destinationPath = '../public/assets/content/iconos/'.$id.'.'.$itemIcons->url;
        if(file_exists(public_path($destinationPath)))
            {
            unlink(public_path($destinationPath));
            }else{
            }
        return redirect()->route('icons.index')
                        ->with('success','Member deleted successfully');
    }
}
