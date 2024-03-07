<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ getenv('APP_NAME') }} | Gas Energy - Power Energy - Others</title>
    <meta name="description"
        content="We power the world with energy and innovation by embracing a future with clean energy, efficiency, and progress to illuminate a brighter tomorrow.">
    <meta name="keywords"
        content="Maryson Energy, Exceptional energy solutions, Gas Energy, Power Energy, Maryson, Energy, Power.">
    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('styles/global.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/icon.png') }}" sizes="any">
    @vite('resources/css/app.css')
    <!-- Styles -->
</head>

<body>
    <div id="app">
        <main class="">
            @include('includes.navbar')
            @yield('content')
            @include('includes.footer')
        </main>
    </div>

    {{-- Active Page --}}
    <script>
        var currentPage = window.location.pathname;

        document.querySelectorAll('.list li').forEach(function(li) {

            var link = li.querySelector('a');
            console.log(link)
            if (link.getAttribute('href') === currentPage) {
                li.querySelector('div').style.display = 'block';
            } else {
                li.querySelector('div').style.display = 'none';
            }
        });
    </script>
    {{-- Active Page --}}

    {{-- Toggle Desktop Sidebar  --}}
    <script>
        const toggleButtons = document.querySelectorAll('.toggleButton');
        const hiddenDiv = document.getElementById('hiddenDiv');
        const sideBar = document.getElementById('sideBar');
    
        toggleButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            hiddenDiv.classList.toggle('hidden');
            // sideBar.classList.toggle('hidden');
            sideBar.classList.toggle('translate-x-[500px]'); 
        })
    });
    </script>    
    {{-- Toggle Desktop Sidebar --}}

      {{-- Toggle Mobile Navigation  --}}
      <script>
        const toggleButton = document.querySelectorAll('.menuButton');
        const menu = document.getElementById('menu');
    
        toggleButton.forEach(function(button) {
        button.addEventListener('click', function() {
            menu.classList.toggle('translate-x-[500px]'); 
        })
    });
    </script>    
    {{-- Toggle Mobile Navigation --}}
    @yield('script')
</body>

</html>
