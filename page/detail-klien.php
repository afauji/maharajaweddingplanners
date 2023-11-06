<?php
    require "../koneksi.php";

    $queryKlien = mysqli_query($con, "SELECT * FROM klien WHERE id ORDER BY tanggal");
    $jumlahKlien = mysqli_num_rows($queryKlien);
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
            <a class="navbar-brand" href="../index.php#testi">
                <i class="fa-solid fa-arrow-left"></i>
            </a>
            <a class="navbar-brand mx-auto fw-medium text-white" href="#">Detail Klien</a>
        </div>
    </nav>
    <!-- Navbar -->

    <!-- Detail Klien -->
    <div class="container mb-4" style="margin-top: 90px;">
        <h4>List Data Klien WO</h4>

        <div class="table-responsive mt-4">
            <table class="table table-hover table-bordered">
                <thead class="table-dark text-center">
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Lokasi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($jumlahKlien==0){
                    ?>
                        <tr>
                            <td colspan="4" class="text-center">Tidak Ada Data Klien WO</td>
                        </tr>
                    <?php
                        }
                        else{
                            $jumlah = 1;
                            while($data=mysqli_fetch_array($queryKlien)){
                    ?> 
                            <tr class="text-center align-middle">
                                <td><?php echo $jumlah; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['tanggal']; ?></td>
                                <td><?php echo $data['lokasi']; ?></td>
                            </tr>
                            
                    <?php
                            $jumlah++;
                            }
                        }
                    ?>
                </tbody>
                </table>
        </div>
    </div>
    <!-- Detail Klien -->

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