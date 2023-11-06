<?php
    $maharaja = "../assets/icon/maharaja.png";
?>

<!-- fav icon -->
    <link rel="shortcut icon" href="<?php echo $maharaja; ?>" type="image/x-icon">
<!-- fav icon -->

<style>
    .navbar .logo img {
        height: 60px;
        display: flex;
        aspect-ratio: 16/9;
    }
</style>

<!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a href="#" class="logo"><img src="assets/icon/maharaja.png"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
                    <li class="nav-item">
                    <a class="nav-link mx-1" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-1" href="#package">Package</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-1" href="#vendors">Vendor</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-1" href="#office-maharaja">Office</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link mx-1" href="#testi">Testimonial</a>
                    </li>
                </ul>
                <a href="adminpanel/" class="btn btn-primary d-flex" type="">Login</a>
            </div>
        </div>
    </nav>
    <!-- Navbar -->