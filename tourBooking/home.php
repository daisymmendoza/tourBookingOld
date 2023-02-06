<!-- Header -->
<?php include "header.php"?>

<!-- Body -->
<div id="carouselExampleFade" class="carousel slide carousel-fade">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="images/beach.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/collage.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="images/mountains.png" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container mt-5">
    <h1 class="text-center">Book your next adventure!</h1>
    <!-- <p class="text-center">We are going to use PHP and MySQL to create a CRUD (Create, Read, Update, Delete) Application.</p> -->

    <div class="container">
        <form action="index.php" method="post">
            <!-- <div class="form-group text-center">
                <input type="submit" class="btn btn-primary mt-2" value="View">
            </div> -->
        </form>
    </div>
</div>

<!-- Popular places section -->
<div class="popSection">
    <h4>Popular Cities</h4>
    <div class="card-deck">
        <div class="card">
            <a href="#">
                <img src="images/paris.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Paris, France</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#">
                <img src="images/seattle.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Seattle, Washington</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#">
                <img src="images/venice.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Florence, Italy</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </a>
        </div>
        <div class="card">
            <a href="#">
                <img src="images/london.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">London, England</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- Footer -->
<?php include "footer.php"?>