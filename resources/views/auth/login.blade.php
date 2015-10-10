@extends('layout.lapp')


@section('content')


<div class="container">


{!! Form::open(array('url' => 'auth/login')) !!}

    {!! csrf_field() !!}

     <div class="row">
            <h1 class="pull-left">Login</h1>
     </div>


    <div class="form-group col-sm-6 col-lg-4">
        Email
        <input type="email" name="email" value="{{ old('email') }}" class="form-control">
    </div>

    <div class="form-group col-sm-6 col-lg-4">
        Password
        <input type="password" name="password" id="password" class="form-control">
    </div>

    <div class="form-group col-sm-12">
        <input type="checkbox" name="remember" > Remember Me
    </div>

    <div class="form-group col-sm-12">
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="{{ URL::to('auth/register') }}" class="btn btn-primary" >Register</a>
    </div>


{!! Form::close() !!}


</div>

@endsection

