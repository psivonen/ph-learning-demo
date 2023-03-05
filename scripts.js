const navToggle = () => {
  var nav = document.querySelector("#topNav");
  if (nav.className === "nav-links") {
    nav.className += " responsive";
  } else nav.className = "nav-links";
};

let nav = document.querySelector("#main-nav");

window.addEventListener("scroll", function (event) {
  // To listen for event
  event.preventDefault();
  if (window.scrollY >= 80) {
    nav.style.backgroundColor = "#0F0C29"; // or default color
  } else {
    nav.style.backgroundColor = "transparent";
  }
});

const myCarouselElement = document.querySelector("#recipeCarousel");
const carousel = new bootstrap.Carousel(myCarouselElement, {
  interval: 5000,
});

let items = document.querySelectorAll(".carousel .carousel-item");
items.forEach((el) => {
  const minPerSlide = 3;
  let next = el.nextElementSibling;
  for (var i = 1; i < minPerSlide; i++) {
    if (!next) {
      // wrap carousel by using first child
      next = items[0];
    }
    let cloneChild = next.cloneNode(true);
    el.appendChild(cloneChild.children[0]);
    next = next.nextElementSibling;
  }
});

// Redirect to a page when clicking a button
function btnLink(url) {
    window.location.href = url;
};

// Portfolio Lightbox
function openLightbox() {
  document.querySelector("#lightbox").style.display = "flex";
}

function closeLightbox() {
  document.querySelector("#lightbox").style.display = "none";
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
  let slides = document.querySelectorAll(".slides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}

