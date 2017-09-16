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
                        <div class="panel-heading">
                            <span>Person One (to Lend)</span>
                            <div class="pull-right"><span>[&nbsp;<a href="#">View Details</a>&nbsp;]</span></div>
                        </div>
                        <div class="panel-body">                            
                            Amount: PHP 1000.00<br />
                            Interest: 10%<br />
                            Meeting Place: Iloilo Convention Center<br />
                            Deadline: September 20, 2017<br />
                        </div>
                    </div>
                <div class="panel panel-default" id="feed-panel">
                        <div class="panel-heading">
                            <span>Person One (to Lend)</span>
                            <div class="pull-right"><span>[&nbsp;<a href="#">View Details</a>&nbsp;]</span></div>
                        </div>
                        <div class="panel-body">                            
                            Amount: PHP 1000.00<br />
                            Interest: 10%<br />
                            Meeting Place: Iloilo Convention Center<br />
                            Deadline: September 24, 2017<br />
                        </div>
                    </div>

                <div class="panel panel-default" id="feed-panel">
                    <div class="panel-heading">
                        <span>Person Two (to Borrow)</span>
                        <div class="pull-right"><span>[&nbsp;<a href="#">View Details</a>&nbsp;]</span></div>
                    </div>
                    <div class="panel-body">
                        Amount: PHP 500.00<br />
                        Interest: 5%<br />
                        Meeting Place: SM Iloilo<br />
                        Deadline: September 25, 2017<br />
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel">
                    <div class="panel-heading">
                        <span>Person 3 (to Lend)</span>
                        <div class="pull-right"><span>[&nbsp;<a href="#">View Details</a>&nbsp;]</span></div>
                    </div>
                    <div class="panel-body">
                        Amount: PHP 10000.00<br />
                        Interest: 15%<br />
                        Meeting Place: Somewhere else<br />
                        Deadline: September 19, 2017<br />
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel">
                    <div class="panel-heading">
                        <span>Person 4 (to Borrow)</span>
                        <div class="pull-right"><span>[&nbsp;<a href="#">View Details</a>&nbsp;]</span></div>
                    </div>
                    <div class="panel-body">
                        Amount: PHP 10000.00<br />
                        Interest: 15%<br />
                        Meeting Place: Somewhere else<br />
                        Deadline: September 26, 2017<br />
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel">
                    <div class="panel-heading">
                        <span>Person 5 (to Lend)</span>
                        <div class="pull-right"><span>[&nbsp;<a href="#">View Details</a>&nbsp;]</span></div>
                    </div>
                    <div class="panel-body">
                        Amount: PHP 10000.00<br />
                        Interest: 15%<br />
                        Meeting Place: Somewhere else<br />
                        Deadline: September 20, 2017<br />
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel">
                    <div class="panel-heading">
                        <span>Person 6 (to Borrow)</span>
                        <div class="pull-right"><span>[&nbsp;<a href="#">View Details</a>&nbsp;]</span></div>
                    </div>
                    <div class="panel-body">
                        Amount: PHP 10000.00<br />
                        Interest: 15%<br />
                        Meeting Place: Somewhere else<br />
                        Deadline: September 20, 2017<br />
                    </div>
                </div>

                <div class="panel panel-default" id="feed-panel">
                    <div class="panel-heading">
                        <span>Person 7 (to Lend)</span>
                        <div class="pull-right"><span>[&nbsp;<a href="#">View Details</a>&nbsp;]</span></div>
                    </div>
                    <div class="panel-body">
                        Amount: PHP 10000.00<br />
                        Interest: 15%<br />
                        Meeting Place: Somewhere else<br />
                        Deadline: September 24, 2017<br />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection