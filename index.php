<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Marketing Website</title>
        <!-- css boostrap 5 cdn link -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <!-- fontawesome link -->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="stylesheet" href="./css/style.css">
    </head>

    <body data-spy="scroll"  data-bs-target="#navigationautolocation">
        <!-- Start Navigation Bar section -->
        <div id="home">
            <nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark shadow p-3">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img class="logo" src="./pictures/college.jpg" alt=""> Find Now
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navigationautolocation" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navigationautolocation">
                        <ul class="navbar-nav ms-auto d-sm-flex text-center">
                            <li class="nav-item">
                                <a class="nav-link active" aria-ceurrent="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Find Place
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li class="dropdown-item">
                                        We Serve You
                                        <span style="color: orange;"> Best<span>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Guest House</a></li>
                                    <li><a class="dropdown-item" href="#">Home Stay</a></li>
                                    <li><a class="dropdown-item" href="#">Restaurant & Bar</a></li>
                                    <li><a class="dropdown-item" href="#">Coffee Shop</a></li>
                                    <li><a class="dropdown-item" href="#">Hotel</a></li>
                                    <li><a class="dropdown-item" href="#">Park</a></li>
                                    <li><a class="dropdown-item" href="#">Cycling Track</a></li>
                                    <li><a class="dropdown-item" href="#">View Tower</a></li>


                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link enabled" href="#footer-links" tabindex="-1"
                                    aria-disabled="false">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#recent">Recent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#trending">Trending</a>
                            </li>
                            <li class="nav-item signin-btn d-sm-inline me-sm-2 d-lg-flex">
                                <a href="users.php" class="nav-link btn btn-outline-success mb-1 mb-lg-0 me-lg-1">Sign
                                    Up</a>
                                <a href="signin.php" target="#" id="signin-1" class="nav-link btn btn-outline-success ">Sign In</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navigation Bar Section -->

            <!-- Image Sliders -->
            <div id="carouselExampleDark" class="carousel carousel-white slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="./pictures/computer1.jpg" class=" fill d-block w-100" alt="...">
                        <div class="carousel-caption d-sm-block">
                            <button class="btn btn-primary"><a href="#recent" style="text-decoration: none; color: white;">Explore Now!</a></button>
                            <p> Click Once & Find Your Destination</p>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="./pictures/park1.jpg" class=" fill d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./pictures/computer3.jpg" class=" filld-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <!-- End image slider -->
        </div>
        <!-- end of home sector  -->

        <!-- Start-card -->

        <div class="container d-flex">
            <div class="row" id="recent">
                <h3 class="card-title">Recently Uploaded: </h3>
                <div class="col-sm-6">
                    <div class="card shadow p-1 mb-2">
                        <img src="./pictures/computer1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Melamchi Hotel & Resort</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem aut perferendis soluta deserunt recusandae tempore aliquid delectus non quos eveniet, dolorem, necessitatibus officiis a est facilis nisi odit dolor quo.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Lunch & Dinner </li></li>
                            <li class="list-group-item">Wifi</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="car-link btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card shadow p-1 mb-2">
                        <img src="./pictures/computer2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Guest House</h5>
                            <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem aut perferendis soluta deserunt recusandae tempore aliquid delectus non quos eveniet, dolorem, necessitatibus officiis a est facilis nisi odit dolor quo.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">VIP Room</li>
                            <li class="list-group-item">General Room</li></li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="car-link btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card shadow p-1 mb-2">
                        <img src="./pictures/computer2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">

                            <h5 class="card-title">Restaurant & Bar</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tenetur fuga officia ea. Facere debitis vel culpa error enim sapiente corrupti. Amet eligendi neque sapiente temporibus eum, hic eos asperiores corrupti.</p>

                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Run Till 12pm</li>
                            <li class="list-group-item">All Kind of hard & Soft Drinks</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="car-link btn btn-primary">Read More</a></a>
                        </div>
                    </div>
                </div>
              
                <div class="col-sm-6">
                    <div class="card shadow p-1 mb-2">
                        <img src="./pictures/computer2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Hicking Tracks</h5>
                            <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolores, voluptates voluptate. Voluptates sint quod rem, modi unde cupiditate eligendi eveniet quam,</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Normal People can Visit</li>
                            <li class="list-group-item">Easy</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="car-link btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end-list -->
        <!-- list start -->
        
        <div class="container d-flex">
            <div class="row" id="trending">
            <h3 class="card-title">
            Trending Places: </h3>
                <div class="col-md-3">
                    <div class="card shadow p-1 mb-2">
                        <img src="./pictures/computer2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Namlang Hotel & Resort</h5>
                            <p class="card-text">This is a local business run which is located in namalng. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam suscipit, sapiente optio molestiae</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Wife</li>
                            <li class="list-group-item">Vehicles</li></li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="car-link btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-1 mb-2">
                        <img src="./pictures/computer2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Park</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional
                                content. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, repellendus eos. Illo harum optio, officiis.  </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">peaceful</li>
                            <li class="list-group-item">kidful</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="car-link btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card shadow p-1 mb-2">
                        <img src="./pictures/computer2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cycling Track</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Peaceful and Friendly Environment</li>
                            <li class="list-group-item">You can observe kathmandu valley from one place</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="car-link btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
               
                <div class="col-md-3">
                    <div class="card shadow p-1 mb-2">
                        <img src="./pictures/computer2.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Chandram Giri View Tower</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi maxime molestiae possimus incidunt illo? Quas eius fugit temporibus?</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">Feature-1</li>
                            <li class="list-group-item">Feature-2</li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="car-link btn btn-primary">Read More</a></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- list end -->
        <!-- Footer -->
        <footer id="footer-links" class="text-center text-lg-start bg-light text-muted">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <!-- Left -->
                <div class="me-5 d-none d-lg-block">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div class="social-links">
                    <a style="color: #3b5998;" href="https://www.facebook.com" class="me-4">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a style="color: #55acee;" href="https://www.twitter.com" class="me-4">
                        <i class="bi bi-twitter"></i>
                    </a>
                    <a style="color: #dd4b39;" href="https://www.google.com/" class="me-4">
                        <i class="bi bi-google"></i>
                    </a>
                    <a style="color: #ac2bac;" href="https://www.instagram.com" class="me-4">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a style="color: #0082ca;" href="https://www.linkdin.com" class="me-4 text-reset">
                        <i class="bi bi-linkedin"></i>
                    </a>
                    <a style="color: #333333;" href="https://www.github.com" class="me-4">
                        <i class="bi bi-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <center>
                                <img class="rounded-circle" height="100px" width="100px" src="./pictures/computer1.jpg"
                                    alt="computer">
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Shrinkhala Khatiwada
                                </h6>
                            </center>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <center>
                                <img class="rounded-circle" height="100px" width="100px" src="./pictures/computer1.jpg"
                                    alt="computer">
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Amita Tamang
                                </h6>
                            </center>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <center><img class="rounded-circle" height="100px" width="100px"
                                    src="./pictures/computer1.jpg" alt="computer">
                                <h6 class="text-uppercase fw-bold mb-4">
                                    Himal jr Tamang
                            </center>
                            <p>
                                Here you can use rows and columns to organize your footer content. Lorem ipsum
                                dolor sit amet, consectetur adipisicing elit.
                            </p>
                        </div>
                        <!-- Grid column -->
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 sm-mx-0">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold mb-3">
                                Contact
                            </h6>
                            <p>
                                <i class="bi bi-house me-3 location"></i>Kathmandu, Nepal
                            </p>
                            <p>
                                <i class="bi bi-envelope me-3 email"></i>
                                saysaathi@gmail.com
                            </p>
                            <p class=""><i class="bi bi-phone me-3 contact "></i>9818794523</p>
                            <p><i class="bi bi-phone me-3 contact"></i>9818794523</p>
                            <p>
                                <i class="bi bi-info-circle-fill me-3"></i>
                                6/Week
                            </p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
                © 2022 All Copyright Reserved By:
                <a class="text-reset fw-bold" href="#">findnow.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->
        <!-- javascript boostrap 5 cdn link -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
    </body>

</html>
