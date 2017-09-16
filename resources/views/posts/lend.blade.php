@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <!-- static palang please -->
            <div class="panel panel-default" id="flat-panel">
                <div class="panel-heading">Person One (to Lend)</div>
                <div class="panel-body">
                    <form>
                        <div class="col-xs-8 col-xs-offset-1">
                            <div class="form-group">
                                <label>Type:</label>
                                    <select class="form-control">
                                        <option value="borrow">Borrow</option>
                                        <option value="lend" selected="">Lend</option>
                                    </select>
                            </div>
                        </div>

                        <div class="col-xs-10 col-xs-offset-1">
                            <div class="form-group">
                                <label>Amount(PHP):</label>
                                <input type="number" name="amount" class="form-control" />
                            </div>
                        </div>

                        <div class="col-xs-10 col-xs-offset-1">
                            <div class="form-group">
                                <label>Interest(%):</label>
                                <input type="number" name="interest" class="form-control" />
                            </div>
                        </div>

                        <div class="col-xs-10 col-xs-offset-1">
                            <div class="form-group">
                                <label>Deadline:</label>
                                <input type="date" name="deadline" class="form-control" />
                            </div>
                        </div>

                        <div class="col-xs-10 col-xs-offset-1">
                            <div class="form-group">
                                <label>Meeting Place:</label>
                                <input type="text" name="deadline" class="form-control" />
                            </div>
                        </div>
                    <!-- <div class="form-group">
                        <div class="input-group">
                            <label>Type:
                                <select name="postType" id="postType">
                                    <option value="borrow">Borrow</option>
                                    <option value="lend" selected="">Lend</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="input-group">
                        <label>Amount(PHP): 
                            <input type="number" name="amount"/>
                        </label>
                    </div>
                    <label>Interest(%):
                        <input type="number" name="interest"/>
                    </label><br />
                    <label>Deadline: 
                        <input type="date" name="date"/>
                    </label><br />
                    <label>Meeting Place:
                        <input type="text" name="meetingPlace"/>
                    </label>
                </div>
                <div class="panel-footer">
                    <a href="/home2" class="btn button-primary">I'm ready to lend this! Post now!</a>
                    <a href="/home2" class="btn button-default">Cancel</a>
                </div> -->
            </div>

                <div class="panel-footer" style="text-align: center;">
                    <button class="btn btn-default" id="flat-btn" onclick="window.location.href='/home'"><span>Post now!</span></button>
                    <button class="btn btn-default" id="flat-btn" onclick="window.location.href='/home'"><span>Cancel</span></button>
                </div>
                </form>
                    
            </div>

        </div>
    </div>
</div>
@endsection