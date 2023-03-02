<!DOCTYPE html>
<html lang="en">

<?php include('header.php'); ?>

<div class="container-hero" id="hero">
    <div class="hero-content">
        <div class="col">
            <h1>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            <p class="lead">Nam tempus tellus non nibh dictum facilisis.
                Nam urna massa, posuere eu mauris sed, condimentum imperdiet turpis.
                Duis mollis libero sed dapibus efficitur. Etiam maximus, nulla quis euismod pharetra,
                nulla purus condimentum lacus, eu sagittis sem lorem non erat. </p>
            <br>
            <button class="btn btn-outline-primary">Book a Session</button>
            <button class="btn btn-outline-light" onclick="btnLink('courses.php')">Start learning</button>
        </div>
        <div class="col">
            <img src="Images/portrait.png" alt="grayscale portrait of a woman">
        </div>
    </div>
</div>


<div class="container-lg">

    <div class="container-md">
        <div class="column">
            <h2>Welcome</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt ex sit amet turpis posuere scelerisque.
                Curabitur nec pharetra dolor. Integer vitae ultrices ante. Phasellus sit amet enim ut urna mollis malesuada.
                Proin porttitor aliquet quam, in laoreet ligula dictum eget. Proin tempor lorem sed leo faucibus rhoncus.
                Sed risus risus, interdum at sodales mollis, luctus ut nisl. Morbi lacinia, erat sit amet rhoncus tincidunt,
                leo nibh molestie velit, non blandit elit magna sed ligula.
                <br>
                <br>
                Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem.
                Aenean rhoncus viverra gravida. Nullam non luctus enim, ac rhoncus arcu. Aliquam in justo libero. Quisque pellentesque est
                urna, a suscipit massa hendrerit vitae. Suspendisse sagittis egestas mauris vitae varius. Cras nec erat sed felis dictum
                varius.
            </p>
            <p style="font-weight: 700;">Check out some of my work:</p>
            <button class="btn btn-outline-dark">Portfolio</button>
        </div>
        <div class="column">
            <img src="Images/collage.png" alt="collage of three photos" width="300px">
        </div>
    </div>

    <div class="container">
        <h2>Most popular courses & workshops</h2>
        <div class="container-sm">
            <div class="gallery">
                <div class="gallery-item">
                    <p class="uppercase">Beginner, Intermediate
                        <br>Price 299€</p>
                    <div>
                        <h4>Basics of studio photography</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-light" onclick="btnLink('course-page.php')">Read more</button>
                    </div>
                </div>
                <div class="gallery-item">
                    <p class="uppercase">Beginner / Price 120€</p>
                    <div>
                        <h4>Course / workshop name</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-light">Read more</button>
                    </div>
                </div>
                <div class="gallery-item">
                    <p class="uppercase">Beginner / Price 120€</p>
                    <div>
                        <h4>Course / workshop name</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-light">Read more</button>
                    </div>
                </div>
                <div class="gallery-item">
                    <p class="uppercase">Beginner / Price 120€</p>
                    <div>
                        <h4>Course / workshop name</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-light">Read more</button>
                    </div>
                </div>
                <div class="gallery-item">
                    <p class="uppercase">Beginner / Price 120€</p>
                    <div>
                        <h4>Course / workshop name</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-light">Read more</button>
                    </div>
                </div>
                <div class="gallery-item">
                    <p class="uppercase">Beginner / Price 120€</p>
                    <div>
                        <h4>Course / workshop name</h4>
                        <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem. </p>
                        <button class="btn btn-outline-light">Read more</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="testimonials">
        <div class="row">
        <h3>What other people are saying</h3>
            <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="col-md-3">
                            <div class="card">
                                <h5>Customer name</h5>
                                <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem.</p>
                                <p class="uppercase"><?php echo date("Y/M/d");?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                        <div class="card">
                                <h5>Customer name</h5>
                                <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem.</p>
                                <p class="uppercase"><?php echo date("Y/M/d");?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                        <div class="card">
                                <h5>Customer name</h5>
                                <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem.</p>
                                <p class="uppercase"><?php echo date("Y/M/d");?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                        <div class="card">
                                <h5>Customer name</h5>
                                <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem.</p>
                                <p class="uppercase"><?php echo date("Y/M/d");?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                        <div class="card">
                                <h5>Customer name</h5>
                                <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem.</p>
                                <p class="uppercase"><?php echo date("Y/M/d");?></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="col-md-3">
                        <div class="card">
                                <h5>Customer name</h5>
                                <p>Pellentesque accumsan tincidunt ipsum, et consectetur elit egestas vel. Quisque in dapibus mauris, non pellentesque lorem.</p>
                                <p class="uppercase"><?php echo date("Y/M/d");?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                    <span><i class="fa-solid fa-chevron-left" aria-hidden="true"></i></span>
                </a>
                <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                    <span><i class="fa-solid fa-chevron-right" aria-hidden="true"></i></span>
                </a>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>

</html>