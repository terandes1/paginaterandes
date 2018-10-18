<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservationTour extends FormRequest
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
             'nameTour' => 'required',
             'nameCategoria' => 'required',
             'numero' => 'required',
             'email' => 'email',
             'ciudad' => 'required',
             'mensaje' => 'required',
             // 'g-recaptcha-response'=>'required'
        ];
    }
  public function messages()
    {
       return [
          'nameTour.required' => 'Error del servidor',
          'nameCategoria.required' => 'Ingresar su nombre',
          'numero.required' => 'Ingresar su número de teléfono o celular ',
          'email.required' => 'Ingresar su email',
          'ciudad.required' => 'Ingresar su país ',
          'mensaje.required' => 'Ingresar mensaje',
          // 'g-recaptcha-response.required' =>  'Verificar Captcha'
       ];

    }
}
