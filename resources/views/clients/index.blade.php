@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <p class="m-0">
                        {{ __('All Clients') }}
                    </p>
                    <a href="/dashboard" class="btn btn-info">Back to dashboard</a>
                </div>

                <div class="card-body">
                    <a href="/client/create" class="">Add a client</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3>Hi {{ Auth::user()->fname }}!</h3>
                    {{ __('Here is a list with all your clients') }}
                </div>

                <div class="card-body">
                    @foreach ($user->clients as $client)
                        <h4><a href="/client/{{ $client->id }}">{{ $client->name }}</a></h4>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
