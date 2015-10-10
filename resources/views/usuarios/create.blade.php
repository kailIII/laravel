@extends('layout.app')

@section('content')


     @include('common.errors')



    {!! Form::open(['route' => 'usuarios.store' ]) !!}
    
 
        @include('usuarios.campos')
 
   
 
    {!! Form::submit('Nuevo Usuario', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}





@endsection
