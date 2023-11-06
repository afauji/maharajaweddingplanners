<?php
    require "session.php";
    require "../koneksi.php";

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori");
    $jumlahKategori = mysqli_num_rows($queryKategori);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori</title>

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
</style>
<body>
    <?php require "navbar.php"; ?>

    <div class="container my-5">
    
        <?php
            if(isset($_POST['simpan_kategori'])){
                $kategori = htmlspecialchars($_POST['kategori']);

                $queryExist = mysqli_query($con, "SELECT nama FROM kategori WHERE nama='$kategori'");
                $jumlahDataKategoriBaru = mysqli_num_rows($queryExist);

                if($jumlahDataKategoriBaru > 0){
                    ?>
                        <div class="alert alert-warning mt-3 col-12 col-md-4" role="alert">
                            Kategori Sudah Ada
                        </div>

                        <meta http-equiv="refresh" content="1; url=kategori.php" />
                    <?php
                }
                else{
                    $querySimpan = mysqli_query($con, "INSERT INTO kategori (nama) VALUES ('$kategori')");

                    if($querySimpan){
                        ?>
                            <div class="alert alert-primary mt-3 col-12 col-md-4" role="alert">
                                Data Kategori Berhasil DiSimpan
                                </div>
                            
                            <meta http-equiv="refresh" content="1; url=kategori.php" />
                        <?php
                    }
                    else{
                        ?>
                            <div class="alert alert-warning mt-3 col-12 col-md-4" role="alert">
                                Data Kategori Gagal DiSimpan
                            </div>

                            <meta http-equiv="refresh" content="1; url=kategori.php" />
                        <?php
                    }
                }
            }
        ?>

        <!-- Button trigger modal Tambah Kategori-->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Tambah Kategori
        </button>

        <!-- Modal Tambah Kategori -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Kategori</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div>
                                <label for="kategori">Kategori</label>
                                <input type="text" id="kategori" name="kategori" placeholder="" class="form-control" autocomplete="off" required>
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" name="simpan_kategori"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp;Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-1">
        <h4>List Kategori</h4>

        <div class="table-responsive mt-4">
            <table class="table table-hover table-bordered">
                <thead class="table-dark text-center">
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($jumlahKategori==0){
                    ?>
                        <tr>
                            <td colspan="3" class="text-center">Tidak Ada Data Kategori</td>
                        </tr>
                    <?php
                        }
                        else{
                            $jumlah = 1;
                            while($data=mysqli_fetch_array($queryKategori)){
                    ?> 
                            <tr class="text-center align-middle">
                                <td><?php echo $jumlah; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td>
                                    <a href="kategori-detail.php?p=<?php echo $data['id']; ?>" class="btn btn-info text-white" type=""><i class="fa-solid fa-search"></i></a>
                                </td>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>