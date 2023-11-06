<?php
    require "session.php";
    require "../koneksi.php";

    $id = $_GET['id'];

    $query = mysqli_query($con, "SELECT a.*, b.nama AS nama_vendor FROM all_vendor a JOIN vendor b ON a.vendor_id=b.id WHERE a.id='$id'");
    $data = mysqli_fetch_array($query);

    $queryVendor = mysqli_query($con, "SELECT * FROM vendor WHERE id !='$data[vendor_id]'");

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
    <title>Detail All Vendor</title>
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
    
    <div class="container my-5 col-12 col-md-4">
        <?php
            if(isset($_POST['edit_all'])){
                $nama = htmlspecialchars($_POST['nama']);
                $vendor = htmlspecialchars($_POST['vendor']);
                $instagram = htmlspecialchars($_POST['instagram']);

                $target_dir = "../assets/img/vendor/all_vendor/";
                $nama_file = basename($_FILES["foto"]["name"]);
                $target_file = $target_dir . $nama_file;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $image_size = $_FILES["foto"]["size"];
                $random_name = generateRandomString(10);
                $new_name = $random_name . "." . $imageFileType;

                if($nama=='' || $vendor=='' || $nama_file=='' || $instagram=='' ){
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Nama, Vendor, Foto dan Link Instagram Wajib Diisi!
                        </div>
                    <?php
                }
                else{
                    $queryUpdate = mysqli_query($con, "UPDATE all_vendor SET vendor_id='$vendor',nama='$nama', instagram='$instagram' WHERE id=$id");
                    
                    if($nama_file!=''){
                        if($image_size > 5000000){
                        ?>
                            <div class="alert alert-warning mt-3" role="alert">
                                File Foto Tidak Boleh Lebih Dari 5 MB
                            </div>
                        <?php
                        }
                        else{
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ){
                        ?>
                                <div class="alert alert-warning mt-3" role="alert">
                                    File Wajib Bertipe JPG, JPEG, PNG atau GIF
                                </div>
                        <?php
                            }
                            else{
                                move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $new_name);

                                $queryUpdate = mysqli_query($con, "UPDATE all_vendor SET foto='$new_name' WHERE id=$id");

                                if($queryUpdate){
                                ?>
                                    <div class="alert alert-primary mt-3" role="alert">
                                        Data All Vendor Berhasil DiUpdate
                                    </div>
                                
                                    <meta http-equiv="refresh" content="1; url=all-vendor.php" />
                                <?php
                                }
                                else{
                                ?>
                                    <div class="alert alert-warning mt-3" role="alert">
                                        Data All Vendor Gagal DiUpdate
                                    </div>
                                <?php
                                }
                            }
                        }
                    }
                }
            }

            if(isset($_POST['hapusBtn'])){
                $queryHapus = mysqli_query($con, "DELETE FROM all_vendor WHERE id='$id'");

                if($queryHapus){
                    ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            Data All Vendor Berhasil DiHapus
                        </div>
                        
                        <meta http-equiv="refresh" content="1; url=all-vendor.php" />
                    <?php
                }
                else{
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Data All Vendor Gagal DiHapus
                        </div>
                    <?php
                }
            }
        ?>

        <h4 class="mb-4"><a href="all-vendor.php" style="color:black"><i class="fa-solid fa-arrow-left me-4"></i></a>Detail All Vendor</h4>
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" autocomplete="off" required>
            </div>
            <div>
                <label for="vendor">Vendor</label>
                <select name="vendor" id="vendor" class="form-control" required>
                    <option value="<?php echo $data['vendor_id']; ?>"><?php echo $data['nama_vendor']; ?></option>
                    <?php
                        while($dataVendor=mysqli_fetch_array($queryVendor)){
                    ?>
                        <option value="<?php echo $dataVendor['id']; ?>"><?php echo $dataVendor['nama']; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="instagram">Link Instagram</label>
                <input type="text" id="instagram" name="instagram" value="<?php echo $data['instagram']; ?>" class="form-control" autocomplete="off" required>
            </div>
            <div>
                <label for="currentFoto">Foto All Vendor Sekarang</label>
                <img src="../assets/img/vendor/all_vendor/<?php echo $data['foto']; ?>" alt="" width="300px">
            </div>
            <div>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <div class="mt-3">
                <button class="btn btn-success me-2" type="submit" name="edit_all"><i class="fa-solid fa-pen"></i>&nbsp;&nbsp;Update</button>
                <button class="btn btn-danger" type="submit" name="hapusBtn"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Hapus</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>