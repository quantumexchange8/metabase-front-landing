$(document).ready(function(){
    $('.slick-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        dots: true,
      });

      $('.slick-slider2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        infinite: true,
        dots: true,
      });

      $('.slick-slider3').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        autoplaySpeed: 3000,
        infinite: true,
        dots: true,
      });
      $('.marquee-slick-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        speed: 5000, // Adjust the speed as needed
        autoplaySpeed: 0, // Set to 0 for continuous scrolling
        cssEase: 'linear', // Use linear easing for a smooth marquee effect
        variableWidth: true,
      });
});