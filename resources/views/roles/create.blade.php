@extends('layout.app')

@section('content')


     @include('common.errors')



    {!! Form::open(['route' => 'roles.store' ]) !!}
    
 
        @include('roles.campos')
 
   
 
    {!! Form::submit('Nuevo Rol', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}





@endsection
