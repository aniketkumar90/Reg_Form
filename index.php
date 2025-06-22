<?php include_once 'header.php';?>
<header>
    <div class="row py-3 border-bottom">
        <div class="col-6 col-sm-3 order-1">
            <div class="main-logo">
                <a href="index.html">
                    <img src="images/logo.png" alt="logo" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="col-12 col-sm-5 order-3 order-sm-2 mt-3 mt-sm-0">
            <div class="search-bar row bg-light p-2 my-2 rounded-4">
                <div class="col-md-4 d-none d-md-block">
                    <select class="form-select border-0 bg-transparent">
                        <option>All Categories</option>
                        <option>Groceries</option>
                        <option>Drinks</option>
                        <option>Chocolates</option>
                    </select>
                </div>
                <div class="col-11 col-md-7">
                    <form id="search-form" class="text-center" action="index.html" method="post">
                        <input type="text" class="form-control border-0 bg-transparent"
                            placeholder="Search for more than 20,000 products">
                    </form>
                </div>
                <div class="col-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M21.71 20.29L18 16.61A9 9 0 1 0 16.61 18l3.68 3.68a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.39ZM11 18a7 7 0 1 1 7-7a7 7 0 0 1-7 7Z" />
                    </svg>
                </div>
            </div>
        </div>
        <div class="col-6 col-sm-4 order-2 order-sm-3 py-2">
            <div class="con">
                <div class="support-box text-end d-none d-xl-block">
                    <span class="fs-6 text-muted">For Support?</span>
                    <h5 class="mb-0">+980-34984089</h5>
                </div>
                <div class="person-icon d-flex align-items-center justify-content-center ">
                    <div class="p2">
                        <img src="images/persion_1.jpeg" alt="Person" class="img-fluid">
                    </div>
                </div>
                <div>
                    <img src="images/heart_1.jpeg" alt="Heart" class="img-fluid icon-img ic">
                </div>
                <div class="ic">
                    <a href="login.php" class="login-link">Login</a>
                </div>
                <div class="ic">
                    <img src="images/cart_1.webp" alt="Cart" class="img-fluid icon-img">
                </div>
            </div>
        </div>

    </div>
    <div class="row py-3">
        <div class="d-flex justify-content-center justify-content-sm-between align-items-center w-100">
            <nav class="navbar navbar-expand-lg w-100">
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#mobileNav" aria-controls="mobileNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end" tabindex="-1" id="mobileNav" aria-labelledby="mobileNavLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="mobileNavLabel">Menu</h5>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div
                        class="offcanvas-body d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-between w-100">
                        <select class="filter-categories border-0 mb-3 mb-lg-0 me-lg-5">
                            <option>Shop by Departments</option>
                            <option>Groceries</option>
                            <option>Drinks</option>
                            <option>Chocolates</option>
                        </select>
                        <ul class="navbar-nav flex-column flex-lg-row gap-3 mb-0 w-100">
                            <li class="nav-item active"><a href="#women" class="nav-link">Women</a></li>
                            <li class="nav-item"><a href="#men" class="nav-link">Men</a></li>
                            <li class="nav-item"><a href="#kids" class="nav-link">Kids</a></li>
                            <li class="nav-item"><a href="#accessories" class="nav-link">Accessories</a></li>
                            <li class="nav-item"><a href="#brand" class="nav-link">Brand</a></li>
                            <li class="nav-item"><a href="#sale" class="nav-link">Sale</a></li>
                            <li class="nav-item"><a href="#blog" class="nav-link">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Image -->
    <div class="row">
        <div class="col-sm-6 col-md-6">
            <div id="carouselExampleIndicators" class="carousel slide">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row banner-content p-5" style="background-color:aliceblue">
                            <div class="content-wrapper col-md-7">
                                <div class="categories my-3">100% natural</div>
                                <h3 class="display-4">Fresh Smoothie &amp; Summer Juice</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam
                                    elementum.</p>
                                <a href="#"
                                    class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop
                                    Now</a>
                            </div>
                            <div class="img-wrapper col-md-5">
                                <img src="images/product-thumb-1.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row banner-content p-5" style="background-color:aliceblue">
                            <div class="content-wrapper col-md-7">
                                <div class="categories my-3">100% natural</div>
                                <h3 class="display-4">Fresh Smoothie &amp; Summer Juice</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam
                                    elementum.</p>
                                <a href="#"
                                    class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop
                                    COllaction</a>
                            </div>
                            <div class="img-wrapper col-md-5">
                                <img src="images/product-thumb-2.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="row banner-content p-5" style="background-color:aliceblue">
                            <div class="content-wrapper col-md-7">
                                <div class="categories my-3">100% natural</div>
                                <h3 class="display-4">Fresh Smoothie &amp; Summer Juice</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Dignissim massa diam
                                    elementum.</p>
                                <a href="#"
                                    class="btn btn-outline-dark btn-lg text-uppercase fs-6 rounded-1 px-4 py-3 mt-3">Shop
                                    COllaction</a>
                            </div>
                            <div class="img-wrapper col-md-5">
                                <img src="images/product-thumb-11.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 " style="background-color:aliceblue;">
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <img src="images/slide-1.jpg" class="card-img-top" alt="image5">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <img src="images/slide-2.jpg" class="card-img-top" alt="image5">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card mb-3">
                        <img src="images/slide-1.jpg" class="card-img-top" alt="image5">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card mb-3">
                        <img src="images/slide-2.jpg" class="card-img-top" alt="image5">
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<?php include_once 'footer.php';?>
<?php include_once 'end.php';?>