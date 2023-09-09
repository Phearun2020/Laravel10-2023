<div>Hello I am blade template!</div>
{{-- old  --}}
{{-- @if (@isset($name) != null)
    <div>The name is: {{ $name }}</div>
@endif --}}

@isset($name)
    The name is: {{ $name }}
@endisset

<h1>The list of tasks</h1>
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
        <a href="{{ route('tasks.show', ['id' => $task->id])}}">{{ $task->title }}</a>
    </div>

    @empty
        <div>There are no task</div>
    @endforelse
</div>

