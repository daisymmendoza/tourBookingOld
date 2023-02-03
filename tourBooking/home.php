<!-- Header -->
<?php include "header.php"?>

<!-- Body -->
<div class="container mt-5">
    <h1 class="text-center">Book your next adventure!</h1>
    <!-- <p class="text-center">We are going to use PHP and MySQL to create a CRUD (Create, Read, Update, Delete) Application.</p> -->

    <div class="container">
        <form action="index.php" method="post">
            <div class="form-group text-center">
                <input type="submit" class="btn btn-primary mt-2" value="Let's do it!">
            </div>
        </form>
    </div>
</div>

<!-- Popular places section -->
<h3>Popular Cities</h3>
<div class="cardSection row row-cols-4">
    <!-- Paris, France -->
    <div class="card">
        <img src="images/paris.png" class="card-img-top" alt="...">
        <a href="#">
            <div class="card-body">
                <h5 class="card-title">Paris, France</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </a>
    </div>

    <!-- Seattle, Washington -->
    <div class="card">
        <img src="images/seattle.png" class="card-img-top" alt="...">
        <a href="#">
            <div class="card-body">
                <h5 class="card-title">Seattle, Washington</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </a>
    </div>

    <!-- Florence, Italy -->
    <div class="card">
        <img src="images/venice.png" class="card-img-top" alt="...">
        <a href="#">
            <div class="card-body">
                <h5 class="card-title">Florence, Italy</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </a>
    </div>

    <!-- London, England -->
    <div class="card">
        <img src="images/london.png" class="card-img-top" alt="...">
        <a href="#">
            <div class="card-body">
                <h5 class="card-title">London, England</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </a>
    </div>
</div>

<!-- Footer -->
<?php include "footer.php"?>