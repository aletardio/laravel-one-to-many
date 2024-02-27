@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Modifica il progetto</h2>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{ route('admin.projects.update', $project->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group my-3">
                        <label for="title" class="control-label @error('title') is-invalid @enderror">Titolo:</label>
                        <input type="text" name="title" id="title" placeholder="Titolo" class="form-control"
                            value="{{ old('title') ?? $project->title }}" required>
                        @error('title')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="link" class="control-label @error('link') is-invalid @enderror">Link:</label>
                        <input type="text" name="link" id="link" placeholder="Link" class="form-control"
                            value="{{ old('link') ?? $project->link }}" required>
                        @error('link')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        @if ($project->cover_image != null)
                            <div>
                                <img class="w-50" src="{{ asset('/storage/' . $project->cover_image) }}"
                                    alt="{{ $project->title }}">
                            </div>
                        @else
                            <h4>Immagine di copertina non impostata</h4>
                        @endif
                        <label for="cover_image" class="control-label">Immagine di copertina:</label>
                        <input type="file" name="cover_image" id="cover_image" placeholder="Immagine"
                            class="form-control @error('cover_image') is-invalid @enderror"
                            value="{{ old('cover_image') }}">
                        @error('cover_image')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <label for="description"
                            class="control-label @error('description') is-invalid @enderror">Descrizione:</label>
                        <textarea name="description" id="description" cols="100" rows="10" placeholder="Descrizione"
                            class="form-control" required>{{ old('description') ?? $project->description }}</textarea>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-sm btn-success">Salva</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
