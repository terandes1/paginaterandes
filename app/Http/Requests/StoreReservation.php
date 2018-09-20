<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReservation extends FormRequest
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
    // 'name',
    //     'email',
    //     'phone',
    //     'skype',
    //     'country',
    //     'fecha',
    //     'travel_type',
    //     'numberPersonas',
    //     'room_type',
    //     'guide_service',
    //     'message',
    //     'tour_id',
    public function rules()
    {
        return [
             'name' => 'required',
             'email' => 'email',
             'phone' => 'required',
             'country' => 'required',
             'fecha' => 'required',
             'travel_type' => 'required',
             'numberPersonas' => 'required|integer',
             'room_type' => 'required',
             'guide_service' => 'required',
             'message' => 'required',
             'tour_id' => 'integer',
             // 'ciudadReferecia' => 'required',
             // 'testimonial' => 'required',
             // 'global' => 'required',
             'g-recaptcha-response' => 'required|recaptcha',
        ];
    }
  public function messages()
    {
       return [
          'name.required' => 'Ingresar su nombre',
          'email.required' => 'Ingresar su email',
          'phone.required' => 'Ingresar su número de teléfono o celular ',
          'country.required' => 'Ingresar su país ',
          'fecha.required' => 'Ingresar fecha',
          'travel_type.required' => 'Ingresar tipo de viaje',
          'numberPersonas.required' => 'Ingresar numero de personas',
          'room_type.required' => 'Ingresar tipo de habitaciones',
          'guide_service.required' => 'Ingresar servicios de guia extra',
          'message.required' => 'Ingresar su descripción de viaje',
          // 'ciudadReferecia.required' => 'Ingresar ciudad de referencia',
          // 'testimonial.required' => 'Ingrese su testimonio',
          // 'global.required' => 'Califique su impresión global',
          'g-recaptcha-response.required' =>  'Verificar Captcha',
       ];
    }
}
