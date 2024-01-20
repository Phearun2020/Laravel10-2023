<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    {{-- blade-formatter-disable --}}
    <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-2 py-1 text-center font-medium shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-50
        }
        .link {
            @apply font-medium text-gray-700 underline decoration-pink-500 mb-4
        }

        label {
            @apply block uppercase text-slate-700 mb-2
        }

        input, textarea {
            @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
        }

        .error {
            @apply text-red-500 text-sm
        }
    </style>
    {{-- blade-formatter-enable --}}
    <title>Laravel 10 Task List App</title>
    @yield('styles')
</head>
<body class="container mx-auto mt-10 mb-10 max-w-3xl">
    <h1 class=" text-2xl">@yield('title')</h1>

    <div x-data="{ flash: true}">
        @if (session()->has('success'))
            <div x-show="flash" class="relative  mb-10 rounded border border-green-400 bg-green-100 px-4 py-3 text-lg text-green-700" role="alert">
                <strong class="font-bold">Success!</strong>
                <div>{{ session('success') }}</div>
                <span @click="flash = false" class="cursor-pointer absolute top-0 bottom-0 px-4 py-3 right-0">X</span>
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>
