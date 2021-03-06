<?php

namespace App\Http\Controllers;

use App\Language;
use Illuminate\Http\Request;
use App\Http\Requests\StoreLanguage;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $languages = Language::All();
        return view('admin.languages.index',['languages'=>$languages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.languages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLanguage $request)
    {
        $file =  $request->file('flag');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $file->move(public_path('assets/content/'),$fileName);
        $ruta = 'assets/content/'.$fileName;


      Language::create([
          'name'=>$request->name,
          'abbr'=>$request->abbr,
          'flag'=>$ruta,
          'status'=>$request->status
      ]);

    return redirect('admin/languages')->with('status','El lenguaje "' . $request->name.'" fue registrado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function show(Language $language)
    {
      return view('admin.languages.update',['language'=>$language]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Language $language)
    {

            if ($language->abbr != $request->abbr) {
                $request->validate([
                'abbr'=>'required|unique:languages,abbr',
                ]);
            }

            if ($request->flag != null) {


              \File::delete(public_path($language->flag));

                $file =  $request->file('flag');
                $extension = $file->getClientOriginalExtension();
                $fileName = time() . '.' . $extension;
                $file->move(public_path('assets/content/'),$fileName);
                $ruta = 'assets/content/'.$fileName;

                $language->fill([
                    'flag'=>$ruta
                ]);

            }

            $language->fill([
                'name'=>$request->name,
                'abbr'=>$request->abbr,
                'status'=>$request->status
            ]);

            $language->save();
            return redirect('admin/languages')->with('status','El idioma se actualizo correctamente');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language)
    {
          return redirect('admin/languages')->with('error','Por cuestiones de seguridad no se permite eliminar un idioma');
    }
}
