/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.scss';

// start the Stimulus application
import './bootstrap';

// use Click Carousel
import './js/slick.min';

const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');

// or you can include specific pieces
// require('bootstrap/js/dist/tooltip');
// require('bootstrap/js/dist/popover');

$(document).ready(function() {
  $('[data-toggle="popover"]').popover();
});

$(document).ready(function(){
  $('.scrolling-logos').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 0,
    speed: 6000,
    infinite: true,
    arrows: false,
    cssEase: 'linear',
  });
});

$('.scrolling-learn-articles').slick({
  infinite: false,
  slidesToShow: 3,
  slidesToScroll: 3,
  dots: true,
  easing: 'linear',
  arrows: false,
});

// Sticky nav bar
$(function () {
  $(document).scroll(function () {
    var $nav = $("#main-nav-container-fluid");
    $nav.toggleClass('fixed-top', $(this).scrollTop() > $nav.height());
  });
});


// Mega menu
window.addEventListener("resize", function() {
  "use strict"; window.location.reload();
});
document.addEventListener("DOMContentLoaded", function(){
  /////// Prevent closing from click inside dropdown
  document.querySelectorAll('.dropdown-menu').forEach(function(element){
    element.addEventListener('click', function (e) {
      e.stopPropagation();
    });
  });
  // make it as accordion for smaller screens
  if (window.innerWidth < 992) {
      // close all inner dropdowns when parent is closed
      document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown){
          everydropdown.addEventListener('hidden.bs.dropdown', function () {
              // after dropdown is hidden, then find all submenus
              this.querySelectorAll('.megasubmenu').forEach(function(everysubmenu){
                  // hide every submenu as well
                  everysubmenu.style.display = 'none';
              });
          })
      });
      document.querySelectorAll('.has-megasubmenu a').forEach(function(element){
          element.addEventListener('click', function (e) {
              let nextEl = this.nextElementSibling;
              if(nextEl && nextEl.classList.contains('megasubmenu')) {
                  // prevent opening link if link needs to open dropdown
                  e.preventDefault();
                  if(nextEl.style.display == 'block'){
                      nextEl.style.display = 'none';
                  } else {
                    nextEl.style.display = 'block';
                  }
              }
          });
      })
  }
  // end if innerWidth
});
  // DOMContentLoaded  end
