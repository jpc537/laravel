<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pista;
use App\User;
use App\Reserva;

use Illuminate\Http\Request;

class ReservasController extends Controller {

	
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('is_admin');
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$reservas = Reserva::all();
		
		return view('admin.reservas.index',compact('reservas'));
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
		//return view('admin.pistas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
	//	$pistas = Pista::create($request->all());
       
       
       
       // return redirect()->route('admin.pistas.index');
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
	public function destroy($id,Request $request)
	{
		
		$reservas = Reserva::find($id);

		  if ($reservas->delete())
		  { 
		    Session::flash('message','Eliminado  correctamente!');
		    Session::flash('class','success'); 
		  } else { 
		    Session::flash('message','Ha ocurrido un error!'); 
		    Session::flash('class','danger'); 
		  } 

		$reservas=Reserva::paginate();
		return  redirect()->route('admin.reservas.index',compact('reservas'));
	}


}
