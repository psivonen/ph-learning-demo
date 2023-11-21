// register form select element, with courses
const selectElement = document.querySelector("#courses");
// If courses select element exists, fill with JSON data
if (selectElement) {
  fetch("data.json")
    .then((response) => response.json())
    .then((data) => {
      data.forEach((item) => {
        const option = document.createElement("option");
        option.value = item.value;
        option.text = item.text;
        selectElement.appendChild(option);
      });
    })
    .catch((error) => console.error("Error loading JSON data: ", error));
}

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
  let i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

let btnContainer = document.querySelector("#filter-btns");
let btns = btnContainer.querySelectorAll(".btn");
for (let i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function () {
    let current = document.querySelector(".btn-active");
    if (current) {
      current.classList.remove("btn-active");
    }
    this.classList.add("btn-active");
  });
}

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

// Redirect to a page when clicking a button
function btnLink(url) {
  window.location.href = url;
}

// Portfolio Lightbox
function openLightbox() {
  document.querySelector("#lightbox").style.display = "flex";
  document.querySelector("#lightbox").classList.remove("closing");
}

function closeLightbox() {
  const lightbox = document.querySelector("#lightbox");
  lightbox.classList.add("closing");
  
  // Add a delay to let the animation finish before hiding the lightbox
  setTimeout(() => {
    lightbox.style.display = "none";
    lightbox.classList.remove("closing");
  }, 500); // Adjust the delay to match the animation duration
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

function openNav() {
  document.querySelector("#mySidenav").style.width = "100%";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
