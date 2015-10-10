<!-- Nombre Field -->
<div class="form-group">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{!! $cursos->nombre !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $cursos->descripcion !!}</p>
</div>

<!-- Visible Field -->
<div class="form-group">
    {!! Form::label('visible', 'Visible:') !!}
    <p>{!! $cursos->visible !!}</p>
</div>

<!-- Cantidad Asistentes Field -->
<div class="form-group">
    {!! Form::label('cantidad_asistentes', 'Cantidad Asistentes:') !!}
    <p>{!! $cursos->cantidad_asistentes !!}</p>
</div>

<!-- Tipo Curso Field -->
<div class="form-group">
    {!! Form::label('tipo_curso', 'Tipo Curso:') !!}
    <p>{!! $cursos->tipo_curso !!}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{!! $cursos->fecha_inicio !!}</p>
</div>

<!-- Direccion Field -->
<div class="form-group">
    {!! Form::label('direccion', 'Direccion:') !!}
    <p>{!! $cursos->direccion !!}</p>
</div>

