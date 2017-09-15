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