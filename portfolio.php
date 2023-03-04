<!DOCTYPE html>
<html lang="en">

<?php include('header2.php'); ?>

<div class="portfolio">
    <div class="portfolio-content">
        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
        <p class="lead">Nam tempus tellus non nibh dictum facilisis.
            Nam urna massa, posuere eu mauris sed, condimentum imperdiet turpis.
            Duis mollis libero sed dapibus efficitur.
            Etiam maximus, nulla quis euismod pharetra,
            nulla purus condimentum lacus, eu sagittis sem lorem non erat. </p>
        <button class="btn btn-outline-primary">Book a Session</button>
    </div>
</div>

<!-- Images used to open the lightbox -->
<div class="image-container">
    <div class="image-grid">
        <div class="image-grid-item">
            <img src="Images/northern-lights.jpg" onclick="openLightbox();currentSlide(1)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/colorful-portrait.jpg" onclick="openLightbox();currentSlide(2)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/sea.jpg" onclick="openLightbox();currentSlide(3)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/portrait-pink.jpg" onclick="openLightbox();currentSlide(4)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/portrait-3.jpg" onclick="openLightbox();currentSlide(5)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/white-dog.jpg" onclick="openLightbox();currentSlide(6)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/pink-flowers.jpg" onclick="openLightbox();currentSlide(7)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/brown-dog.jpg" onclick="openLightbox();currentSlide(8)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/colorful-portrait-2.jpg" onclick="openLightbox();currentSlide(9)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/bw-portrait.jpg" onclick="openLightbox();currentSlide(10)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/editorial.jpg" onclick="openLightbox();currentSlide(11)" class="hover-shadow">
        </div>
        <div class="image-grid-item">
            <img src="Images/bw-portrait-2.jpg" onclick="openLightbox();currentSlide(12)" class="hover-shadow">
        </div>
    </div>
</div>

<!-- The Modal/Lightbox -->
<div id="lightbox" class="modal">
    <span class="close cursor" onclick="closeLightbox()">&times;</span>
    <div class="modal-content">

        <div class="slide">
            <div class="numbertext">1 / 12</div>
            <img src="Images/northern-lights.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">2 / 12</div>
            <img src="Images/colorful-portrait.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">3 / 12</div>
            <img src="Images/sea.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">4 / 12</div>
            <img src="Images/portrait-pink.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">5 / 12</div>
            <img src="Images/portrait-3.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">6 / 12</div>
            <img src="Images/white-dog.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">7 / 12</div>
            <img src="Images/pink-flowers.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">8 / 12</div>
            <img src="Images/brown-dog.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">10 / 12</div>
            <img src="Images/colorful-portrait-2.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">10 / 12</div>
            <img src="Images/bw-portrait.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">11 / 12</div>
            <img src="Images/editorial.jpg" class="slide-img">
        </div>

        <div class="slide">
            <div class="numbertext">12 / 12</div>
            <img src="Images/bw-portrait-2.jpg" class="slide-img">
        </div>

        <!-- Next/previous controls -->
        <a class="prev" onclick="plusSlides(-1)"><i class="fa-solid fa-arrow-left"></i></a>
        <a class="next" onclick="plusSlides(1)"><i class="fa-solid fa-arrow-right"></i></a>

    </div>
</div>

<?php include('footer.php'); ?>

</html>