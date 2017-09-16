@extends('layouts.app')

@section('content')
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
                </div>
                <div class="panel-body">
                    @foreach ($user->posts as $post)
                        <h3>
                            {{ $user->username }}
                            {{ $post->type }}
                            {{ $post->interest_rate }}
                            {{ $post->deadline }}
                        </h3>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection