@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3>Hi {{ Auth::user()->fname }}!</h3>
                    {{ __('This is your dashboard') }}
                </div>
                <div class="card-body">
                    <h3>Click the button bellow to see all your clients</h3>
                    <div>
                        <a href="/clients" class="btn btn-info">See your clients</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
