<?php namespace App\Http\Requests;

use App\Http\Requests\Request;
use Illuminate\Routing\Route;
use App\User;

class UpdateUserRequest extends Request {

	public function __Construct(Route $route){
		$this->route=$route;
	}

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
            'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users,email,'. $this->route->getParameter('users'),
			'password' => '' ,
			'rol'=>'required|in:usuario,administrador',
			'activo'=>'required|in:si,no',
		];
	}

}
