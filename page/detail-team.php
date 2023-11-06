<?php
    require "../koneksi.php";

    $queryTeam = mysqli_query($con, "SELECT id, nama, foto FROM team ");
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
            <a class="navbar-brand" href="../index.php#abouts">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <a class="navbar-brand mx-auto fw-medium text-white" href="#">Detail Team</a>
        </div>
    </nav>
    <!-- Navbar -->
    
    <!-- Detail Team -->
    <div class="team-mwp">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-1 justify-content-center">

                    <?php while($data = mysqli_fetch_array($queryTeam)){?>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <img src="../assets/img/team/<?php echo $data['foto']; ?>" class="mb-3" alt="" />
                        <div class="nama-detail" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                            <h5 class="fw-medium mb-5"><?php echo $data['nama']; ?></h5>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
    <!-- Detail Team -->

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