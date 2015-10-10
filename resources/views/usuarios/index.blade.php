@extends('layout.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Usuarios</h1>
            <a href="{!! route('usuarios.create') !!}" 
            class="waves-effect waves-light blue-grey darken-3 btn">
             Nuevo Usuario 
             <i class="material-icons right">add</i>
             </a>
        </div>

        <div class="row">
            @if($usuarios->isEmpty())
                <div class="well text-center"></div>
            @else
                @include('usuarios.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $usuarios])



       


    </div>
@endsection




