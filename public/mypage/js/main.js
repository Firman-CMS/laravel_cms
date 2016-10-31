/*=========================================

Template Name: Pride - One Page Personal vCard Portfolio
Author: ThemeLabBD
Version: 1.0
Design and Developed by: ThemeLabBD

NOTE: This is the custom jQuery file for the template

=========================================*/


/*******************************************
        {  Table of contents  }
********************************************

1. sticky menu
2. jquery smooth scroll
3. jquery scroll spy
4. Bootstrap menu fix
5. Intro typer
6. background-image flickering solution for mobile
7. NiceScroll
8. MixItup
9. Magnific popup
10. Active portfolio menu
11. portfolio css overlay
12. owl carousel
13. Preloader

********************************************
        {  End table content }
********************************************/


(function ($) {
	"use strict";
    
    jQuery(document).ready(function($){
        
        
     /*=============================
            sticky menu
     ===============================*/
        $("#header-sticky-menu").sticky({topSpacing:0});
        
        
    /*================================
        jquery smooth scroll
    ==================================*/
        $("li.smooth-scroll a, .wlcome-btn a.smooth-scroll, .logo a").bind('click', function(event){
    
            var $anchor = $(this);
            var headerH = '63';
            $("html,body").stop().animate({
                scrollTop : $($anchor.attr("href")).offset().top - headerH + "px"
            },1200, 'easeInOutExpo');
            
            event.preventDefault();
            
            });
        
        
        
    /*======================================
        jquery scroll spy
    ========================================*/
        $("body").scrollspy({
        
            target : ".navbar-collapse",
            offset : 95
        
        });
        
        
     /*=================================
            Bootstrap menu fix
     ==================================*/
        $(".navbar-toggle").on("click", function(){
        
            $("body").addClass("mobile-menu-activated");
        
        });
        
        $("ul.nav.navbar-nav li a").on("click", function(){
        
            $(".navbar-collapse").removeClass("in");
        
        });
        
        
        
         /*==========================
            Intro typer
        ============================*/
        var win = $(window),
        foo = $('#typer');
        foo.typer(['<h2>Web Designer / Developer </h2>','<h2>UX / UI Designer</h2>', '<h2>Graphics Designer</h2>' ]);           
            win.resize(function(){
              var fontSize = Math.max(Math.min(win.width() / (1 * 10), parseFloat(Number.POSITIVE_INFINITY)), parseFloat(Number.NEGATIVE_INFINITY));
              foo.css({
              fontSize: fontSize * .2 + 'px'
            });
        }).resize();
        
        
        
        /*====================================================
            background-image flickering solution for mobile
            =======================================================*/
             var bg = jQuery("#intro-bg");
            function resizeBackground() {
                bg.height(jQuery(window).height() + 60);
            }
            resizeBackground();
        
         /*=============================
                NiceScroll
        ==============================*/
          $("html").niceScroll({
            scrollspeed: 60,
            mousescrollstep: 40,
            cursorwidth: 7,
            cursorborder: 0,
            cursorcolor: '#00a99d',
            autohidemode: true,
            zindex: 999999999,
            horizrailenabled: false,
            cursorborderradius: 0 
          });
        
        
        
    
        
        /*==================================
                MixItup
        ==================================*/
        $(".mixitup").mixItUp();
        
        
       
        /*==================================
                Magnific popup
        =================================*/
        $(".popup-link").magnificPopup({
          type: 'inline',
            
        });
        
        
         /*===================================
                Active portfolio menu
         ====================================*/
        $(".portfolio-menu ul li").on("click", function(){
            $(".portfolio-menu ul li").removeClass("active");
            $(this).addClass("active");
        });
        
        
        
        /*===================================
                portfolio css overlay
         ====================================*/
          if (Modernizr.touch) {
            $(".close-overlay").removeClass("hidden");
            $(".single-portfolio").on("click", function(e){
                if (!$(this).hasClass("hover")) {
                    $(this).addClass("hover");
                }
            });
            $(".close-overlay").on("click",function(e){
                e.preventDefault();
                e.stopPropagation();
                if ($(this).closest(".single-portfolio").hasClass("hover")) {
                    $(this).closest(".single-portfolio").removeClass("hover");
                }
            });
        } else {
            $(".single-portfolio").mouseenter(function(){
                $(this).addClass("hover");
            })
            $(".single-portfolio").mouseleave(function(){
                $(this).removeClass("hover");
            });
        }
        
        
        
        /*===================================
                owl carousel
         ====================================*/
        $(".review-list").owlCarousel({
            loop:true,
            margin:0,
            nav:false,
            dots:true,
            autoplay:true,
            autoplayHoverPause:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
        
   
        
    });
    
    



}(jQuery));	
