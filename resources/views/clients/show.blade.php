@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <p class="m-0">
                        {{ $client->name }}
                    </p>
                    <a href="/clients" class="btn btn-info">Back to all clients</a>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
