/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


// Smooth scrolldown
function changeimg() {
    document.getElementById('header').style.backgroundImage = "url(images/teaterrum.jpg)";        
}
                  
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
                


// Arrow movement
$(document).ready(function() {
function animated() {
    $('i.fas.fa-angle-down.fa-4x').animate({top: '550px'},2000).animate({top: '570px'},2000,animated);
}
animated();  
});


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

function backgroundchange() {
    document.getElementById("masthead").style.cssText = 'background-image: url("images/teaterrum.jpg")';
    
}