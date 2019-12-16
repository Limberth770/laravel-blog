<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Permiso;

class PermisoController extends Controller
{
    public function index(){
    	
    	$permisos = array(
    		array('id'=>'1','nombre'=>'BLABLA','slug'=>'blasl')
    	);
    	return view('admin/permiso.index',compact('permisos'));
		
		//dd('index');
    }
    public function create(){
    	dd('create');
    }
}
