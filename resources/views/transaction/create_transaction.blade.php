@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" id="flat-panel">
                <div class="panel-heading">
                <span>Create Transaction</span>
                </div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/process">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">
                            <label for="type" class="col-md-4 control-label">Type</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control" name="type" value="{{ old('type') }}" required autofocus>

                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('interest_rate') ? ' has-error' : '' }}">
                            <label for="interest_rate" class="col-md-4 control-label">Interest Rate</label>

                            <div class="col-md-6">
                                <input id="interest_rate" type="integer" min="0" max="100" class="form-control" name="interest_rate" value="{{ old('interest_rate') }}" required autofocus>

                                @if ($errors->has('interest_rate'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('interest_rate') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('deadline') ? ' has-error' : '' }}">
                            <label for="deadline" class="col-md-4 control-label">Deadline</label>

                            <div class="col-md-6">
                                <input id="deadline" type="date" class="form-control" name="deadline" value="{{ old('deadline') }}" required autofocus>

                                @if ($errors->has('deadline'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deadline') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        
                        <div class="form-group{{ $errors->has('meeting_place') ? ' has-error' : '' }}">
                            <label for="meeting_place" class="col-md-4 control-label">Meeting Address</label>

                            <div class="col-md-6">
                                <input id="meeting_place" type="text" class="form-control" name="meeting_place" value="{{ old('meeting_place') }}">

                                @if ($errors->has('meeting_place'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('meeting_place') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('amount') ? ' has-error' : '' }}">
                            <label for="amount" class="col-md-4 control-label">Amount to be lent/borrowed</label>

                            <div class="col-md-6">
                                <input id="amount" type="text" class="form-control" name="amount" value="{{ old('work') }}" required autofocus>

                                @if ($errors->has('amount'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('amount') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" style="margin-top: 5%;">
                            <div class="col-md-6 col-md-offset-4">

                                <button type="submit" class="btn btn-default" id="flat-btn" value="Add">
                                    <span>Add</span>
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
@endsection
