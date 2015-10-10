@extends('layout.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Roles</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('roles.create') !!}"> Nuevo Rol </a>
        </div>

        <div class="row">
            @if($roles->isEmpty())
                <div class="well text-center"></div>
            @else
                @include('roles.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $roles])

        @include('roles.permisos')


       


    </div>
@endsection




