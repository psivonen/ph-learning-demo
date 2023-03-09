const navToggle = () => {
  var nav = document.querySelector("#topNav");
  if (nav.className === "nav-links") {
    nav.className += " responsive";
  } else nav.className = "nav-links";
};

const remove_is_invalid = (event) => {
  let element = event.target;
  if (element.classList.contains("is-invalid")) {
    element.classList.remove("is-invalid");
    element.removeEventListener("input", remove_is_invalid);
  }
};

(() => {
  "use strict";
  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  document
    .querySelectorAll(".is-invalid")
    .forEach((element) => element.addEventListener("input", remove_is_invalid));

  const forms = document.querySelectorAll(".needs-validation");
  // Loop over them and prevent submission
  Array.from(forms).forEach((form) => {
    form.addEventListener(
      "submit",
      (event) => {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add("was-validated");
      },
      false
    );
  });
})();

// Change navigation bar background on scroll
let nav = document.querySelector("#main-nav");

window.addEventListener("scroll", function () {
  if (window.scrollY > 80) {
    nav.style.backgroundColor = "#0F0C29"; // on scroll
  } else {
    nav.style.backgroundColor = "transparent"; // default
  }
});

// Filtering courses and workshops by class
filterSelection("all");
function filterSelection(c) {
  let x, i;
  x = document.querySelectorAll(".filterItem");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    removeClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) addClass(x[i], "show");
  }
}

// Show filtered items
function addClass(element, name) {
  let i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr1.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Hide elements that are not selected
function removeClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

var btnContainer = document.querySelector("#filter-btns");
var btns = btnContainer.querySelectorAll(".btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    let current = document.querySelector(".btn-active");
    if (current) {
      current.classList.remove("btn-active");
    }
    this.classList.add("btn-active");
  });
}

// Redirect to a page when clicking a button
function btnLink(url) {
  window.location.href = url;
}

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
  showSlides((slideIndex += n));
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  let slides = document.querySelectorAll(".slides");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex - 1].style.display = "block";
}
