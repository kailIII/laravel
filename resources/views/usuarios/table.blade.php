<table class="table">
    <thead>
            <th>Nombre</th>
			<th>Correo</th>
            <th width="50px">Acciones</th>
    </thead>
    <tbody>
    @foreach($usuarios as $usuarios)
        <tr>
            <td>{!! $usuarios->name !!}</td>
			<td>{!! $usuarios->email !!}</td>
            <td>
                <a href="{!! route('usuarios.edit', [$usuarios->id]) !!}"<i class="material-icons left">input</i></a>
                <a href="{!! route('usuarios.delete', [$usuarios->id]) !!}" onclick="return confirm('Seguro de Eliminar este Rol?')"><i class="material-icons left">delete</i></a>
            </td>
            
        </tr>
    @endforeach
    </tbody>
</table>
