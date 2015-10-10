<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Flash;
use Response;
use Input;


//Modelos
use App\Models\Role as Role;
use App\Models\Permission as Permisos;
use App\Models\RolesPermission as RolesPermission;


class PermisosController extends Controller {

    
    

    public function index()
	{
		return view('permisos.index')
			->with('permisos', Permisos::paginate(5)->setPath('permisos'));
	}


	public function permisos_ajax($id)
	{
		
		return Response::json(RolesPermission::where('role_id', '=', $id)->get());
		
	}


	public function asignar()
	{
		
		$rol = Role::find(Input::get('rol_id'));
        $rol->attachPermission(Input::get('permiso'));
        return Response::json('Se actualizo el permiso con exito');
		
	}


	public function desasignar()
	{
		
		$rol = Role::find(Input::get('rol_id'));
        $rolPermisos = RolesPermission::where('role_id', '=', Input::get('rol_id'))
            ->where('permission_id', '=', Input::get('permiso'))->get()->first();
        $desasignar = RolesPermission::destroy($rolPermisos->id);
        return Response::json('Se actualizo el permiso con exito');
		
	}


	public function show()
	{
		
		//return Input::get('id');
		
	}


	






	public function create()
	{
		return view('permisos.create');
	}


	









	public function store(Request $request)
	{
		$this->validate($request, [
        'name' => 'required|unique:permissions,name'
    	]);

	    $input = $request->all();	 
	    Permisos::create($input);

	 
	    Flash::success('El Permiso Fue creado con Exito');
		return redirect(route('permisos.index'));
	}



	









	public function edit($id)
	{
		$permiso = Permisos::find($id);

		if(empty($permiso))
		{
			Flash::error('Permiso no Encontrado');

			return redirect(route('permisos.index'));
		}

    	return view('permisos.edit')->with('permiso', $permiso);

	}



	









	public function update($id, Request $request)
	{
		$permiso = Permisos::find($id);

		if(empty($permiso))
		{
			Flash::error('Permiso no Encontrado');

			return redirect(route('permisos.index'));
		}

		$this->validate($request, [
           'name' => 'required|unique:permissions,name'. ($id ? ",$id" : '')

    	]);

		$input = $request->all(); 
    	$permiso->fill($input)->save();



		Flash::success('El Permiso Fue Actualizado con Exito');
		return redirect(route('permisos.index'));
	}



	










	public function destroy($id)
	{
		$permiso = Permisos::find($id);

		if(empty($permiso))
		{
			Flash::error('Permiso no Encontrado');

			return redirect(route('permisos.index'));
		}

		$permiso->delete($id);

		Flash::success('Permiso Eliminado Correctamente.');

		return redirect(route('permisos.index'));
	}













}

?>