@extends('layout.app')

@section('content')


    @include('common.errors')

    {!! Form::model($role, ['route' => ['roles.update', $role->id], 'method' => 'patch']) !!}
 
    
            @include('roles.campos')
 
   
 
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}





@endsection
