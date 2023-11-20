<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('metabase') }}</title>

    <!--css-->
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    <link rel="shortcut icon" href="{{asset('assets/image/systemlogo.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/image/systemlogo.png')}}">
    <link rel="icon" href="{{asset('assets/image/systemlogo.png')}}" type="image/png">

    <!--icon-->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

</head>
<body class="light-mode">

    <div class="container-scroller">

        <!--topbar-->
        @include('layouts.topbar')

        @yield('content')
        <button id="scroll-to-top-btn">
            <i class="mdi mdi-arrow-up"></i>
        </button>

        <!--footer-->
        @include('layouts.footer')
    </div>

    <!--script-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('assets/js/scroll-to-top.js') }}"></script>
    <script src="{{ asset('assets/js/marquee.js') }}"></script>
    <!--script-->
    
    
<script>
    $(document).ready(function () {
        var modeToggle = $('#mode-toggle');
        var icon = modeToggle.find('i');

        modeToggle.on('click', function () {
            $('body').toggleClass('dark-mode');
            var isDarkMode = $('body').hasClass('dark-mode');
            icon.css('color', isDarkMode ? '#ffffff' : '#5CA346');

            // Store the mode in local storage
            localStorage.setItem('mode', isDarkMode ? 'dark' : 'light');
        });

        // Check the mode on page load
        var storedMode = localStorage.getItem('mode');
        if (storedMode === 'dark') {
            $('body').addClass('dark-mode');
            icon.css('color', '#ffffff');
        } else {
            $('body').removeClass('dark-mode');
            icon.css('color', '#5CA346');
        }
    });

    function myFunction() {
        var body = document.querySelector('body');
        var modeIcon = document.querySelector('#mode-icon');
        var isDarkMode = body.classList.contains('dark-mode');

        body.classList.toggle('dark-mode');

        // Update the modeIcon based on the selected mode
        if (body.classList.contains('dark-mode')) {
            modeIcon.classList.replace('mdi-lightbulb-on-outline', 'mdi-lightbulb');
        } else {
            modeIcon.classList.replace('mdi-lightbulb', 'mdi-lightbulb-on-outline');
        }

        // Store the selected mode in local storage
        localStorage.setItem('mode', body.classList.contains('dark-mode') ? 'dark' : 'light');
    }

    // Retrieve the mode from local storage on page load
    document.addEventListener('DOMContentLoaded', function () {
        var mode = localStorage.getItem('mode');
        var body = document.querySelector('body');
        var modeIcon = document.querySelector('#mode-icon');

        // Set the mode based on the value retrieved from local storage
        if (mode === 'dark') {
            body.classList.add('dark-mode');
            modeIcon.classList.replace('mdi-lightbulb-on-outline', 'mdi-lightbulb');
        } else {
            body.classList.remove('dark-mode');
            modeIcon.classList.replace('mdi-lightbulb', 'mdi-lightbulb-on-outline');
        }
    });

    // Ensure the selected mode persists across page navigation
    window.addEventListener('beforeunload', function () {
        var body = document.querySelector('body');
        var mode = body.classList.contains('dark-mode') ? 'dark' : 'light';
        localStorage.setItem('mode', mode);
    });
</script>

<script>
    function toggleNav() {
            var overlay = document.getElementById('overlayContainer');
            overlay.style.display = (overlay.style.display === 'none' || overlay.style.display === '') ? 'block' : 'none';
        }
</script>
</body>
</html>