/* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
// function showNav() {
//     var nav = document.getElementById("myTopnav");
//     if (nav.className === "topnav") {
//         nav.className += " responsive";
//     } else {
//         nav.className = "topnav";
//     }
// }

/* Set the width of the side menu to 250px */
function openMenu() {
    document.getElementById("mySidemenu").style.width = "250px";
}

/* Set the width of the side menu to 0 */
function closeMenu() {
    document.getElementById("mySidemenu").style.width = "0";
}

var content = document.getElementById("content");
var winwidstate = window.innerWidth <= 600 ? 'small' : 'big';
function checksize(){
    if(winwidstate === 'small'){
        // showNav();
        $('#myTopnav').toggleClass('responsive');
    }
}
// window.innerWidth <= 600 ? chasma() : chabig();
// function changeWidth() {
// 	if((window.innerWidth <= 600) && (winwidstate ==='big')) {
// 		chasma();
// 	} else if((window.innerWidth > 600) && (winwidstate ==='small')) {
// 		chabig();
// 	}
// }
// function chasma(){
// 	content.style.margin = "0";
// 	content.style.width = "100%";
// 	winwidstate = 'small';
// }
// function chabig(){
// 	content.style.margin = "0 10% 0 10%";
// 	content.style.width = "80%";
// 	winwidstate = 'big';
// }
// $(window).resize(function(){ 
// 		changeWidth();
// });

//member  modal
// Get the modal
var modal = document.getElementById('memberModal');

// Get the button that opens the modal
var btn = document.getElementById("membtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal 
btn.onclick = function() {
    checksize();
    modal.style.display = "block";
    document.getElementById("defaultOpen").click();
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function openCity(evt, logorsig) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(logorsig).style.display = "block";
    evt.currentTarget.className += " active";
}

//Make the DIV element draggagle:
dragElement(document.getElementById(("dragdiv")));

$(function() {
    $('#dragdiv').draggable();
});

function dragElement(elmnt) {
  var pos1 = 0, pos2 = 0, pos3 = 0, pos4 = 0;
  if (document.getElementById(elmnt.id + "header")) {
    /* if present, the header is where you move the DIV from:*/
    document.getElementById(elmnt.id + "header").onmousedown = dragMouseDown;
  } else {
    /* otherwise, move the DIV from anywhere inside the DIV:*/
    elmnt.onmousedown = dragMouseDown;
  }

  function dragMouseDown(e) {
    e = e || window.event;
    // get the mouse cursor position at startup:
    pos3 = e.clientX;
    pos4 = e.clientY;
    document.onmouseup = closeDragElement;
    // call a function whenever the cursor moves:
    document.onmousemove = elementDrag;
  }

  function elementDrag(e) {
    e = e || window.event;
    // calculate the new cursor position:
    pos1 = pos3 - e.clientX;
    pos2 = pos4 - e.clientY;
    pos3 = e.clientX;
    pos4 = e.clientY;
    // set the element's new position:
    elmnt.style.top = (elmnt.offsetTop - pos2) + "px";
    elmnt.style.left = (elmnt.offsetLeft - pos1) + "px";
  }

  function closeDragElement() {
    /* stop moving when mouse button is released:*/
    document.onmouseup = null;
    document.onmousemove = null;
  }
}

$(document).ready(function(){
    $('.active').click(function(){
        // toggle type: toggle(), fadeToggle(), slideToggle()
        $('input[name="search"]').toggle(500, function(){
            console.log('toggle trigger');
        });
        $('input[name="search"]').focus();
    });
    $(window).resize(function(){
        winwidstate = $(window).innerWidth() <= 600 ? 'small' : 'big';
    });

    // keypress
    $('input[name="search"]').keypress(function(e){
        var keycode = (e.keyCode ? e.keyCode : e.which);
        console.log(keycode);
    });

    $('#dragopen').click(function(){
        $('#dragopen').toggleClass('ro180');
        $('#dragitem').fadeToggle(600);
    });

    $('#aboutbtn').click(function() {
        checksize();
        $('footer').slideToggle(600);
    });
});