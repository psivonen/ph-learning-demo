<!DOCTYPE html>
<html lang="en">

<?php
$title = "Courses & Workshops";
include('header.php');
?>

<div class="course-hero">
    <div class="course-hero-content">
        <h1>Find your course or workshop and improve your photography skills</h1>
        <p class="lead">Nam tempus tellus non nibh dictum facilisis.
            Nam urna massa, posuere eu mauris sed, condimentum imperdiet turpis.
            Duis mollis libero sed dapibus efficitur.
            Etiam maximus, nulla quis euismod pharetra, nulla purus condimentum lacus, eu sagittis sem lorem non erat. </p>
    </div>
</div>

<div class="container-lg">
    <div class="container-md">
        <div class="column">
            <h2>Courses for different levels</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula, mi at rhoncus fringilla,
                dolor nibh suscipit risus, vel porta enim mauris gravida metus. Nulla facilisi.
                Vestibulum fermentum dictum dolor, ac suscipit ligula molestie vel.
                <br>
                <br>
                Mauris quam nibh, consequat ut tristique in, laoreet vel est.
                Praesent mi orci, consectetur nec commodo ut, viverra eget nisi.
                Sed aliquam mauris a eros porta faucibus. Duis eu ornare nunc.
            </p>
        </div>
        <div class="column">
            <img src="Images/person-with-camera.jpg" alt="person with a camera on top of mountain" width="100%">
        </div>
    </div>

    <div class="container">
        <h2>Upcoming courses and workshops</h2>
        <div class="container-sm">
            <div id="filter-btns">
                <button class="btn btn-outline-dark btn-active" onclick="filterSelection('all')"> Show all</button>
                <button class="btn btn-outline-dark" onclick="filterSelection('course')"> Courses</button>
                <button class="btn btn-outline-dark" onclick="filterSelection('workshop')"> Workshops</button>
                <button class="btn btn-outline-dark" onclick="filterSelection('beginner')"> Beginner</button>
                <button class="btn btn-outline-dark" onclick="filterSelection('intermediate')"> Intermediate</button>
                <button class="btn btn-outline-dark" onclick="filterSelection('advanced')"> Advanced</button>
            </div>
            <div class="gallery">
                <div class="gallery-item filterItem course beginner">
                    <div class="gallery-img">
                        <img src="Images/studio.jpg" alt="Black and white photo of a photography studio">
                    </div>
                    <div>
                        <h4>Basics of studio photography</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-dark" onclick="btnLink('course-page.php')">Read more</button>
                    </div>
                </div>
                <div class="gallery-item filterItem course advanced">
                    <div class="gallery-img">
                        <img src="Images/underwater.jpg" alt="Woman underwater">
                    </div>
                    <div>
                        <h4>Advanced Image Editing</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-dark">Read more</button>
                    </div>
                </div>
                <div class="gallery-item filterItem course beginner intermediate">
                    <div class="gallery-img">
                        <img src="Images/products.jpg" alt="Photo of Glossier products">
                    </div>
                    <div>
                        <h4>Basics of Product Photography</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-dark">Read more</button>
                    </div>
                </div>
                <div class="gallery-item filterItem workshop intermediate">
                    <div class="gallery-img">
                        <img src="Images/butterfly.jpg" alt="Pink butterfly in a pink flower">
                    </div>
                    <div>
                        <h4>Macro Photography</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-dark">Read more</button>
                    </div>
                </div>
                <div class="gallery-item filterItem workshop intermediate">
                    <div class="gallery-img">
                        <img src="Images/brownies.jpg" alt="Brownies">
                    </div>
                    <div>
                        <h4>Food Photography</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-dark">Read more</button>
                    </div>
                </div>
                <div class="gallery-item filterItem workshop beginner intermediate">
                    <div class="gallery-img">
                        <img src="Images/course.jpg">
                    </div>
                    <div>
                        <h4>In the Nature</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-dark">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact">
    <div class="content">
        <h3>Have any questions about the courses or workshops?</h3>
        <button class="btn btn-outline-dark">Send a message</button>
    </div>
</div>

<?php include('footer.php'); ?>

</html>