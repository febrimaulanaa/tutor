@extends('layouts.app')

<<<<<<< HEAD
=======
<!-- Main Content -->
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Reset Password</div>
<<<<<<< HEAD

=======
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    <form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
=======
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
>>>>>>> f90d6ef7e047064ebdbfb215f4a75833aee4fd96
                        {{ csrf_field() }}

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

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
<<<<<<< HEAD
                                    Send Password Reset Link
=======
                                    <i class="fa fa-btn fa-envelope"></i> Send Password Reset Link
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
