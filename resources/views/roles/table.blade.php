<table class="table">
    <thead>
            <th>Nombre</th>
			<th>Descripcion</th>
            <th width="100px">Acciones</th>
    </thead>
    <tbody>
    @foreach($roles as $roles)
        <tr>
            <td>{!! $roles->name !!}</td>
			<td>{!! $roles->display_name !!}</td>
            <td>

                <a href="#modalPermisos" alt="Permisos" id="{!! $roles->id !!}" class="modal-trigger title"><i class="material-icons ">accessibility</i></a>
                <a href="{!! route('roles.edit', [$roles->id]) !!}"><i class="material-icons left">input</i></a>
                <a href="{!! route('roles.delete', [$roles->id]) !!}" onclick="return confirm('Seguro de Eliminar este Rol?')"><i class="material-icons left">delete</i></a>

            </td>
            
        </tr>
    @endforeach
    </tbody>
</table>
