<div>Hello I am blade template!</div>
{{-- old  --}}
{{-- @if (@isset($name) != null)
    <div>The name is: {{ $name }}</div>
@endif --}}

@isset($name)
    The name is: {{ $name }}
@endisset

