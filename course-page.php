<!DOCTYPE html>
<html lang="en">

<?php
include('header2.php');
?>

<div class="course-page-hero">
    <div class="column">
        <div class="hero-column">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="courses.php">Courses & Workshops</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Basics of Studio Photography</li>
                </ol>
            </nav>
            <h2>Basics of Studio Photography</h2>
            <ul>
                <li><i class="fas fa-layer-group"></i> Beginner, Intermediate</li>
                <li><i class="fas fa-clock"></i> 3 weeks</li>
                <li><i class="far fa-money-bill-alt"></i> 299€</li>
            </ul>
            <div class="column-img">
                <img src="Images/studio.jpg" alt="black and white photo of a photography studio">
            </div>
        </div>
    </div>
</div>

<div class="container-lg">
    <div class="container-md">
        <div class="column">
            <h3>About this course</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula, mi at rhoncus fringilla,
                dolor nibh suscipit risus, vel porta enim mauris gravida metus. Nulla facilisi. Vestibulum fermentum dictum dolor,
                ac suscipit ligula molestie vel. Mauris quam nibh, consequat ut tristique in, laoreet vel est. Praesent mi orci,
                consectetur nec commodo ut, viverra eget nisi. Sed aliquam mauris a eros porta faucibus. Duis eu ornare nunc.
                <br>
                <br>
                Suspendisse imperdiet sem in nunc tincidunt pharetra. Aenean in posuere dolor, sed lobortis nunc.
                Proin condimentum magna et diam gravida, sed consequat metus viverra. Nullam gravida mauris condimentum nulla venenatis iaculis.
                Mauris quam nibh, consequat ut tristique in, laoreet vel est. Praesent mi orci, consectetur nec commodo ut, viverra eget nisi.
                Sed aliquam mauris a eros porta faucibus. Duis eu ornare nunc. Proin elementum, est et vehicula sagittis,
                tellus nulla dignissim eros, sit amet hendrerit mauris nibh sit amet sem.
            </p>
        </div>
    </div>

    <div class="container-md">
        <div class="column">
            <h3>After this course you will</h3>
            <ul>
                <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li><i class="far fa-check-circle"></i> Sed vehicula, mi at rhoncus fringilla, dolor nibh suscipit risus.</li>
                <li><i class="far fa-check-circle"></i> Nulla facilisi. Vestibulum fermentum dictum dolor, ac suscipit.</li>
            </ul>
        </div>
        <div class="column">
            <h3>Requirements</h3>
            <ul>
                <li><i class="far fa-check-circle"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                <li><i class="far fa-check-circle"></i> Sed vehicula, mi at rhoncus fringilla, dolor nibh suscipit risus.</li>
                <li><i class="far fa-check-circle"></i> Nulla facilisi. Vestibulum fermentum dictum dolor, ac suscipit.</li>
            </ul>
        </div>
    </div>
    <div class="container-md">
        <div class="column">
            <p style="font-weight: 700; font-size: 20px;">Price: 299€</p>
            <button class="btn btn-outline-dark" onclick="window.location.href='register.php';">Register now</button>
        </div>
    </div>
</div>

<div class="contact">
    <div class="content">
        <h3>Have any questions about the courses?</h3>
        <button class="btn btn-outline-dark">Send a message</button>
    </div>
</div>


<?php
include('footer.php');
?>

</html>