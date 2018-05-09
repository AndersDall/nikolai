/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Smooth scrolldown

/*
function changeimg() {
    document.getElementById('header').style.backgroundImage = "url(images/teaterrum.jpg)";        
}
*/

    

(function($) {
                // Easter egg - function to remove Title text
                $(function($) {
                    
                $('.site-description').click(function() {
                    $('.site-title').fadeToggle();
                });
            });
                
                // Arrow movement
                $(document).ready(function() {
                function animated() {
                    $('i.fas.fa-angle-down.fa-4x').animate({top: '580px'},2000).animate({top: '600px'},2000,animated);
                }
                animated();  
                });
                })( jQuery );
/*
// Select all links with hashes
jQuery('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = jQuery(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        jQuery('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
*/
 // Smooth scrolldown  

          (function($) {       
$(document).ready(function(){
                  // Add smooth scrolling to all links
                  $("a").on('click', function(event) {

                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
                      // Prevent default anchor click behavior
                      event.preventDefault();

                      // Store hash
                      var hash = this.hash;

                      // Using jQuery's animate() method to add smooth page scroll
                      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
                      $('html').animate({
                        scrollTop: $(hash).offset().top
                      }, 1000, function(){

                      });
                    } // End if
                  });
                }) ;  
})( jQuery );
/*
// Display random image in header
function changeimg() {
    var minus = document.getElementsByClassName("minus")[0];
    
    if (minus.src === "/images/greypillow.png") {
        minus.src = "/images/redpillow.png";
    }
    else {
        minus.src = "/images/redpillow.png";
    }
}
*/

/*
function backgroundchange() {
    document.getElementById("masthead").style.cssText = 'background-image: url("images/teaterrum.jpg")';
    
}
*/