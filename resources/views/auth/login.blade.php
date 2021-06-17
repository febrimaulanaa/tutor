@extends('layouts.app')

@section('content')

<body>

    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/background.jpg');">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Account Login
                </span>
                <form class="login100-form validate-form p-b-33 p-t-5" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="wrap-input100 validate-input {{ $errors->has('email') ? ' has-error' : '' }}"
                        data-validate="Enter email">
                        <label for="email" class="col-md-4 control-label"></label>
                        <input id="email" class="input100" type="email" name="email" placeholder="E-mail"
                            value="{{ old('email') }}" required autofocus>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                        <div class="col-md-6">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="wrap-input100 validate-input{{ $errors->has('password') ? ' has-error' : '' }}"
                        data-validate="Enter password">
                        <input id="password" class="input100" type="password" name="password" placeholder="Password" required>
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
    @endsection