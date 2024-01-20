@extends('layouts.app')

@section('title', 'The list of tasks!')

@isset($name)
    The name is: {{ $name }}
@endisset

@section('content')

    <nav class="mb-10">
        <a href="{{ route('tasks.create') }}" class="link">Add Task</a>
    </nav>
    @forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['task' => $task->id])}}" @class(['text-gray-800', 'line-through' => $task->completed])>{{ $task->title }}</a>
    </div>

    @empty
        <div>There are no tasks!</div>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-6">
            {{ $tasks->links() }}
        </nav>
    @endif
@endsection

