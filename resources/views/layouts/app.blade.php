<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{config('app.name')}} | @yield('title')</title>

    {{-- Style --}}
    @stack('prepend-style')
    @include('components.public.style')
    @stack('addon-style')
</head>

<body>

    {{-- Page Content --}}
    @include('components.public.sidebar')

    <section id="content">
        @include('components.public.navbar')
        @yield('content')
    </section>


    {{-- Script --}}
    @stack('prepend-script')
    @include('components.public.script')
    @stack('addon-script')

</body>

</html>
