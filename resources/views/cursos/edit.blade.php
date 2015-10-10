@extends('layout.app')


@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($cursos, ['route' => ['cursos.update', $cursos->id], 'method' => 'patch']) !!}

        @include('cursos.fields')

    {!! Form::close() !!}
</div>
@endsection
