@extends('layouts.app')

@section('title', isset($task) ? 'Edit Task' : 'Add Task')

@section('styles')
    <style>
        .error-message {
            color: red;
            font-size: 0.8rem;
        }
    </style>
@endsection

@section('content')
    <form action="{{ isset($task) ? route('tasks.update', ['task' => $task->id]) : route('tasks.store') }}" method="POST" class="needs-validation" novalidate>

        @csrf
        @isset($task)
            @method('PUT')
        @endisset
        <div class="mb-3">

        <div>
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ $task->title ?? old('title') }}">
            @error('title')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" rows="3" class="form-control" >{{ $task->description ?? old('description') }}</textarea>
            @error('description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>

        <div>
            <label for="long_description" class="form-label">Long Description</label>
            <textarea name="long_description" id="long_description" rows="10" class="form-control" >{{ $task->long_description ?? old('long_description') }}</textarea>
            @error('long_description')
                <p class="error-message">{{ $message }}</p>
            @enderror
        </div>
        <div><button type="submit" class="btn btn-primary">@isset($task)
                Edit Task
            @else
                Add Task
        @endisset</button></div>
    </form>
@endsection
