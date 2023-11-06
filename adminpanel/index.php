<?php
    require "session.php";
    require "../koneksi.php";

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);

    $queryPackage = mysqli_query($con, "SELECT * FROM package");
    $jumlahPackage = mysqli_num_rows($queryPackage);

    $queryVendor = mysqli_query($con, "SELECT * FROM vendor");
    $jumlahVendor = mysqli_num_rows($queryVendor);

    $queryAllVendor = mysqli_query($con, "SELECT * FROM all_vendor");
    $jumlahAllVendor = mysqli_num_rows($queryAllVendor);

    $queryTeam = mysqli_query($con, "SELECT * FROM team");
    $jumlahTeam = mysqli_num_rows($queryTeam);

    $queryKlien = mysqli_query($con, "SELECT * FROM klien");
    $jumlahKlien = mysqli_num_rows($queryKlien);

    $queryTesti = mysqli_query($con, "SELECT * FROM testi");
    $jumlahTesti = mysqli_num_rows($queryTesti);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- Fonts Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    * {
    font-family: "Poppins", sans-serif;
    scroll-behavior: smooth;
    }

    .card {
    max-width: 320px;
    border-width: 1px;
    border-color: rgba(219, 234, 254, 1);
    border-radius: 1rem;
    background-color: rgba(255, 255, 255, 1);
    padding: 1rem;
    }

    .header {
    display: flex;
    align-items: baseline;
    grid-gap: 1rem;
    gap: 0.25rem;
    }

    .icon {
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 9999px;
    background-color: rgba(96, 165, 250, 1);
    padding: 0.5rem;
    color: rgba(255, 255, 255, 1);
    }

    .alert {
    font-weight: 600;
    color: rgba(107, 114, 128, 1);
    }

    .message {
    color: rgba(107, 114, 128, 1);
    }

    .read {
    display: inline-block;
    border-radius: 0.5rem;
    width: 100%;
    padding: 0.75rem 1.25rem;
    text-align: center;
    font-size: 0.875rem;
    line-height: 1.25rem;
    font-weight: 600;
    color: rgba(255, 255, 255, 1);
    }
</style>

<body>
    <?php require "navbar.php"; ?>

    <!-- dashboard -->
    <div class="container mt-4">
        <h5>Hallo, Selamat Datang di Halaman Dashboard <?php echo $_SESSION['username'] ?></h5>

        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 justify-content-center mb-4">
            <div class="col mt-4">
                <div class="card">
                    <div class="header">
                        <span class="icon">
                            <i class="fa-solid fa-list"></i>
                        </span>
                            <p class="alert">Kategori</p>
                    </div>

                    <p class="message">Terdapat <?php echo $jumlahKategori; ?> Kategori</p>

                    <div class="actions">
                        <a class="read btn btn-primary" href="kategori.php" >Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col mt-4">
                <div class="card">
                    <div class="header">
                        <span class="icon">
                            <i class="fa-solid fa-box"></i>
                        </span>
                            <p class="alert">Package</p>
                    </div>

                    <p class="message">Terdapat <?php echo $jumlahPackage; ?> Package</p>

                    <div class="actions">
                        <a class="read btn btn-primary" href="package.php" >Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col mt-4">
                <div class="card">
                    <div class="header">
                        <span class="icon">
                            <i class="fa-solid fa-handshake"></i>
                        </span>
                            <p class="alert">Vendor</p>
                    </div>

                    <p class="message">Terdapat <?php echo $jumlahVendor; ?> Vendor</p>

                    <div class="actions">
                        <a class="read btn btn-primary" href="vendor.php" >Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col mt-4">
                <div class="card">
                    <div class="header">
                        <span class="icon">
                            <i class="fa-solid fa-file-lines"></i>
                        </span>
                            <p class="alert">All Vendor</p>
                    </div>

                    <p class="message">Terdapat <?php echo $jumlahAllVendor; ?> All Vendor</p>

                    <div class="actions">
                        <a class="read btn btn-primary" href="all-vendor.php" >Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col mt-4 mb-4">
                <div class="card">
                    <div class="header">
                        <span class="icon">
                            <i class="fa-solid fa-people-group"></i>
                        </span>
                            <p class="alert">Team</p>
                    </div>

                    <p class="message">Terdapat <?php echo $jumlahTeam; ?> Team</p>

                    <div class="actions">
                        <a class="read btn btn-primary" href="team.php" >Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col mt-4 mb-4">
                <div class="card">
                    <div class="header">
                        <span class="icon">
                            <i class="fa-solid fa-user"></i>
                        </span>
                            <p class="alert">Data Klien WO</p>
                    </div>

                    <p class="message">Terdapat <?php echo $jumlahKlien; ?> Klien WO</p>

                    <div class="actions">
                        <a class="read btn btn-primary" href="klien.php" >Lihat Detail</a>
                    </div>
                </div>
            </div>

            <div class="col mt-4 mb-4">
                <div class="card">
                    <div class="header">
                        <span class="icon">
                            <i class="fa-solid fa-comments"></i>
                        </span>
                            <p class="alert">Testimonial</p>
                    </div>

                    <p class="message">Terdapat <?php echo $jumlahTesti; ?> Testimonial</p>

                    <div class="actions">
                        <a class="read btn btn-primary" href="testimonial.php" >Lihat Detail</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- dashboard -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>