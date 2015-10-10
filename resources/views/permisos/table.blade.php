<table class="table">
    <thead>
            <th>Nombre</th>
			<th>Descripcion</th>
            <th width="50px">Acciones</th>
    </thead>
    <tbody>
    @foreach($permisos as $permisos)
        <tr>
            <td>{!! $permisos->name !!}</td>
			<td>{!! $permisos->display_name !!}</td>
            <td>
                <a href="{!! route('permisos.edit', [$permisos->id]) !!}"><i class="material-icons left">input</i></a>
                <a href="{!! route('permisos.delete', [$permisos->id]) !!}" onclick="return confirm('Seguro de Eliminar este Permiso?')"><i class="material-icons left">delete</i></a>
            </td>
            
        </tr>
    @endforeach
    </tbody>
</table>
