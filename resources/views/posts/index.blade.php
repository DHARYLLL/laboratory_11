@extends('layout')
@section('title')
    
@section('content')
    <div class="container-fluid vh-100">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="text-center mb-3">Blog Application</h1>

                        <div class="d-flex justify-content-between mb-3">
                            <p class="fs-5 fw-bold">List of Posts</p>

                            <a href="{{ route('posts.create') }}" class="btn btn-success">Create Posts</a>
                        </div>

                        @foreach ($posts as $post)
                            <div class="row">
                                <div class="col">
                                    <p class="fs-5 fw-semibold">Title: {{ $post->title }}</p>
                                </div>

                                <div class="col d-flex justify-content-end align-items-center gap-2">
                                    <div>
                                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-outline-primary">View Posts</a>
                                    </div>

                                    <div>
                                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-outline-primary">Edit Posts</a>
                                    </div>

                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('Delete')

                                        <button type="submit" class="btn btn-outline-primary">Delete Post</button>
                                    </form>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection