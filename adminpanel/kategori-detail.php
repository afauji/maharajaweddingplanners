<?php
    require "session.php";
    require "../koneksi.php";

    $id = $_GET['p'];
    $query = mysqli_query($con, "SELECT * FROM kategori WHERE id='$id'");
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>
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
    
    <div class="container my-5 col-12 col-md-4">
        <h4><a href="kategori.php" style="color:black"><i class="fa-solid fa-arrow-left me-4"></i></a>Detail Kategori</h4>

        <form action="" method="post">
            <div>
                <label for="kategori"></label>
                <input type="text" id="kategori" name="kategori" class="form-control" value="<?php echo $data['nama']; ?>" autocomplete="off" required>
            </div>
            <div class="mt-3">
                <button class="btn btn-success me-2" type="submit" name="editBtn"><i class="fa-solid fa-pen"></i>&nbsp;&nbsp;Update</button>
                <button class="btn btn-danger" type="submit" name="hapusBtn"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Hapus</button>
            </div>
        </form>

        <?php
            if(isset($_POST['editBtn'])){
                $kategori = htmlspecialchars($_POST['kategori']);

                if($data['nama']==$kategori){
                    ?>
                        <meta http-equiv="refresh" content="1; url=kategori.php" />
                    <?php
                }
                else{
                    $query = mysqli_query($con, "SELECT * FROM kategori WHERE nama='$kategori'");
                    $jumlahData = mysqli_num_rows($query);

                    if($jumlahData > 0){
                        ?>
                            <div class="alert alert-warning mt-3" role="alert">
                            Kategori Sudah Ada
                            </div>
                        <?php
                    }
                    else{
                        $queryEdit = mysqli_query($con, "UPDATE kategori SET nama='$kategori' WHERE id='$id'");

                    if($queryEdit){
                        ?>
                            <div class="alert alert-primary mt-3" role="alert">
                            Data Kategori Berhasil DiUpdate
                            </div>
                        
                            <meta http-equiv="refresh" content="1; url=kategori.php" />
                        <?php
                    }
                    else{
                        ?>
                            <div class="alert alert-warning mt-3" role="alert">
                            Data Kategori Gagal DiUpdate
                            </div>
                        <?php
                    }
                    }
                }
            }

            if(isset($_POST['hapusBtn'])){
                $queryCheck = mysqli_query($con, "SELECT * FROM package WHERE kategori_id='$id'");
                $dataCount = mysqli_num_rows($queryCheck);

                if($dataCount>0){
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Data Kategori Tidak Bisa DiHapus Karena Sudah Digunakan DiPackage
                        </div>
                    <?php
                    die();
                }

                $queryHapus = mysqli_query($con, "DELETE FROM kategori WHERE id='$id'");

                if($queryHapus){
                    ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            Data Kategori Berhasil DiHapus
                        </div>
                        
                        <meta http-equiv="refresh" content="1; url=kategori.php" />
                    <?php
                }
                else{
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Data Kategori Gagal DiHapus
                        </div>
                    <?php
                }
            }
        ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>