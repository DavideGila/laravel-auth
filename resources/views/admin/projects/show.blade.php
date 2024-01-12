@extends('layouts.app')
@section('content')
    <section class="container">
        <h1>{{$project->title}}</h1>
        <p>{{$project->body}}</p>

        <button class="btn btn-primary"><a href="{{route('admin.projects.edit', $project)}}" class="text-white text-decoration-none">Edit</a></button>
    </section>
@endsection
