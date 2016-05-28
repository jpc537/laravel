<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Session;

class IsActive {


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
		if($this->auth->user()->activo !='si')
		{
			$this->auth->logout();
			Session::flash('message','No estas activo!');
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
