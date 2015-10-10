<?php namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Flash;


//Modelos
use App\Models\Role as Role;
use App\Models\Permission as Permisos;


class RolesController extends Controller {

    
    

    public function index()
	{
		return view('roles.index')
				 ->with('roles', Role::paginate(5)->setPath('roles'))
				 ->with('permisos', Permisos::all());
	}


	






	public function create()
	{
		return view('roles.create');
	}


	









	public function store(Request $request)
	{
		$this->validate($request, [
        'name' => 'required|unique:roles,name'
    	]);

	    $input = $request->all();	 
	    Role::create($input);

	 
	    Flash::success('El Rol Fue creado con Exito');
		return redirect(route('roles.index'));
	}



	









	public function edit($id)
	{
		$role = Role::find($id);

		if(empty($role))
		{
			Flash::error('Rol no Encontrado');

			return redirect(route('roles.index'));
		}

    	return view('roles.edit')->with('role', $role);

	}



	









	public function update($id, Request $request)
	{
		$role = Role::find($id);

		if(empty($role))
		{
			Flash::error('Rol no Encontrado');

			return redirect(route('roles.index'));
		}

		$this->validate($request, [
           'name' => 'required|unique:roles,name'. ($id ? ",$id" : '')

    	]);

		$input = $request->all(); 
    	$role->fill($input)->save();



		Flash::success('El Rol Fue Actualizado con Exito');
		return redirect(route('roles.index'));
	}



	










	public function destroy($id)
	{
		$role = Role::find($id);

		if(empty($role))
		{
			Flash::error('Rol no Encontrado');

			return redirect(route('roles.index'));
		}

		$role->delete($id);

		Flash::success('Role Eliminado Correctamente.');

		return redirect(route('roles.index'));
	}













}

?>