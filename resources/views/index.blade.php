@extends('layouts.app')

@section('title', 'The list of tasks!')
{{-- old  --}}
{{-- @if (@isset($name) != null)
    <div>The name is: {{ $name }}</div>
@endif --}}

@isset($name)
    The name is: {{ $name }}
@endisset

@section('content')
<div>
    @if (count($tasks))
        @foreach ($tasks as $task)
            <div>{{ $task->title}}</div>
        @endforeach
    @else
        <div>There are no tasks!</div>
    @endif
    {{-- we can use loop --}}
    @forelse ($tasks as $task)
    <div>
        <a href="{{ route('tasks.show', ['task' => $task->id])}}">{{ $task->title }}</a>
    </div>

    @empty
        <div>There are no task</div>
    @endforelse

    @if ($tasks->count())
        <nav>
            {{ $tasks->links() }}
        </nav>
    @endif
</div>
@endsection

