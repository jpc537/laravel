<?php namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;


//inside the controller class



abstract class Controller extends BaseController {
	use ValidatesRequests;
	//use DispatchesCommands, ValidatesRequests;

}
