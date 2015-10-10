@extends('layout.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Permisos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('permisos.create') !!}"> Nuevo Permiso </a>
        </div>

        <div class="row">
            @if($permisos->isEmpty())
                <div class="well text-center"></div>
            @else
                @include('permisos.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $permisos])



       


    </div>
@endsection




