<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactformRequest extends Request {

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
	    	'nombre' => 'required|min:3',
	    	'apellido' => 'required|min:3',
	    	'telefono' => 'required|min:10',
	    	'email' => 'required|email',
	    	'comentarios' => 'required|min:3'
	  	];
	}

	public function messages()
    {
        return [
	    	'nombre.required' => 'Ingrese su nombre',
	    	'nombre.min' => 'Su nombre debe contener al menos 3 caracteres',
	    	'apellido.required' => 'Ingrese su apellido',
	    	'apellido.min' => 'Su apellido debe contener al menos 3 caracteres',
	    	'telefono.required' => 'Ingrese su número de teléfono',
	    	'telefono.min' => 'Su núnero debe contener al menos 10 números',
	    	'email.required' => 'Ingrese su dirección de email',
	    	'email.email' => 'Ingrese una dirección de email correcta',
	    	'comentarios.required' => 'Escriba una carta de presentación',
	    	'comentarios.min' => 'Su carta de presentación debe tener al menos 3 caracteres'
	  	];
    }

}
