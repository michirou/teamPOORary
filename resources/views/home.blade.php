@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Dashboard
                    <a href="/create_transaction">Create Transaction</a>
                    <a href="/view_transaction">View Transactions from Peers</a>
                </div>
                <div class="panel-body">
                    <h3>
                        @foreach ($user->posts as $post)
                            {{ $user->username }}
                            {{ $post->type }}
                            {{ $post->interest_rate }}
                            {{ $post->deadline }}
                            <br>
                        @endforeach
                    </h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection