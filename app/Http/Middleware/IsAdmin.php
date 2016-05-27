<?php namespace App\Http\Middleware;

use Closure;
use Session;
use Illuminate\Contracts\Auth\Guard;

class IsAdmin {


	public function __construct(Guard $auth)
	{

		$this->auth=$auth;
	}

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if($this->auth->user()->rol !='administrador')
		{
			$this->auth->logout();
			Session::flash('message','No eres administrador...vuelve a tu sitio!!!!');
			Session::flash('class','danger');
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('auth/login');
			}
		}
		
		return $next($request);
	}

}
