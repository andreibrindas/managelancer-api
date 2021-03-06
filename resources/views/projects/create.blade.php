@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/client" method="POST">
        @csrf
        
        <div class="row col-6 offset-2">
            <h1>Add New Project</h1>
        </div>
        <div class="form-group row">
            <label for="project_name" class="col-md-4 col-form-label text-md-right">Project Name</label>

            <div class="col-md-6">
                <input id="project_name" type="text" class="form-control @error('project_name') is-invalid @enderror" name="project_name" value="{{ old('project_name') }}" required autocomplete="project_name" autofocus>

                @error('project_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="project_description" class="col-md-4 col-form-label text-md-right">Project Description</label>

            <div class="col-md-6">
                <input id="project_description" type="text" class="form-control @error('project_description') is-invalid @enderror" name="project_description" value="{{ old('project_description') }}" required autocomplete="project_description" autofocus>

                @error('project_description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="client" class="col-md-4 col-form-label text-md-right">Client </label>

            <div class="col-md-6">
                <select id="client" class="form-control @error('client') is-invalid @enderror" name="client" value="{{ old('client') }}" required autocomplete="client" autofocus>
                    @foreach ($clients as $client)
                        <option value="{{ $client->company }}">{{ $client->company }}</option>
                    @endforeach
                </select>
                @error('client')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="form-group row">
            <label for="project_price" class="col-md-4 col-form-label text-md-right">Project Price</label>

            <div class="col-md-6">
                <input id="project_price" type="tel" class="form-control @error('project_price') is-invalid @enderror" name="project_price" value="{{ old('project_price') }}" required autocomplete="project_price" autofocus>

                @error('project_price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-2 pt-4">
                <button class="btn btn-primary">Add Project</button>
            </div>
        </div>

    </form>

</div>
@endsection
