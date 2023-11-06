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

<!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body sticky-top" data-bs-theme="dark" style="padding:15px">
    <div class="container">
        <a href="../adminpanel/" class="logo"><img src="<?php echo $maharaja; ?>"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 text-center">
            <li class="nav-item me-3">
            <a class="nav-link" aria-current="page" href="../adminpanel">Home</a>
            </li>
            <li class="nav-item me-3">
            <a class="nav-link" href="kategori.php">Kategori</a>
            </li>
            <li class="nav-item me-3">
            <a class="nav-link" href="package.php">Package</a>
            </li>
            <li class="nav-item me-3">
            <a class="nav-link" href="vendor.php">Vendor</a>
            </li>
            <li class="nav-item me-3">
            <a class="nav-link" href="all-vendor.php">All Vendor</a>
            </li>
            <li class="nav-item me-3">
            <a class="nav-link" href="team.php">Team</a>
            </li>
            <li class="nav-item me-3">
            <a class="nav-link" href="klien.php">Klien WO</a>
            </li>
            <li class="nav-item me-3">
            <a class="nav-link" href="testimonial.php">Testimonial</a>
            </li>
        </ul>
            <a href="logout.php"><button class="btn btn-danger" type="submit"><i class="fa-solid fa-right-from-bracket"></i>&nbsp;&nbsp;Logout</button></a>
        </div>
    </div>
    </nav>
    <!-- navbar -->