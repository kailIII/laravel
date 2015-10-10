@extends('layout.app')

@section('content')


    @include('common.errors')

    {!! Form::model($permiso, ['route' => ['permisos.update', $permiso->id], 'method' => 'patch']) !!}
 
    
            @include('roles.campos')
 
   
 
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}





@endsection
