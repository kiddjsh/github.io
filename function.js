
/* Hamburger Menu Function */

function closeNav() {
  document.getElementById("hamMenu").style.display = "none";
}

// Get the elements with class="column"
var elements = document.getElementsByClassName("column");

// Declare a "loop" variable
var i;

 // Full-width images
 function one() {
   for (i = 0; i < elements.length; i++) {
     elements[i].style.flex = "100%";
   }
 }

// Two images side by side
function two() {
  for (i = 0; i < elements.length; i++) {
    elements[i].style.flex = "25%";
  }
}

/* End Controllable Grid View script.js */