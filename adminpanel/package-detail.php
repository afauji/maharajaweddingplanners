<?php
    require "session.php";
    require "../koneksi.php";

    $id = $_GET['id'];

    $query = mysqli_query($con, "SELECT a.*, b.nama AS nama_kategori FROM package a JOIN kategori b ON a.kategori_id=b.id WHERE a.id='$id'");
    $data = mysqli_fetch_array($query);

    $queryKategori = mysqli_query($con, "SELECT * FROM kategori WHERE id !='$data[kategori_id]'");

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
    <title>Detail Package</title>
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

    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 300px;
    }
</style>

<body>
    <?php require "navbar.php"; ?>
    
    <div class="container my-5 col-12 col-md-4">
        <?php
            if(isset($_POST['edit_package'])){
                $nama = htmlspecialchars($_POST['nama']);
                $kategori = htmlspecialchars($_POST['kategori']);
                $harga = htmlspecialchars($_POST['harga']);
                $rincian = htmlspecialchars($_POST['rincian']);

                $target_dir = "../assets/img/package-wedding/";
                $nama_file = basename($_FILES["foto"]["name"]);
                $target_file = $target_dir . $nama_file;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $image_size = $_FILES["foto"]["size"];
                $random_name = generateRandomString(10);
                $new_name = $random_name . "." . $imageFileType;

                if($nama=='' || $kategori=='' || $harga=='' || $nama_file=='' || $rincian=='' ){
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Nama, Kategori, Harga, Foto dan Rincian Wajib Diisi!
                        </div>
                    <?php
                }else{
                    $queryUpdate = mysqli_query($con, "UPDATE package SET kategori_id='$kategori',nama='$nama', harga='$harga', rincian='$rincian' WHERE id=$id");
                    
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

                                $queryUpdate = mysqli_query($con, "UPDATE package SET foto='$new_name' WHERE id=$id");

                                if($queryUpdate){
                                ?>
                                    <div class="alert alert-primary mt-3" role="alert">
                                        Data Package Berhasil DiUpdate
                                    </div>
                                
                                    <meta http-equiv="refresh" content="1; url=package.php" />
                                <?php
                                }
                                else{
                                ?>
                                    <div class="alert alert-warning mt-3" role="alert">
                                        Data Package Gagal DiUpdate
                                    </div>
                                <?php
                                }
                            }
                        }
                    }
                }
            }

            if(isset($_POST['hapusBtn'])){
                $queryHapus = mysqli_query($con, "DELETE FROM package WHERE id='$id'");

                if($queryHapus){
                    ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            Data Package Berhasil DiHapus
                        </div>
                        
                        <meta http-equiv="refresh" content="1; url=package.php" />
                    <?php
                }
                else{
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Data Package Gagal DiHapus
                        </div>
                    <?php
                }
            }
        ?>

        <h4 class="mb-4"><a href="package.php" style="color:black"><i class="fa-solid fa-arrow-left me-4"></i></a>Detail Package</h4>
        <form action="" method="post" enctype="multipart/form-data">
            <div>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" value="<?php echo $data['nama'] ?>" class="form-control" autocomplete="off" required>
            </div>
            <div>
                <label for="kategori">Kategori</label>
                <select name="kategori" id="kategori" class="form-control" required>
                    <option value="<?php echo $data['kategori_id']; ?>"><?php echo $data['nama_kategori']; ?></option>
                    <?php
                        while($dataKategori=mysqli_fetch_array($queryKategori)){
                    ?>
                        <option value="<?php echo $dataKategori['id']; ?>"><?php echo $dataKategori['nama']; ?></option>
                    <?php
                        }
                    ?>
                </select>
            </div>
            <div>
                <label for="harga">Harga</label>
                <input type="number" id="harga" name="harga" value="<?php echo $data['harga']; ?>" class="form-control" autocomplete="off" required>
            </div>
            <div>
                <label for="currentFoto">Foto Package Sekarang</label><br>
                <img src="../assets/img/package-wedding/<?php echo $data['foto']; ?>" alt="" width="180px">
            </div>
            <div>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <div>
                <label for="rincian">Rincian</label>
                <textarea name="rincian" id="rincian" cols="30" rows="10" class="form-control" required>
                    <?php echo $data['rincian']; ?>
                </textarea>
            </div>
            <div class="mt-3">
                <button class="btn btn-success me-2" type="submit" name="edit_package"><i class="fa-solid fa-pen"></i>&nbsp;&nbsp;Update</button>
                <button class="btn btn-danger" type="submit" name="hapusBtn"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Hapus</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create( document.querySelector( '#rincian' ) )
            .catch( error => {
                console.error( error );
            }
            );
    </script>
</body>
</html>