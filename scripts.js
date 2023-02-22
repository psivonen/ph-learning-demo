const navToggle = () => {
    var x = document.querySelector("#topNav");
    if (x.className === "nav-links") {x.className += " responsive";}
    else x.className = "nav-links";
}

var nav = document.querySelector('.navigation'); // Identify target

window.addEventListener('scroll', function(event) { // To listen for event
    event.preventDefault();

    if (window.scrollY >= 80) {
        nav.style.backgroundColor = '#0F0C29'; // or default color
    } else {
        nav.style.backgroundColor = 'transparent';
    }
});