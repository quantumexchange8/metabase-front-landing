<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@lang('message.metabase')</title>

    <!--css-->
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">

    <link rel="shortcut icon" href="{{asset('assets/image/systemlogo.png')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/image/systemlogo.png')}}">
    <link rel="icon" href="{{asset('assets/image/systemlogo.png')}}" type="image/png">

    <!--icon-->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!--Slick css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

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
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="{{ asset('assets/js/scroll-to-top.js') }}"></script>
    <script src="{{ asset('assets/js/marquee.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
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

        function toggleDarkMode() {
            $('body').toggleClass('dark-mode');
            var isDarkMode = $('body').hasClass('dark-mode');
            icon.css('color', isDarkMode ? '#ffffff' : '#5CA346');

            // Store the mode in local storage
            localStorage.setItem('mode', isDarkMode ? 'dark' : 'light');
        }

        // Click event for light mode
        $('#lightMode').on('click', function () {
            // If not already in light mode, toggle to light mode
            if ($('body').hasClass('dark-mode')) {
                toggleDarkMode();
            }
        });

        // Click event for dark mode
        $('#darkMode').on('click', function () {
            // If not already in dark mode, toggle to dark mode
            if (!$('body').hasClass('dark-mode')) {
                toggleDarkMode();
            }
        });
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
    var overlay = document.getElementById('overlayContainer');

    function toggleNav() {
        overlay.style.display = (overlay.style.display === 'none' || overlay.style.display === '') ? 'block' : 'none';
    }

    function hideOverlayOnScroll() {
        // Set display to 'none' when the user scrolls
        overlay.style.display = 'none';
    }

    function closeOverlayOnClickOutside(event) {
        if (!overlay.contains(event.target)) {
            overlay.style.display = 'none';
        }
    }

    window.addEventListener('scroll', hideOverlayOnScroll);
    document.addEventListener('mousedown', closeOverlayOnClickOutside);
</script>


<script>
    $('.autoplay').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });

</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var dropdown = document.querySelector('.dropdown');
        var menu = dropdown.querySelector('.dropdown-menu');

        var isLanguageVisible = false;

        dropdown.addEventListener('click', function () {
            if (isLanguageVisible) {
                menu.style.display = 'none';
                menu.style.backgroundColor = 'transparent';
                menu.style.width = 'auto'; // Set the width to auto when hidden
                menu.style.height = 'auto'; // Set the height to auto when hidden
            } else {
                menu.style.display = 'block';
                menu.style.backgroundColor = 'black';
                menu.style.width = '80px'; // Set the desired width when visible
                menu.style.height = '70px'; // Set the desired height when visible
            }

            isLanguageVisible = !isLanguageVisible;
        });

        function hideOverlayOnScroll() {
            // Set display to 'none' when the user scrolls
            menu.style.display = 'none';
        }

        window.addEventListener('scroll', hideOverlayOnScroll);
    });
</script>

<script>
    // Assuming you have some way of determining the active language, for example, a variable like isActiveEnglish and isActiveChinese
    // Set these variables based on your actual logic

    var isActiveEnglish = true;  // Set this based on your logic
    var isActiveChinese = false; // Set this based on your logic

    var englishLink = document.getElementById('englishLink');
    var chineseLink = document.getElementById('chineseLink');

    if (isActiveEnglish) {
        englishLink.classList.add('active-language');
        chineseLink.classList.remove('active-language');

    } else if (isActiveChinese) {
        englishLink.classList.remove('active-language');
        chineseLink.classList.add('active-language');
    }
</script>

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

<script>

    document.getElementById('enLanguage').addEventListener('click', function() {
        changeLanguage('en');
    });

    document.getElementById('twLanguage').addEventListener('click', function() {
        changeLanguage('tw');
    });

    function changeLanguage(locale) {
        // Use Axios to send a GET request to your Laravel route.
        axios.get('/locale/' + locale)
            .then(function (response) {
                console.log(response);
                // You can handle any additional logic after the language is changed.
                console.log('Language changed successfully.');
                window.location.reload();
            })
            .catch(function (error) {
                console.error('Error changing language:', error);
            });
    }
</script>
</body>
</html>