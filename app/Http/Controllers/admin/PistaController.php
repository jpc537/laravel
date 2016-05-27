<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Pista;

use Illuminate\Http\Request;

class PistaController extends Controller {

	
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
		$pistas = Pista::all();
		
		return view('admin.pistas.index',compact('pistas'));
	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.pistas.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//
		$pistas = Pista::create($request->all());
       
       
       
        return redirect()->route('admin.pistas.index');
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
