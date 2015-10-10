<!--- Nombre Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('nombre', 'Nombre:') !!}
	{!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!--- Descripcion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('descripcion', 'Descripcion:') !!}
	{!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!--- Visible Field --->
<div class="form-group col-sm-6 col-lg-4">
    <div class="filled-in">
		<label>{!! Form::checkbox('visible', 1, true, ['class' => 'filled-in']) !!}Visible</label>
	</div>
</div>

<!--- Cantidad Asistentes Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('cantidad_asistentes', 'Cantidad Asistentes:') !!}
	{!! Form::number('cantidad_asistentes', null, ['class' => 'form-control']) !!}
</div>

<!--- Tipo Curso Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('tipo_curso', 'Tipo Curso:') !!}
	<div class="radio-inline">
		<label>
			{!! Form::radio('gender', 'basico', null) !!} Basico
		</label>
	</div>
	<div class="radio-inline">
		<label>
			{!! Form::radio('gender', 'medio', null) !!} Medio
		</label>
	</div>
	<div class="radio-inline">
		<label>
			{!! Form::radio('gender', 'avanzado', null, ['class' => 'with-gap']) !!} Avanzado
		</label>
	</div>
</div>

<!--- Fecha Inicio Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
	{!! Form::date('fecha_inicio', null, ['class' => 'datepicker']) !!}
</div>

<!--- Direccion Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('direccion', 'Direccion:') !!}
	{!! Form::select('direccion', [ 'Morelos' => 'Morelos', 'Monterrey' => 'Monterrey', 'Pachuca' => 'Pachuca' ], null, ['class' => 'browser-default']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
