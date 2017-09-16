@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container-fluid" style="margin-top: -1%;">
    <div class="row">
        <div style="width: 100%;">
            <div class="panel panel-default" id="flat-panel">
                <div class="panel-heading" style="overflow: hidden;">
                    <div class="pull-right">
                        <button class="btn btn-default" id="flat-btn"><span>New Post</span></button>
                    </div>
                    <!-- Dashboard -->
                    <!-- <a href="/create_transaction">Create Transaction</a> -->
                    <!-- <a href="/view_transaction">View Transactions from Peers</a> -->
<div class="container">

    <!-- static palang please -->

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <a href="/lend_money" class="btn btn-primary">Lend Money</a>
             <a href="/borrow_money" class="btn btn-primary">Borrow Money</a>


            <div class="panel panel-default">
                <div class="panel-heading">Person One (to Lend)</div>
                <div class="panel-body">
                      <!--   <div class="alert alert-success">
                            {{ session('status') }}
                        </div> -->
                    
                    Amount: PHP 1000.00<br />
                    Interest: 10%<br />
                    Meeting Place: Iloilo Convention Center
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">Person Two (to Borrow)</div>
                <div class="panel-body">
                    Amount: PHP 500.00<br />
                    Interest: 5%<br />
                    Meeting Place: SM Iloilo
                </div>
            </div>

            <div class="panel panel-default">
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
@endsection