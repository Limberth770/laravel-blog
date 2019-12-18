<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Permiso;

class PermisoController extends Controller
{
    public function index(){
    	
    	$permisos = Permiso::paginate(5);
    	return view('admin/permiso.index',compact('permisos'));
		
		//dd('index');
    }
    public function create(){
    	return view('admin/permiso.create');
    }
}
