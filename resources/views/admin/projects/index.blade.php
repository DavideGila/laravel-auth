@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>Project List</h1>
        @foreach ($projects as $project)
            <p><a href="{{ route('admin.projects.show', $project->id) }}">{{ $project->title }}</a></p>
        @endforeach
        <button class="btn btn-primary"><a href="{{route('admin.projects.create', $project)}}" class="text-white text-decoration-none"  >Crea</a></button>
    </section>
@endsection
