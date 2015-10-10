@extends('layout.app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">cursos</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('cursos.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($cursos->isEmpty())
                <div class="well text-center"></div>
            @else
                @include('cursos.table')
            @endif
        </div>

        @include('common.paginate', ['records' => $cursos])


    </div>
@endsection