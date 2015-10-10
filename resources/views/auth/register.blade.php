@extends('layout.lapp')


@section('content')


<div class="container">

{!! Form::open(array('url' => 'auth/register')) !!}

    {!! csrf_field() !!}

    <div class="row">
            <h1 class="pull-left">Registro</h1>
     </div>

    <div class="form-group col-sm-6 col-lg-4">
        Name
        <input type="text" name="name" value="{{ old('name') }}" class="form-control">
    </div>

   <div class="form-group col-sm-6 col-lg-4">
        Email
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div class="form-group col-sm-6 col-lg-4">
        Password
        <input type="password" name="password" class="form-control">
    </div>

    <div class="form-group col-sm-6 col-lg-4">
        Confirm Password
        <input type="password" name="password_confirmation" class="form-control">
    </div>

    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>

{!! Form::close() !!}



@endsection