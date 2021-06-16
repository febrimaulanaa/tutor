@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>

                <div class="panel-body">
<<<<<<< HEAD
                    <form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
=======
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96
                        {{ csrf_field() }}

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
<<<<<<< HEAD
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>
=======
                                <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}">
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

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                            <div class="col-md-6">
<<<<<<< HEAD
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
=======
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    Reset Password
=======
                                    <i class="fa fa-btn fa-refresh"></i> Reset Password
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
