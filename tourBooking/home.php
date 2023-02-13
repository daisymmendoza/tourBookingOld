<!-- Header -->
<?php include "header.php"?>

<!-- Body -->
<div class="page-container">
   <div class="content-wrap">
        <div class="carouselContainer">
            <div id="carouselExampleFade" class="carousel slide carousel-fade">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/beach.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="text-center">Explore More With Tourgo</h1>
                            <form action="create.php" method="post">
                                <div class="form-group text-center">
                                    <input type="submit" class="btn btn-primary mt-2" value="View">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/collage.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="text-center">Explore More With Tourgo</h1>
                            <form action="index.php" method="post">
                                <div class="form-group text-center">
                                    <input type="submit" class="btn btn-primary mt-2" value="View">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/mountains.png" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="text-center">Explore More With Tourgo</h1>
                            <form action="index.php" method="post">
                                <div class="form-group text-center">
                                    <input type="submit" class="btn btn-primary mt-2" value="View">
                                </div>
                            </form>
                        </div>
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
        </div>

        <!-- Why Tourgo section -->
        <div class="whySection">
            <h3 class="sectionHead">Why Tourgo?</h3>
            <div class="whyReasoning">
                <div class="whyBox">
                    <img src="images/pin.png" class="whyIcon">
                    <h5 class="whyHead">Many Locations</h5>
                    <p class="whyTxt">With locations in over 10 countries, you're sure to find the perfect tour!</p>
                </div>
                <div class="whyBox">
                    <img src="images/dollar.png" class="whyIcon">
                    <h5 class="whyHead">Flexibility</h5>
                    <p class="whyTxt">Need to cancel? No problem, and no cancellation fee.</p>
                </div>
                <div class="whyBox">
                    <img src="images/stars.png" class="whyIcon">
                    <h5 class="whyHead">Quality-driven</h5>
                    <p class="whyTxt">We strive to ensure you receive the best quality tours, and our reviews reflect this.</p>
                </div>
            </div>
        </div>

        <!-- Popular places section -->
        <div class="popSection">
            <h3 class="sectionHead" id="popHead">Popular Cities</h3><br>
            <div class="card-deck">
                <div class="card">
                    <a href="create.php">
                        <img src="images/paris.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Paris, France</h5>
                            <p class="card-text">Explore the city of love and its famous landmarks like the Louvre Museum, Notre-Dame cathedral, the Eiffel Tower, and much more!</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="create.php">
                        <img src="images/seattle.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Seattle, Washington</h5>
                            <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="create.php">
                        <img src="images/venice.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Florence, Italy</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
                        </div>
                    </a>
                </div>
                <div class="card">
                    <a href="create.php">
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