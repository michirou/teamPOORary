@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id="flat-panel">
                <div class="panel-heading">
                <span>Register</span>
                </div>

                 <div class="panel-body" style="text-align: center;">
                    <div style="color: #10635F; font-size: 300%; margin: 10%;">
                        <span class="glyphicon glyphicon-piggy-bank"></span>
                    </div>

                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('account_name') ? ' has-error' : '' }}">
                            <label for="account_name" class="col-md-4 control-label">Account Name</label>

                            <div class="col-md-6">
                                <input id="account_name" type="text" class="form-control" name="account_name" value="{{ old('account_name') }}" required autofocus>

                                @if ($errors->has('account_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('account_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('cardnumber') ? ' has-error' : '' }}">
                            <!-- <label for="cardnumber" class="col-md-4 control-label">Card Number</label>

                            <div class="col-md-6">
                                <input id="cardnumber" type="text" class="form-control" name="cardnumber" value="{{ old('cardnumber') }}" required autofocus>

                                @if ($errors->has('cardnumber'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('cardnumber') }}</strong>
                                    </span>
                                @endif
                            </div> -->
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon" id="card-addon"><span class="glyphicon glyphicon-credit-card"></span></span>
                                    <input type="text" class="form-control" name="cardnumber" id="cardnumber" placeholder="Card Number" aria-describedby="#card-addon" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('accountname') ? ' has-error' : '' }}">
                            <label for="accountname" class="col-md-4 control-label">Account Name</label>

                            <div class="col-md-6">
                                <input id="accountname" type="text" class="form-control" name="accountname" value="{{ old('accountname') }}" required autofocus>

                                @if ($errors->has('accountname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('accountname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <!-- <label for="username" class="col-md-4 control-label">Username</label>

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

                         <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <!-- <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div> -->
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon" id="address-addon"><span class="glyphicon glyphicon-map-marker"></span></span>
                                    <input type="text" class="form-control" name="address" id="address" placeholder="Address" aria-describedby="#address-addon" />
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <!-- <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div> -->
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon" id="email-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                    <input type="text" class="form-control" name="email" id="email" placeholder="Email Address" aria-describedby="#email-addon" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('work') ? ' has-error' : '' }}">
                            <!-- <label for="work" class="col-md-4 control-label">Work</label>

                            <div class="col-md-6">
                                <input id="work" type="text" class="form-control" name="work" value="{{ old('work') }}" required autofocus>

                                @if ($errors->has('work'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('work') }}</strong>
                                    </span>
                                @endif
                            </div> -->
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon" id="work-addon"><span class="glyphicon glyphicon-certificate"></span></span>
                                    <input type="text" class="form-control" name="work" id="work" placeholder="Work" aria-describedby="#work-addon" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('salary') ? ' has-error' : '' }}">
                            <!-- <label for="salary" class="col-md-4 control-label">Monthly Salary</label>

                            <div class="col-md-6">
                                <input id="salary" type="text" class="form-control" name="salary" value="{{ old('salary') }}" required autofocus>

                                @if ($errors->has('salary'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('salary') }}</strong>
                                    </span>
                                @endif
                            </div> -->
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon" id="salary-addon"><span class="glyphicon glyphicon-info-sign"></span></span>
                                    <input type="text" class="form-control" name="salary" id="salary" placeholder="Monthly Salary" aria-describedby="#salary-addon" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('numyears_working') ? ' has-error' : '' }}">
                            <!-- <label for="numyears_working" class="col-md-4 control-label">Number of Years Working</label>

                            <div class="col-md-6">
                                <input id="numyears_working" type="number" class="form-control" name="numyears_working" value="{{ old('numyears_working') }}" required autofocus>

                                @if ($errors->has('numyears_working'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('numyears_working') }}</strong>
                                    </span>
                                @endif
                            </div> -->
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon" id="numyears_working-addon"><span class="glyphicon glyphicon-calendar"></span></span>
                                    <input type="text" class="form-control" name="numyears_working" id="numyears_working" placeholder="Number of Years Working" aria-describedby="#numyears_working-addon" />
                                </div>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <!-- <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" value="{{ old('password') }}" required autofocus>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div> -->
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon" id="pass-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    <input type="password" class="form-control" name="username" id="username" placeholder="Password" aria-describedby="#pass-addon" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                           <!--  <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div> -->
                            <div class="col-xs-10 col-xs-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon" id="conpass-addon"><span class="glyphicon glyphicon-repeat"></span></span>
                                    <input type="password" class="form-control" name="conpassword" id="conpassword" placeholder="Confirm Password" aria-describedby="#conpass-addon" />
                                </div>
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 5%;">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-default" id="flat-btn" value="Register">
                                    <span>Register</span>
                                </button>
                                <button type="reset" class="btn btn-default" id="flat-btn" value="Reset">
                                    <span>Reset</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/register.js') }}"></script>
@endsection
