<?php
    require "session.php";
    require "../koneksi.php";

    $queryVendor = mysqli_query($con, "SELECT * FROM vendor");
    $jumlahVendor = mysqli_num_rows($queryVendor);

    function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor</title>

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
    
    form div{
        margin-bottom: 0.75rem;
    }
</style>

<body>
    <?php require "navbar.php"; ?>

    <div class="container my-5">
        <?php
            if(isset($_POST['simpan_vendor'])){
                $nama = htmlspecialchars($_POST['nama']);

                $target_dir = "../assets/img/vendor/";
                $nama_file = basename($_FILES["foto"]["name"]);
                $target_file = $target_dir . $nama_file;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $image_size = $_FILES["foto"]["size"];
                $random_name = generateRandomString(10);
                $new_name = $random_name . "." . $imageFileType;

                if($nama=='' || $nama_file=='' ){
                    ?>
                        <div class="alert alert-warning mt-3 col-12 col-md-4" role="alert">
                            Nama dan Foto Wajib Diisi!
                        </div>

                        <meta http-equiv="refresh" content="1; url=vendor.php" />
                    <?php
                }
                else{
                    if($nama_file!=''){
                        if($image_size > 5000000){
                    ?>
                        <div class="alert alert-warning mt-3 col-12 col-md-4" role="alert">
                            File Foto Tidak Boleh Lebih Dari 5 MB
                        </div>

                        <meta http-equiv="refresh" content="1; url=vendor.php" />
                    <?php
                        }
                        else{
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
                        ?>
                                <div class="alert alert-warning mt-3 col-12 col-md-4" role="alert">
                                    File Wajib Bertipe JPG, JPEG, PNG atau GIF
                                </div>

                                <meta http-equiv="refresh" content="1; url=vendor.php" />
                        <?php
                            }else{
                                move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $new_name);
                            }
                        }
                    }

                    // Query Insert to Team Table
                    $queryTambah = mysqli_query($con, "INSERT INTO vendor (nama, foto) VALUES ('$nama','$new_name')");

                    if($queryTambah){
                        ?>
                            <div class="alert alert-primary mt-3 col-12 col-md-4" role="alert">
                                Data Vendor Berhasil DiSimpan
                            </div>
                        
                            <meta http-equiv="refresh" content="1; url=vendor.php" />
                        <?php
                    }
                    else{
                        ?>
                            <div class="alert alert-warning mt-3 col-12 col-md-4" role="alert">
                                Data Vendor Gagal DiSimpan
                            </div>

                            <meta http-equiv="refresh" content="1; url=vendor.php" />
                        <?php
                    }
                }
            }

        ?>

        <!-- Button trigger modal Tambah Vendor-->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Tambah Vendor
        </button>

        <!-- Modal Tambah Vendor -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Vendor</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div>
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" required>
                            </div>
                            <div>
                                <label for="foto">Foto</label>
                                <input type="file" name="foto" id="foto" class="form-control" required>
                            </div>
                            <div class="mt-3">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button class="btn btn-primary" type="submit" name="simpan_vendor"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp;Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-3 mb-4">
        <h4>List Data Vendor</h4>

        <div class="table-responsive mt-4">
            <table class="table table-hover table-bordered">
                <thead class="table-dark text-center">
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($jumlahVendor==0){
                    ?>
                        <tr>
                            <td colspan="4" class="text-center">Tidak Ada Data Vendor</td>
                        </tr>
                    <?php
                        }
                        else{
                            $jumlah = 1;
                            while($data=mysqli_fetch_array($queryVendor)){
                    ?> 
                            <tr class="text-center align-middle">
                                <td><?php echo $jumlah; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><img src="../assets/img/vendor/<?php echo $data['foto']; ?>" alt="" width="100px"></td>
                                <td>
                                    <a href="vendor-detail.php?id=<?php echo $data['id']; ?>" class="btn btn-info text-white" type=""><i class="fa-solid fa-search"></i></a>
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