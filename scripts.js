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

// Get all the the buttons
/*const buttons = document.querySelectorAll("button");

// Loop through all the buttons and add onclick event
buttons.forEach((button) => {
  button.onclick = function () {
    // Read the "data-redirect-url" attribute of the clicked button
    const redirectUrl = button.dataset.redirectUrl;
    // Redirect to the URL
    window.location.href = redirectUrl;
  };
});*/

const btnLink = (url) => {
    window.location.href = url;
}
