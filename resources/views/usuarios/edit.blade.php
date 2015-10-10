@extends('layout.app')

@section('content')


    @include('common.errors')

    {!! Form::model($usuarios, ['route' => ['usuarios.update', $usuarios->id], 'method' => 'patch']) !!}
 
    
            @include('usuarios.campos')
 
   
 
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
 
    {!! Form::close() !!}





@endsection
