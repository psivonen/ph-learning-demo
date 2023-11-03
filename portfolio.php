<!DOCTYPE html>
<html lang="en">

<?php
$title = "Portfolio";
include('header.php');
?>

<div class="portfolio">
    <div class="portfolio-content">
        <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
        <p class="lead">Nam tempus tellus non nibh dictum facilisis.
            Nam urna massa, posuere eu mauris sed, condimentum imperdiet turpis.
            Duis mollis libero sed dapibus efficitur.
            Etiam maximus, nulla quis euismod pharetra,
            nulla purus condimentum lacus, eu sagittis sem lorem non erat. </p>
    </div>
</div>

<!-- Images used to open the lightbox -->
<div class="image-container">
    <div class="image-grid">
        <div class="image-grid-item">
            <img src="Images/northern-lights.jpg" onclick="openLightbox();currentSlide(1)" class="hover-shadow" alt="Northern Lights">
        </div>
        <div class="image-grid-item">
            <img src="Images/colorful-portrait.jpg" onclick="openLightbox();currentSlide(2)" class="hover-shadow" alt="Side profile portrait of a woman">
        </div>
        <div class="image-grid-item">
            <img src="Images/sea.jpg" onclick="openLightbox();currentSlide(3)" class="hover-shadow" alt="Close up photo of ocean waves">
        </div>
        <div class="image-grid-item">
            <img src="Images/portrait-pink.jpg" onclick="openLightbox();currentSlide(4)" class="hover-shadow" alt="Portrait of a woman with pink background">
        </div>
        <div class="image-grid-item">
            <img src="Images/portrait-3.jpg" onclick="openLightbox();currentSlide(5)" class="hover-shadow" alt="Portrait of a woman with sunglasses">
        </div>
        <div class="image-grid-item">
            <img src="Images/white-dog.jpg" onclick="openLightbox();currentSlide(6)" class="hover-shadow" alt="Lake landscape with a white dog">
        </div>
        <div class="image-grid-item">
            <img src="Images/pink-flowers.jpg" onclick="openLightbox();currentSlide(7)" class="hover-shadow" alt="Pink flowers">
        </div>
        <div class="image-grid-item">
            <img src="Images/brown-dog.jpg" onclick="openLightbox();currentSlide(8)" class="hover-shadow" alt="Brown dog in a forest">
        </div>
        <div class="image-grid-item">
            <img src="Images/colorful-portrait-2.jpg" onclick="openLightbox();currentSlide(9)" class="hover-shadow" alt="Colorful portrait of a woman">
        </div>
        <div class="image-grid-item">
            <img src="Images/bw-portrait.jpg" onclick="openLightbox();currentSlide(10)" class="hover-shadow" alt="Black and white portait">
        </div>
        <div class="image-grid-item">
            <img src="Images/editorial.jpg" onclick="openLightbox();currentSlide(11)" class="hover-shadow" alt="Woman sitting in a car">
        </div>
        <div class="image-grid-item">
            <img src="Images/bw-portrait-2.jpg" onclick="openLightbox();currentSlide(12)" class="hover-shadow" alt="Black and white photo of a man sitting on stairs">
        </div>
    </div>
</div>

<!-- The Modal/Lightbox -->
<div id="lightbox" class="modal">
    <span class="close cursor" onclick="closeLightbox()"><i class="bi bi-x-lg"></i></span>
    <div class="modal-content">
        <div class="slides">
            <img src="Images/northern-lights.jpg" class="slide-img" alt="Northern Lights">
        </div>

        <div class="slides">
            <img src="Images/colorful-portrait.jpg" class="slide-img" alt="Side profile portrait of a woman">
        </div>

        <div class="slides">
            <img src="Images/sea.jpg" class="slide-img" alt="Close up photo of ocean waves">
        </div>

        <div class="slides">
            <img src="Images/portrait-pink.jpg" class="slide-img" alt="Portrait of a woman with pink background">
        </div>

        <div class="slides">
            <img src="Images/portrait-3.jpg" class="slide-img" alt="Portrait of a woman with sunglasses">
        </div>

        <div class="slides">
            <img src="Images/white-dog.jpg" class="slide-img" alt="Lake landscape with a white dog">
        </div>

        <div class="slides">
            <img src="Images/pink-flowers.jpg" class="slide-img" alt="Pink flowers">
        </div>

        <div class="slides">
            <img src="Images/brown-dog.jpg" class="slide-img" alt="Brown dog in a forest">
        </div>

        <div class="slides">
            <img src="Images/colorful-portrait-2.jpg" class="slide-img" alt="Colorful portrait of a woman">
        </div>

        <div class="slides">
            <img src="Images/bw-portrait.jpg" class="slide-img" alt="Black and white portait">
        </div>

        <div class="slides">
            <img src="Images/editorial.jpg" class="slide-img" alt="Woman sitting in a car">
        </div>

        <div class="slides">
            <img src="Images/bw-portrait-2.jpg" class="slide-img" alt="Black and white photo of a man sitting on stairs">
        </div>

        <!-- Next/previous controls -->
        <a class="prev-img" onclick="plusSlides(-1)"><i class="fa-solid fa-arrow-left"></i></a>
        <a class="next-img" onclick="plusSlides(1)"><i class="fa-solid fa-arrow-right"></i></a>

    </div>
</div>

<?php include('footer.php'); ?>

</html>