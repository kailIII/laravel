@extends('layout.app')


@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'cursos.store']) !!}

        @include('cursos.fields')

    {!! Form::close() !!}
</div>
@endsection
