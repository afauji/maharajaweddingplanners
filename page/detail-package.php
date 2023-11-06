<?php
    require "../koneksi.php";

    $nama = htmlspecialchars($_GET['nama']);
    $queryPackage = mysqli_query($con, "SELECT * FROM package WHERE nama='$nama'");
    $package = mysqli_fetch_array($queryPackage);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maharaja Wedding Planner</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Fav Icon -->
    <link rel="shortcut icon" href="<?php echo $maharaja; ?>" type="image/x-icon">

    <!-- Fonts Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="../dist/css/style.css">

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar fixed-top" style="background-color: #000000cb;">
        <div class="container">
            <a class="navbar-brand" href="../index.php#package">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <a class="navbar-brand mx-auto fw-medium text-white" href="#">Detail Package</a>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Detail Package -->
    <div class="detail-package">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row row-cols-lg-2 text-center align-items-center pt-3 pb-2">
                        <div class="col justify-content-center text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <img src="../assets/img/package-wedding/<?php echo $package['foto']; ?>" class="mb-3" alt="" />
                        </div>
                        <div class="col text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            <h3 class="fw-bold"><?php echo $package['nama']; ?></h3>
                            <h4><i class="fa-solid fa-tag"></i> Rp. <?php echo number_format($package['harga'],0,',','.'); ?></h4>
                            <br/>
                            <a href="https://api.whatsapp.com/send?phone=6285722837969" class="btn btn-success btn-lg fa-brands fa-whatsapp rounded-4" target="_blank"><span>&nbsp;&nbsp;Whatsapp</span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col"  data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                    <p class="fs-4 fw-medium text-center justify-content-center border-bottom">Deskripsi</p>
                    <p class="text-center justify-content-center">Detail yang didapat seperti berikut :</p>
                    <p><?php echo htmlspecialchars_decode($package['rincian']); ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Detail Package -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <!-- JS -->
    <script src="../dist/js/script.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>