@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 flex-center position-ref full-height">
            <div class="panel panel-default" id="flat-panel">
                <!-- <div class="panel-heading"> -->
                    <!-- <span>Login</span> -->
                    <!-- <span class="glyphicon glyphicon-user"></span> -->
                <!-- </div> -->

                <div class="panel-body" style="text-align: center;">
                    <div style="color: #10635F; font-size: 300%; margin: 10%;">
                        <span class="glyphicon glyphicon-piggy-bank"></span>
                    </div>
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                           <!--  <label for="email" class="col-md-4 control-label">E-Mail</label>
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div> -->
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon" id="user-addon"><span class="glyphicon glyphicon-user"></span></span>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" aria-describedby="#user-addon" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon" id="pass-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input type="password" class="form-control" name="username" id="username" placeholder="Password" aria-describedby="#pass-addon" />
                                </div>
                            </div>
                            <!-- <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div> -->
                        </div>

<!--                         <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div> -->

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-default" id="flat-btn" style="width: 50%; margin-top: 10%;">
                                    <span>Login</span>
                                </button>

                                <!-- <a id="btn-link" class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a> -->
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
