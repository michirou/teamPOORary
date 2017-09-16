@extends('layouts.app')

@section('content')
<div class="container-fluid" style="margin-top: -1%;">
    <div class="row">
        <div style="width: 100%;">
            <div class="panel panel-default" id="flat-panel">
                <div class="panel-heading" style="overflow: hidden;">
                    <div class="pull-right">
                        <button class="btn btn-default" id="flat-btn" onclick="window.location.href='/lend_money'"><span>Lend Money</span></button>
                        <button class="btn btn-default" id="flat-btn" onclick="window.location.href='/borrow_money'"><span>Borrow Money</span></button>
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel">
                        <div class="panel-heading">Person One (to Lend)</div>
                        <div class="panel-body">                            
                            Amount: PHP 1000.00<br />
                            Interest: 10%<br />
                            Meeting Place: Iloilo Convention Center
                        </div>
                    </div>
                <div class="panel panel-default" id="feed-panel" style="margin-top: -5%;">
                        <div class="panel-heading">Person One (to Lend)</div>
                        <div class="panel-body">                            
                            Amount: PHP 1000.00<br />
                            Interest: 10%<br />
                            Meeting Place: Iloilo Convention Center
                        </div>
                    </div>

                <div class="panel panel-default" id="feed-panel" style="margin-top: -5%;">
                    <div class="panel-heading">Person Two (to Borrow)</div>
                    <div class="panel-body">
                        Amount: PHP 500.00<br />
                        Interest: 5%<br />
                        Meeting Place: SM Iloilo
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel" style="margin-top: -5%;">
                    <div class="panel-heading">Person 3 (to Lend)</div>
                    <div class="panel-body">
                        Amount: PHP 10000.00<br />
                        Interest: 15%<br />
                        Meeting Place: Somewhere else
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel" style="margin-top: -5%;">
                    <div class="panel-heading">Person 3 (to Lend)</div>
                    <div class="panel-body">
                        Amount: PHP 10000.00<br />
                        Interest: 15%<br />
                        Meeting Place: Somewhere else
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel" style="margin-top: -5%;">
                    <div class="panel-heading">Person 3 (to Lend)</div>
                    <div class="panel-body">
                        Amount: PHP 10000.00<br />
                        Interest: 15%<br />
                        Meeting Place: Somewhere else
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel" style="margin-top: -5%;">
                    <div class="panel-heading">Person 3 (to Lend)</div>
                    <div class="panel-body">
                        Amount: PHP 10000.00<br />
                        Interest: 15%<br />
                        Meeting Place: Somewhere else
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel" style="margin-top: -5%;">
                    <div class="panel-heading">Person 3 (to Lend)</div>
                    <div class="panel-body">
                        Amount: PHP 10000.00<br />
                        Interest: 15%<br />
                        Meeting Place: Somewhere else
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection