// public/js/scroll-to-top.js

document.addEventListener("DOMContentLoaded", function () {
    var scrollToTopButton = document.getElementById("scroll-to-top-btn");

    // Show or hide the button based on the scroll position
    window.onscroll = function () {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            scrollToTopButton.style.display = "block";
        } else {
            scrollToTopButton.style.display = "none";
        }
    };

    // Smooth scroll to the top when the button is clicked
    scrollToTopButton.addEventListener("click", function () {
        scrollToTop(1000); // You can adjust the duration (in milliseconds) as needed
    });

    // Function for smooth scrolling
    function scrollToTop(duration) {
        var start = window.pageYOffset;
        var startTime = 'now' in window.performance ? performance.now() : new Date().getTime();

        function scroll() {
            var currentTime = 'now' in window.performance ? performance.now() : new Date().getTime();
            var timeElapsed = currentTime - startTime;

            window.scrollTo(0, easeInOut(timeElapsed, start, -start, duration));

            if (timeElapsed < duration) {
                requestAnimationFrame(scroll);
            }
        }

        function easeInOut(t, b, c, d) {
            t /= d / 2;
            if (t < 1) return c / 2 * t * t + b;
            t--;
            return -c / 2 * (t * (t - 2) - 1) + b;
        }

        requestAnimationFrame(scroll);
    }
});
