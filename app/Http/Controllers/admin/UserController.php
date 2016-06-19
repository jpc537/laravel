<?php namespace App\Http\Controllers\admin;

use App\Http\Requests;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Session;
use Input;
//use Request;
use Illuminate\Http\Request ;
use Illuminate\Routing\Redirector;
use Illuminate\Routing\Route;
use Illuminate\Contracts\Filesystem\Factory;
use Storage;
class UserController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
		$this->middleware('is_admin');
	}

	 public function findUser(Route $route)
    {
        $this->user = User::findOrFail($route->getParameter('users'));
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
		//
		$users = User::FilterAndPaginate($request->get('name'), $request->get('type'));
		return view('admin.users.index',compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		return view('admin.users.create');
	}


	 /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @internal param Redirector $redirect
     * @return Response
     */
	public function store(CreateUserRequest $request)
	{
        $user = User::create($request->all());
        return redirect()->route('admin.users.index');
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
		$user=User::findorfail($id);
		return view('admin.users.edit',compact('user'));
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UpdateUserRequest $request,$id)
	{
		$user=User::findorfail($id);
		$user->fill($request->all());			
		$user->save();

		$users=User::paginate();
		return view('admin.users.index',compact('users'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id,Request $request)
	{
		//
		$users = User::find($id);

		  if ($users->delete())
		  { 
		    Session::flash('message','Eliminado  correctamente!');
		    Session::flash('class','success'); 
		  } else { 
		    Session::flash('message','Ha ocurrido un error!'); 
		    Session::flash('class','danger'); 
		  } 

		$users=User::paginate();
		return  redirect()->route('admin.users.index',compact('users'));
	}

}
