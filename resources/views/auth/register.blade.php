@extends('layouts.app')

@section('breadcrumb')
    <li class="breadcrumb-item">Create Account</li>
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        
                        <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                            {{ csrf_field() }}
                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                <input id="firstname" type="text" class="form-control" placeholder="First Name" name="firstname" value="{{ old('firstname') }}" required autofocus>
                            </div>

                            <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-user"></i></span>
                                <input id="lastname" type="text" class="form-control" placeholder="Last Name" name="lastname" value="{{ old('lastname') }}" required>
                            </div>

                            <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-addon">@</span>
                                <input id="email" type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}" required>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i></span>
                                <input id="password-confirm" type="password" class="form-control" placeholder="Repeat password" name="password_confirmation" required>
                            </div>

                            <button type="submit" class="btn btn-block btn-success">Create Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
