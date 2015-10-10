    <div class="form-group">
        {!! Form::label('nombre', 'Nombre Permiso:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

     <div class="form-group">
        {!! Form::label('display_name', 'Descripcion:', ['class' => 'control-label']) !!}
        {!! Form::textarea('display_name', null, ['class' => 'form-control']) !!}
    </div>