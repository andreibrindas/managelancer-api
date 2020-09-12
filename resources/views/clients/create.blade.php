@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/client" method="POST">
        @csrf
        
        <div class="row col-6 offset-2">
            <h1>Add New Client</h1>
        </div>
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Client Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-2 pt-4">
                <button class="btn btn-primary">Add Client</button>
            </div>
        </div>

    </form>

</div>
@endsection
