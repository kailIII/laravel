@extends('layout.app')

@section('content')


     @include('common.errors')



    {!! Form::open(['route' => 'permisos.store' ]) !!}
    
 
        @include('permisos.campos')
 
   
 
    {!! Form::submit('Nuevo Permiso', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}





@endsection
