@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
<<<<<<< HEAD

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
=======
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
=======
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
=======
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <input id="password" type="password" class="form-control" name="password" required>
=======
                                <input id="password" type="password" class="form-control" name="password">
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

<<<<<<< HEAD
                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
=======
                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    Register
=======
                                    <i class="fa fa-btn fa-user"></i> Register
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
