@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <h2 class="m-0">
                        {{ $client->first_name }} {{ $client->last_name }}
                    </h2>
                    <a href="/clients" class="btn btn-info">Back to all clients</a>
                </div>
                <div class="card-body">
                    <p><strong>Company:</strong> {{ $client->company }}</p>
                    <p><strong>Email:</strong> <a href="mailto:{{ $client->email }}">{{ $client->email }}</a></p>
                    <p><strong>Phone:</strong> <a href="tel:{{ $client->phone }}">{{ $client->phone }}</a></p>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
