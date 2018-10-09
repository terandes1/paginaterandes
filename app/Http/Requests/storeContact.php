<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeContact extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
             'name' => 'required',
             'email' => 'email',
             'telefono' => 'required',
             'message' => 'required',
             'idioma' => 'required',
             'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
  public function messages()
    {
       return [
          'name.required' => 'Ingresar su nombre',
          'email.required' => 'Ingresar su email',
          'telefono.required' => 'Ingresar su número de teléfono o celular ',
          'message.required' => 'Ingrese mensaje ',
          'idioma.required' => 'Error del servidor ',
          'g-recaptcha-response.required' =>  'Verificar Captcha',
       ];
    }

}
