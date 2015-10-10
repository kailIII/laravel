    <div class="form-group">
        {!! Form::label('name', 'Nombre :', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

     <div class="form-group">
        {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>


     <div class="form-group">
        {!! Form::label('rol', 'Rol:', ['class' => 'control-label']) !!}
            {!!  Form::select('rol', $roles, $rol_seleccionado, ['class' => 'browser-default']) !!}
    </div>


    <div class="form-group">
        {!! Form::label('password', 'Password:', ['class' => 'control-label']) !!}
        {!! Form::password('password', null, ['class' => 'form-control']) !!}
    </div>


     <div class="form-group">
        {!! Form::label('password_confirmation', 'Confirmar Password:', ['class' => 'control-label']) !!}
        {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
    </div>