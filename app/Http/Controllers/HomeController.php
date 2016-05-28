<?php namespace App\Http\Controllers;
use App\Pista;
use App\Reserva;
use DB;
use View;
use Illuminate\Http\Request ;
use Input;
use Illuminate\Contracts\Auth\Guard;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(Guard $auth)
	{
		$this->middleware('auth');
		$this->middleware('is_active');
		$this->auth=$auth;
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index(Guard $auth)
	{		
			$user=$this->auth->user(); 
			$pistas = Pista::all();
			$pistaSelect =DB::table('pistas')->lists('nombre','nombre');
			$reservas=DB::select("SELECT * FROM  reservas WHERE id_user=?",[$user->id]);
			return View::make('home')->with('pistas', $pistas)->with('reservas',$reservas)->with('pistaSelect', $pistaSelect);
	}

	public function reservar(Guard $auth){
			$user=$this->auth->user(); 
			$pistas = Pista::all();
			$pistaSelect =DB::table('pistas')->lists('nombre','nombre');
			$reserva=new Reserva;
			$reserva->id_user=$user->id;
			$reserva->id_pista=Input::get('pista');
			$reserva->fechaR=Input::get('fechaR');
			$reserva->horaR=Input::get('horaR');
			$reserva->save();
			$reservas=DB::select("SELECT * FROM  reservas WHERE id_user=?",[$user->id]);
			return View::make('home')->with('pistas', $pistas)->with('reservas',$reservas)->with('pistaSelect', $pistaSelect);
	}

	

}
