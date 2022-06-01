let password = document.getElementById("password");
let passwordRepeat = document.getElementById("password-repeat");
let wr = document.getElementById("warn");
var a = false;
var b = false;
var c = false;
var d = false;
let sh = document.getElementById("showWarn");


function checkPass() {
        var pass = password.value;
        var passR = passwordRepeat.value;
        for (var i = 0; i < pass.length; i++) {
            if (pass[i] >= 'a' && pass[i] <= 'z') {
                a = true;
            }
            if (pass[i] >= 'A' && pass[i] <= 'Z') {
                b = true;
            }
            if (pass[i] >= '0' && pass[i] <= '9') {
                c = true;
            }
        }
    if (a == false) {
        sh.style.opacity = "1";
        wr.innerHTML = "Add a lowercase letter"
    }
    if (b == false) {
        sh.style.opacity = "1";
        wr.innerHTML = "Add an uppercase letter"
    }
    if (c == false) {
        sh.style.opacity = "1";
        wr.innerHTML = "Add a number"
    }
    if (pass.length < 8) {
        sh.style.opacity = "1";
        wr.innerHTML = "Password is too short"
    } 
   
    else if (a == true && b == true && c == true) {
        sh.style.color = "green";
        sh.style.borderColor = "green";
        wr.innerHTML = "All is ok";

        sh.style.transition = "3s";
        sh.style.opacity = "0";
        setTimeout(makeRed(),5000);
    }
   
        
    function makeRed() {
        sh.style.color = "purple";
        sh.style.borderColor = "purple";
    }
    a = false;
    b = false;
    c = false;

}

function confirm() {
         if(document.getElementById("password-repeat").value != 0) {
         if (document.getElementById("password-repeat").value == document.getElementById("password").value || document.getElementById("password").value == document.getElementById("password-repeat").value) {
                d = true;
                console.log("SAME!!");
                playGoodSound();
                sh.style.opacity = "0";
                setTimeout(function(){
                window.location.href = 'index.html';
}, 2000);
            } else {
                 sh.style.opacity = "1";
                 wr.innerHTML = "Confirm password"
            }
        }
    }


function showPassword() {
  var x2 = document.getElementById("password");
  if (x2.type === "password") {
    x2.type = "text";
    document.getElementById("changeable").src = "images/eyeunsee.png";
  } else {
    x2.type = "password";
    document.getElementById("changeable").src = "images/eyesee.png";
  }
}
function showPasswordRepeat() {
  var x3 = document.getElementById("password-repeat");
  if (x3.type === "password") {
    x3.type = "text";
    document.getElementById("changeable-repeat").src = "images/eyeunsee.png";
  } else {
    x3.type = "password";
    document.getElementById("changeable-repeat").src = "images/eyesee.png";
  }
}

function playGoodSound() {
    let sound = new Audio('mp3/goodtogo.wav');
    sound.play();
}



$('#email').on('input', function() {
    $(this).val($(this).val().replace(/[!#$%^&*()"'`~/|=<>?,\\№;:*\][]/, ''))
});

$('#name').on('input', function() {
    $(this).val($(this).val().replace(/[1234567890!@#$%^&*()_"'`~/|=<>?.,\\№;:*\][]/, ''))
});


// login popup
document.querySelector("#show-login").addEventListener("click", function() {
    document.querySelector(".popup-overlay").classList.add("active");
    document.querySelector(".popup").classList.add("active");
});
document.querySelector(".popup .close-btn").addEventListener("click", function() {
    document.querySelector(".popup-overlay").classList.remove("active");
    document.querySelector(".popup").classList.remove("active");
});

document.getElementById("signin").style.backgroundColor = "#fbcbe0";


// sticky header
window.onscroll = function() {
    HeaderFunction(); scrollFunction();
  };

var header = document.getElementById("stickMan");
var sticky = header.offsetTop;

function HeaderFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
  


// btn top
var mybutton = document.getElementById("myBtn");

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    $("#myBtn").show(350);
  } else {
    $("#myBtn").hide(200);
  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

function playSound() {
    let ding = new Audio('mp3/pageup.wav');
    ding.play();
}

// seach popup
document.querySelector("#show-search").addEventListener("click", function() {
    document.querySelector(".popup-search-overlay").classList.add("active");
    document.querySelector(".popup-search").classList.add("active");
});
document.querySelector(".popup-search .close-btn").addEventListener("click", function() {
    document.querySelector(".popup-search-overlay").classList.remove("active");
    document.querySelector(".popup-search").classList.remove("active");
});


//carousel
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}