@extends('layout')
@section('title')
    
@section('content')
    <div class="container-fluid vh-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="row col col-sm-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="text-center">Create Post</h1>

                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="row mb-2">
                                <input type="text" id="title" name="title" placeholder="Title" class="form-control">
                            </div>
    
                            <div class="row mb-3">
                                <textarea name="body" id="body" placeholder="Body" class="form-control"></textarea>
                            </div>

                            <div class="row mb-2">
                                <button type="submit" class="btn btn-primary w-100">Upload Post</button>
                            </div>
                        </form>

                        <form action="{{ route('posts.index') }}" method="POST">
                            @csrf
                            @method('GET')
                            <div class="row">
                                <button type="submit" class="btn btn-outline-dark">Cancel</button>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection