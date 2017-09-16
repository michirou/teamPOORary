@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <!-- static palang please -->
            <div class="panel panel-default">
                <div class="panel-heading">Person One (to Lend)</div>
                <div class="panel-body">
                    <label>Type:
                        <select name="postType" id="postType">
                            <option value="borrow">Borrow</option>
                            <option value="lend" selected="">Lend</option>
                        </select>
                    </label>
                    <label>Amount(PHP): 
                        <input type="number" name="amount"/>
                    </label><br />
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
                </div>
            </div>

        </div>
    </div>
</div>
@endsection