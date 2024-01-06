@extends('layouts.app')

@section('title', 'Add Task')

@section('content')
    <form action="{{ route('tasks.store') }}" method="POST" class="needs-validation" novalidate>

        @csrf
        <div class="mb-3">

        <label for="title" class="form-label">Title</label>
        <input type="text" name="title" id="title" class="form-control" required> </div> <div class="mb-3">

        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" rows="3" class="form-control" required></textarea> </div> <div class="mb-3">

        <label for="long_description" class="form-label">Long Description</label>
        <textarea name="long_description" id="long_description" rows="10" class="form-control" required></textarea> </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection
