$(document).ready(function() {
    // SideNav Button Initialization
    $(".button-collapse").sideNav();
    // SideNav Scrollbar Initialization
    var sideNavScrollbar = document.querySelector('.custom-scrollbar');
    var ps = new PerfectScrollbar(sideNavScrollbar);
    });

/*      DARK MODE       */
function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
    }

function myyFunction() {
var x = document.getElementById("Mydiv")
if (x.style.display === "none") {
    x.style.display = "block";
    x.style.width = "300px";
} else {
    x.style.display = "none";
    x.style.width = "0"
}
}


function googleTranslateElementInit() {
    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
  }

/* Set the width of the sidebar to 250px and the left margin of the page content to 250px */
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    }

    /* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
    function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    }

 // When the user scrolls down 20px from the top of the document, slide down the navbarhide
 window.onscroll = function() {scrollFunction()};
        
 function scrollFunction() {
     if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
     document.getElementById("navbarhide").style.top = "0";
     } else {
     document.getElementById("navbarhide").style.top = "-190px";
     }
 }
 
  
 //WELCOME MESSAGE
 function welcomeMessage() {
    alert("Welcome to GolderLoft Casino, one of the best leading gaming service in Nigeria.").style="color: rgb(8, 6, 134);"
}
 
 