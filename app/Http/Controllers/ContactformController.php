<?php namespace App\Http\Controllers;
use Request;
use App\Http\Requests\ContactformRequest;
use DB;
use Mail;

class ContactformController extends Controller {

	public function store(ContactformRequest $request){

		$nombre = Request::input('nombre');
		$apellido = Request::input('apellido');
		$telefono = Request::input('telefono');
		$email = Request::input('email');
		$comentarios = Request::input('comentarios');


		$results = DB::table('contacto')->insert([
			'nombre'			=> $nombre,
			'apellido'			=> $apellido,
			'telefono'			=> $telefono,
			'email'				=> $email,
			'comentarios'		=> $comentarios
		]);

		
		if( $results ){

			// Data message
			$data = array(
				'email'		=> $email,
				'nombre'	=> $nombre,
				'subject'	=> 'Contacto desde el sitio ',
				'to'		=> 'smaffia@gmail.com'
			);

			// the data that will be passed into the mail view blade template
			$htmlData = array(
				'nombre'			=> $nombre,
				'apellido'			=> $apellido,
				'telefono'			=> $telefono,
				'email'				=> $email,
				'comentarios'		=> $comentarios
			);
			
			// Send mail
			Mail::send('emails.contacto', $htmlData, function($message) use ($data)
			{
				$message->from( $data['email'] , $data['nombre'] );
				$message->to( $data['to'] , 'LABRI' )->subject( $data['subject'] );
			});
			
			// dd(Mail::failures());
			if( count(Mail::failures()) == 0 ) {
				return view('gracias');
			}else{
				return view('gracias');
			}
			
		}
		
		
	}

}
