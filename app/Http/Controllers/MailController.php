<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pista;
use Mail;
use Session;
use Redirect;

use Illuminate\Http\Request;

class MailController extends Controller {



	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		return \View::make('contact');

	}
  
	

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		;
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		/*$fromEmail = 'ejemplos1234hmis@gmail.com';
		$fromName = 'Esteban';
		Mail::send('emails.contacto', $request->all(), function ($msj) use ($fromEmail, $fromName){
			$msj->from($fromEmail, $fromName);
			$msj->to($fromEmail, $fromName);
		});

		return \View::make('contact');*/
		//return Redirect::to('/contact');
		//dd($request->all());


		//guarda el valor de los campos enviados desde el form en un array
		$data = $request->all();

		//se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
		\Mail::send('emails.contacto', $data, function($message) use ($request)
		{
			//remitente
			$message->from($request->email);

			//asunto
			$message->subject($request->asunto);

			//receptor
			$message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));

		});
		Session::flash('message', 'Mensaje enviado correctamente.');
		return Redirect::to('/auth/login');

		//dd($request->all());

    }
	public function send(Request $request)
	{
		//guarda el valor de los campos enviados desde el form en un array
		/*$data = $request->all();

		//se envia el array y la vista lo recibe en llaves individuales {{ $email }} , {{ $subject }}...
		\Mail::send('emails.contacto', $data, function($message) use ($request)
		{
			//remitente
			$message->from($request->email, $request->name);

			//asunto
			$message->subject($request->subject);

			//receptor
			$message->to(env('CONTACT_MAIL'), env('CONTACT_NAME'));

		});
		return \View::make('contact');*/
		//dd($request->all());
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
