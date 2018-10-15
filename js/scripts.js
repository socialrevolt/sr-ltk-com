(function( root, $, undefined ) {
	"use strict";

	$(function () {
    $('.menu-toggle').click(function() {
      $(this).toggleClass('active');
      $('.header').toggleClass('active');
      $('.nav').toggleClass('visible');
      $('.nav').find('.active').removeClass('.active');
    })

      $('.menu-item-has-children').click(function(e){
        if ($(window).width() < 767) {
          e.preventDefault();     
        }   
        if ($(this).hasClass('active')) {
          $(this).removeClass('active');
          $(this).find('ul').removeClass('active');
        } else {
          $('.nav').find('.active').removeClass('active');
          $(this).toggleClass('active');
          $(this).find('ul').toggleClass('active');
        }        
      });

    	$('.slider').slick({
    		dots: true,
    		slidesToShow: 1,
			slidesToScroll: 1,
    		autoplay: true,
    		autoplaySpeed: 3000,
    		infinite: true
    	});

      $('.masthead-slider').slick({
        dots: true,
        slidesToShow: 1,
      slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: true
      });

      $('.ad-slider').slick({
        dots: false,
        slidesToShow: 1,
        autoplay: true,
        fade: true,
        speed: 1200,
        autoplaySpeed: 8000,
        infinite: true
      });

        AOS.init({
          duration: 1200,
          delay: 0,
          once: false,
          mirror: true,
          easing: 'ease-out-quad',
          offset: 120
        });

        $('.menu-toggle').click(function(){
            $('.nav').toggleClass('active');
        });

      $('.post-slider').slick({
        slidesToShow: 3,
        autoplay: true,
        speed: 600,
        autoplaySpeed: 4200,
        dots: true,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              infinite: true,
              dots: true
            }
          }
        ]
      });

    $('.promotion-boxes .promotion-slider').slick({
      slidesToShow: 2,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 4200,
      dots: false,
      arrows: false,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            fade: true,
            dots: false
          }
        }
      ]
    });

    $('.ltk-slider').slick({
      slidesToShow: 1,
      autoplay: true,
      speed: 600,
      autoplaySpeed: 4200,
      dots: true,
      arrows: true
    });

    $('.posts-tiles .prev').click(function(){
      var parent = $(this).parent().parent();
      $(parent).find('.post-slider').slick('slickPrev');
    })

    $('.posts-tiles .next').click(function(){
      var parent = $(this).parent().parent();
      $(parent).find('.post-slider').slick('slickNext');
    })


    $('.ltk-posts .prev').click(function(){
      $('.ltk-slider').slick('slickPrev');
    })

    $('.ltk-posts .next').click(function(){
      $('.ltk-slider').slick('slickNext');
    })

	});

} ( this, jQuery ));