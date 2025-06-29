<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            @yield('title', 'Vermocs_default')
        </title>
    @include('layout.header')
    </head>
    <body class="selection:bg-redViolet selection:text-white">
    @yield('content')
    <footer class="mx-w-[100%] mt-[70px] bg-snow">
        @include('layout.footer')
    </footer>
    <script src="{{asset('assets/js/script.js')}}"></script>
</body>
</html>