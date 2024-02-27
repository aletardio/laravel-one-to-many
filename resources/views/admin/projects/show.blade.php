@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase">{{ $project->title }}</h3>
                <img src="{{ asset('/storage/' . $project->cover_image) }}" alt="{{ $project->title }}" class="w-50">
                <p class="my-2">{{ $project->description }}</p>
            </div>
        </div>
    </div>
@endsection
