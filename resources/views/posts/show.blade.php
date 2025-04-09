@extends('layout')
@section('title', 'View Post')

@section('content')
    <div class="container-fluid vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="row col col-sm-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="text-center">Your Post</h1>
                        <div class="row mb-2">
                            <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}" readonly>
                        </div>
                        <div class="row mb-3">
                            <textarea name="body" id="body" class="form-control" readonly>{{ $post->body }}</textarea>
                        </div>
                        <a href="{{ route('posts.index') }}" class="btn btn-outline-dark w-100">Back to Posts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection