<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Flash;


//Modelos
use App\User as Usuario;
use App\Models\Role as Role;


class UsuariosController extends Controller
{

	
	
	public function index()
	{

		return view('usuarios.index')
			->with('usuarios', Usuario::paginate(5)->setPath('usuarios'));
		

	}



	public function crear()
	{
	return view('usuarios.create')->with('roles', Role::lists('name', 'id'))->with('rol_seleccionado', null);

	}



	public function crear_guardar(Request $request)
	{
		$this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);



	    $input = $request->all();

	    Usuario::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => bcrypt($input['password']),
        ])->attachRole(Role::find($input['rol']));



	 
	    Flash::success('El Usuario Fue creado con Exito');
		return redirect(route('usuarios.index'));
	}








	

	public function actualiza($id)
	{
		

    	$usuario = Usuario::find($id);
		$userRole = $usuario->roles()->first();
       
		if(empty($usuario))
		{
			Flash::error('Usuario no Encontrado');

			return redirect(route('usuarios.index'));
		}

    	return view('usuarios.edit')
    			->with('usuarios', $usuario)
    			->with('roles', Role::lists('name', 'id'))
    			->with('rol_seleccionado', $userRole->id);

	}






	public function actualiza_guarda($id, Request $request)
	{

		$usuario = Usuario::find($id);

		if(empty($usuario))
		{
			Flash::error('Usuario no Encontrado');

			return redirect(route('usuarios.index'));
		}

		
		$this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users,email'.($id ? ",$id" : ''),
            'password' => 'required|confirmed|min:6',
        ]);



	    $input = $request->all();

	    	Usuario::whereId($id)->update([
		            'name' => $input['name'],
		            'email' => $input['email'],
		            'password' => bcrypt($input['password']),
		        ]);


	    $usuario = Usuario::find($id);
        $usuario->roles()->detach();        
        $usuario->attachRole(Role::find($input['rol']));

	 
	    Flash::success('El Usuario Fue Actualizado con Exito');
		return redirect(route('usuarios.index'));
	}




	public function eliminar($id)
	{
		$usuario = Usuario::find($id);

		if(empty($usuario))
		{
			Flash::error('Usuario no Encontrado');

			return redirect(route('usuarios.index'));
		}

		$usuario->delete($id);

		Flash::success('Usuario Eliminado Correctamente.');

		return redirect(route('usuarios.index'));
	}






	

	
}
