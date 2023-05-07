"use strict";

// Open & Close Aside & Full Width Navigation

$(".open-nav").on("click", function(e){
 e.preventDefault();
 $(".mobile-navigation-overlay").addClass("active");
 $(".mobile-navigation").addClass("active");
 $(".full-width-navigation").addClass("active");
})

$(".close-nav").on("click", function(e){
 e.preventDefault();
 $(".mobile-navigation-overlay").removeClass("active");
 $(".mobile-navigation").removeClass("active");
 $(".full-width-navigation").removeClass("active");
})

// Open & Close Search Overlay

$(".open-search").on("click", function(){
 $(".search-overlay").addClass("active");
})

$(".close-search").on("click", function(){
 $(".search-overlay").removeClass("active");
})

// Accordion (jQuery UI)
let accordion = document.getElementById('accordion');
if (accordion) {
    $(accordion).accordion({
      collapsible: true,
      heightStyle: "content"
    });
}

// Toggle Share Links in Single Blog Post Page

$(".share-icon").on("click", function(){
 $(".extra .share-links").toggle();
})

// Owl Carousel
let testimonialsCarousel = document.getElementsByClassName('testimonials-carousel')[0];
if (testimonialsCarousel) $(testimonialsCarousel).owlCarousel({
 loop:true,
 items: 1,
 dots:true,
 dotsSpeed:1500
})

let photographyCarousel = document.getElementsByClassName('photography-carousel')[0];
if (photographyCarousel) $(photographyCarousel).owlCarousel({
 loop:true,
 dots:false,
 nav:true,
 navSpeed:2000,
 responsiveClass:true,
 responsive:{
        0:{
            items:1,
            center:true
        },
        1100:{
         items:4
        }
    }
})
let splitCarousel = document.getElementsByClassName('split-carousel')[0];
if (splitCarousel) $(splitCarousel).owlCarousel({
 loop:true,
 dots:false,
 items: 1,
 nav:true,
 navSpeed:2000
})