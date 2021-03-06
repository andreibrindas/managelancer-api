@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">
                    <p class="m-0">
                        {{ __('All Projects') }}
                    </p>
                    <a href="/dashboard" class="btn btn-info">Back to dashboard</a>
                </div>

                <div class="card-body">
                    <a href="/project/create" class="">Add a project</a>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <h3>Hi {{ Auth::user()->fname }}!</h3>
                    {{ __('Here is a list with all your projects') }}
                </div>

                <div class="card-body">
                    @foreach ($projects as $project)
                        <h4><a href="/project/">{{ $project->project_name }}</a></h4>
                        {{-- {{ var_dump($project->id) }} --}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
