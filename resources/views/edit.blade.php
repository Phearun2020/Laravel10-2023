@extends('layouts.app')

@section('title', 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST">

        @csrf
        @method('PUT')
        <div>
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title }}">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="3" class="form-control">{{ $task->description }}</textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description" class="form-label">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10" class="form-control">{{ $task->long_description }}</textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div><button type="submit" class="btn btn-primary">Edit</button></div>
    </form>
@endsection
