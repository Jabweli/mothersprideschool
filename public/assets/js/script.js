let menubtn = document.getElementById("menu-bar");
let navbar = document.querySelector(".navbar");

menubtn.addEventListener("click", function(){
    navbar.classList.toggle("active");
    menubtn.classList.toggle("fa-times");
});


//select active menu
let navlink = document.getElementsByClassName("nav-link");

for(let i =0; i < navlink.length; i++){
    navlink[i].addEventListener("click", function(e){
        let current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace("active", "");
        this.classList.add("active");

        //scroll to the given section
        // e.preventDefault();
        let id = this.hash.toString();
        let secId = id.slice(1, id.length);
        
        let section = document.getElementById(secId);
        let pos = section.offsetTop - (header.offsetTop + header.offsetHeight);
        scrollTo(0, pos);
    });
}


//display the search form
let searchbtn = document.getElementById("search-icon");
let searchform = document.getElementById("search-form");
let closebtn = document.getElementById("close");

searchbtn.addEventListener("click", function(){
    searchform.style.top = 0;
});

closebtn.addEventListener("click", function(){
    searchform.style.top = -1000 + "px";
})



//make the header sticky onscroll
let header = document.getElementById("header");
let pos = header.offsetHeight;

window.addEventListener("scroll", function(){
    if(document.body.scrollTop > pos || this.document.documentElement.scrollTop > pos){
        header.classList.add("sticky");      
    }
    else if(document.body.scrollTop < pos || this.document.documentElement.scrollTop < pos){
        header.classList.remove("sticky");
    }
});



// show the scroll up btn on scroll
let upbtn = document.getElementById("up-btn");

window.addEventListener("scroll", function(){
    if(document.body.scrollTop > 500 || document.documentElement.scrollTop > 500){
        upbtn.style.display = "block";
    }else{
        upbtn.style.display = "none";
    }
});

upbtn.addEventListener("click", ()=>{
    scrollTo(0, 0);
});




// GALLERY SCRIPT
// Open the Modal
function openModal() {
    document.getElementById("myModal").style.display = "block";
}
  
// Close the Modal
function closeModal() {
    document.getElementById("myModal").style.display = "none";
}

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
    var dots = document.getElementsByClassName("demo");
    var captionText = document.getElementById("caption");
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
    captionText.innerHTML = dots[slideIndex-1].alt;
}




