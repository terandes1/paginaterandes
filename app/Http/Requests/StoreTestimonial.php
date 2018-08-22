<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTestimonial extends FormRequest
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
             'email' => 'required',
             'nacionalidad' => 'required',
             'ciudadReferecia' => 'required',
             'testimonial' => 'required',
             'global' => 'required',
             'g-recaptcha-response' => 'required|recaptcha',
        ];
    }

    public function messages()
        {
           return [
              'name.required' => 'Ingresar su nombre',
              'email.required' => 'Ingresar su email',
              'nacionalidad.required' => 'Ingresar su nacionalidad',
              'ciudadReferecia.required' => 'Ingresar ciudad de referencia',
              'testimonial.required' => 'Ingrese su testimonio',
              'global.required' => 'Califique su impresión global',
              'g-recaptcha-response.required' =>  'Verificar Captcha',
           ];
        }


}
