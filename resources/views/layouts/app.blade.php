<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Style --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    {{-- Title --}}
    <title>Comics | @yield('title_section')</title>
</head>

<body>

    @include('partials.header')

    <main>
        @yield('main_section')
    </main>

    @include('partials.footer')

</body>

</html>


<style>
    body {
        font-family: 'Nunito', Arial, Helvetica, sans-serif;
    }
</style>