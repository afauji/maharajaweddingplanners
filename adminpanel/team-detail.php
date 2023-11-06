<?php
    require "session.php";
    require "../koneksi.php";

    $id = $_GET['id'];

    $query = mysqli_query($con, "SELECT * FROM team WHERE id='$id'");
    $data = mysqli_fetch_array($query);

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
    <title>Team</title>

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
            if(isset($_POST['edit_team'])){
                $nama = htmlspecialchars($_POST['nama']);

                $target_dir = "../assets/img/team/";
                $nama_file = basename($_FILES["foto"]["name"]);
                $target_file = $target_dir . $nama_file;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $image_size = $_FILES["foto"]["size"];
                $random_name = generateRandomString(10);
                $new_name = $random_name . "." . $imageFileType;

                if($nama=='' || $nama_file=='' ){
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Nama,dan Foto Wajib Diisi!
                        </div>
                    <?php
                }
                else{
                    $queryUpdate = mysqli_query($con, "UPDATE team SET nama='$nama' WHERE id=$id");

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
                            }else{
                                move_uploaded_file($_FILES["foto"]["tmp_name"], $target_dir . $new_name);

                                $queryUpdate = mysqli_query($con, "UPDATE team SET foto='$new_name' WHERE id=$id");

                                if($queryUpdate){
                                ?>
                                    <div class="alert alert-primary mt-3" role="alert">
                                        Data Team Berhasil DiUpdate
                                    </div>
                                
                                    <meta http-equiv="refresh" content="1; url=team.php" />
                                <?php
                                }
                                else{
                                ?>
                                    <div class="alert alert-warning mt-3" role="alert">
                                        Data Team Gagal DiUpdate
                                    </div>
                                <?php
                                }
                            }
                        }
                    }
                }
            }

            if(isset($_POST['hapusBtn'])){
                $queryHapus = mysqli_query($con, "DELETE FROM team WHERE id='$id'");

                if($queryHapus){
                    ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            Data Team Berhasil DiHapus
                        </div>
                        
                        <meta http-equiv="refresh" content="1; url=team.php" />
                    <?php
                }
                else{
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Data Team Gagal DiHapus
                        </div>
                    <?php
                }
            }
        ?>

        <h4 class="mb-4"><a href="team.php" style="color:black"><i class="fa-solid fa-arrow-left me-4"></i></a>Detail Team</h4>
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data['nama'] ?>" autocomplete="off" required>
            </div>
            <div>
                <label for="currentFoto">Foto Team Sekarang</label><br>
                <img src="../assets/img/team/<?php echo $data['foto']; ?>" alt="" width="180px">
            </div>
            <div>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <div class="mt-3">
                <button class="btn btn-success me-2" type="submit" name="edit_team"><i class="fa-solid fa-pen"></i>&nbsp;&nbsp;Update</button>
                <button class="btn btn-danger" type="submit" name="hapusBtn"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Hapus</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>