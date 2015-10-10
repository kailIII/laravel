<table class="table">
    <thead>
    <th>Nombre</th>
			<th>Descripcion</th>
			<th>Visible</th>
			<th>Cantidad Asistentes</th>
			<th>Tipo Curso</th>
			<th>Fecha Inicio</th>
			<th>Direccion</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($cursos as $cursos)
        <tr>
            <td>{!! $cursos->nombre !!}</td>
			<td>{!! $cursos->descripcion !!}</td>
			<td>{!! $cursos->visible !!}</td>
			<td>{!! $cursos->cantidad_asistentes !!}</td>
			<td>{!! $cursos->tipo_curso !!}</td>
			<td>{!! $cursos->fecha_inicio !!}</td>
			<td>{!! $cursos->direccion !!}</td>
            <td>
                <a href="{!! route('cursos.edit', [$cursos->id]) !!}"><i class="material-icons left">input</i></a>
                <a href="{!! route('cursos.delete', [$cursos->id]) !!}" onclick="return confirm('Are you sure wants to delete this cursos?')"><i class="material-icons left">delete</i></a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
