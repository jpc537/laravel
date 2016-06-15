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

			/*SELECT * FROM `reservas` WHERE id_user = 59 AND id_pista = "Pista01" AND fechaR = "2016-06-16" AND horaR = "09:00-10:00"
			ESTA ES LA CONSULTA PARA COMPROBAR SI HAY ALGUNA IGUAL YA CREADA ANTERIORMENTE

			$ejemploReserva=DB::select("SELECT * FROM  reservas WHERE id_user=? AND id_pista=? AND fechaR=? AND  horaR=?",
				[$user->id], id_pista );

			if (isset($ejemploReserva)){

			}*/

			return View::make('home')->with('pistas', $pistas)->with('reservas',$reservas)->with('pistaSelect', $pistaSelect);
	}

	public function destroy($id,Request $request)
	{
		$pistas = Pista::all();
		$pistaSelect =DB::table('pistas')->lists('nombre','nombre');
		$reservas = Reserva::find($id);

		if ($reservas->delete())
		{
			Session::flash('message','Eliminado  correctamente!');
			Session::flash('class','success');
		} else {
			Session::flash('message','Ha ocurrido un error!');
			Session::flash('class','danger');
		}

		return View::make('home')->with('pistas', $pistas)->with('reservas',$reservas)->with('pistaSelect', $pistaSelect);
	}

	

}
