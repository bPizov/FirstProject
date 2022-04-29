// Hamburger menu
$(document).ready( $(function(){
    var navbtn = $('.navbar-toggler');

    $(navbtn).click(function(){
        $(navbtn).toggleClass('active');
    });

}));

$('#navbarSupportedContent').on('show.bs.collapse', function () {
    $('.navbar').addClass('navbarColapse');
    $('.ulOpen').addClass('openVh');
    $('#Logo').addClass('removeLogo');
});
  
$('#navbarSupportedContent').on('hide.bs.collapse', function () {
    $('.navbar').removeClass('navbarColapse');
    $('.ulOpen').removeClass('openVh');
    $('#Logo').removeClass('removeLogo');
});

//  / Hamburger menu !!!

// Filter JS
document.querySelector("#filter-marketing").addEventListener("change", filterMarketing);
document.querySelector("#filter-developer").addEventListener("change", filterDeveloper);
document.querySelector("#filter-design").addEventListener("change", filterDesign);
// All card hide filter
function hideAllcard(){
    var allCard = document.querySelectorAll(".cardFilter");
    allCard.forEach(cardFilter => {
        cardFilter.style.display = "none";
    });
};


// All card show filter
function showAllcard() {
    var allCard = document.querySelectorAll(".cardFilter");
    allCard.forEach(cardFilter => {
        cardFilter.style.display = "inline-block";
    });
};


// Marketing filter
function filterMarketing() {
    hideAllcard();

    if(document.querySelector("#filter-marketing").checked){
        var marketingCard = document.querySelectorAll(".marketing");
        marketingCard.forEach(marketingCard => {
            marketingCard.style.display = "inline-block";
        });
        document.querySelector("#filter-developer").checked = false;
        document.querySelector("#filter-design").checked = false;
        var visibleI = document.querySelectorAll(".active-i-marketing");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "inline-block";
        });

        var checkedFilter = document.querySelectorAll(".checked-filter-marketing");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.add("active-filter")
        });

        var visibleI = document.querySelectorAll(".active-i-design");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "none";
        });

        var checkedFilter = document.querySelectorAll(".checked-filter-design");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.remove("active-filter")
        });

        var visibleI = document.querySelectorAll(".active-i-developer");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "none";
        });

        var checkedFilter = document.querySelectorAll(".checked-filter-developer");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.remove("active-filter")
        });
    } else {
        showAllcard();
        var visibleI = document.querySelectorAll(".active-i-marketing");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "none";
        });
        var checkedFilter = document.querySelectorAll(".checked-filter-marketing");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.remove("active-filter")
        });
    } 

};
// Developer filter
function filterDeveloper() {
    hideAllcard();

    if(document.querySelector("#filter-developer").checked){
        var developerCard = document.querySelectorAll(".developer");
        developerCard.forEach(developerCard => {
            developerCard.style.display = "inline-block";
        });
        document.querySelector("#filter-marketing").checked = false;
        document.querySelector("#filter-design").checked = false;

        var visibleI = document.querySelectorAll(".active-i-developer");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "inline-block";
        });

        var checkedFilter = document.querySelectorAll(".checked-filter-developer");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.add("active-filter")
        });

        var visibleI = document.querySelectorAll(".active-i-design");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "none";
        });

        var checkedFilter = document.querySelectorAll(".checked-filter-design");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.remove("active-filter")
        });

        var visibleI = document.querySelectorAll(".active-i-marketing");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "none";
        });
        var checkedFilter = document.querySelectorAll(".checked-filter-marketing");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.remove("active-filter")
        });
    } else {
        showAllcard();
        var visibleI = document.querySelectorAll(".active-i-developer");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "none";
        });

        var checkedFilter = document.querySelectorAll(".checked-filter-developer");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.remove("active-filter")
        });

    } 

};
// Design Filter
function filterDesign() {
    hideAllcard();

    if(document.querySelector("#filter-design").checked){
        var designCard = document.querySelectorAll(".design");
        designCard.forEach(designCard => {
            designCard.style.display = "inline-block";
        });
        document.querySelector("#filter-marketing").checked = false;
        document.querySelector("#filter-developer").checked = false;
        
        var visibleI = document.querySelectorAll(".active-i-design");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "inline-block";
        });

        var checkedFilter = document.querySelectorAll(".checked-filter-design");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.add("active-filter")
        });

        var visibleI = document.querySelectorAll(".active-i-marketing");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "none";
        });
        var checkedFilter = document.querySelectorAll(".checked-filter-marketing");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.remove("active-filter")
        });

        var visibleI = document.querySelectorAll(".active-i-developer");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "none";
        });

        var checkedFilter = document.querySelectorAll(".checked-filter-developer");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.remove("active-filter")
        });
    } else {
        showAllcard();

        var visibleI = document.querySelectorAll(".active-i-design");
        visibleI.forEach(visibleI => {
            visibleI.style.display = "none";
        });

        var checkedFilter = document.querySelectorAll(".checked-filter-design");
        checkedFilter.forEach(checkedFilter => {
            checkedFilter.classList.remove("active-filter")
        });
    } 

};

// / Filter JS !!!
// HERO Animation
const typedTextSpan = document.querySelector(".typed-text");
const cursorSpan = document.querySelector(".cursor");

const textArray = ["LIFE.", "fun.", "a journey."];
const typingDelay = 200;
const erasingDelay = 100;
const newTextDelay = 2000; // Delay between current and next text
let textArrayIndex = 0;
let charIndex = 0;

function type() {
  if (charIndex < textArray[textArrayIndex].length) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
    charIndex++;
    setTimeout(type, typingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    setTimeout(erase, newTextDelay);
  }
}

function erase() {
  if (charIndex > 0) {
    if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
    charIndex--;
    setTimeout(erase, erasingDelay);
  } 
  else {
    cursorSpan.classList.remove("typing");
    textArrayIndex++;
    if(textArrayIndex>=textArray.length) textArrayIndex=0;
    setTimeout(type, typingDelay + 1100);
  }
}

document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
  if(textArray.length) setTimeout(type, newTextDelay + 250);
});

// / HERO Animation !!!
