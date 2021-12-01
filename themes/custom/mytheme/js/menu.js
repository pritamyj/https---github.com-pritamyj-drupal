  
  var x = window.matchMedia("(max-width: 768px)") ;
  x.addListener(myFun) ;// Attach listener function on state changes
  
  function myFun(x) {
    if (x.matches) { // If media query matches
      document.querySelector("select.lang-dropdown-select-element").style.width = "125px";
    } 
    else {
        document.querySelector("select.lang-dropdown-select-element").style.width = "165px";
    }
}
myFun(x); 
 
  



function myFunction() { 
    var humburger = document.getElementById('hamburger');
    document.querySelector("ul.menu").classList.toggle('show');
 }
