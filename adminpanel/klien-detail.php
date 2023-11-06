<?php
    require "session.php";
    require "../koneksi.php";

    $id = $_GET['p'];
    $query = mysqli_query($con, "SELECT * FROM klien WHERE id='$id'");
    $data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klien</title>

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
            if(isset($_POST['edit_klien'])){
                $nama = htmlspecialchars($_POST['nama']);
                $tanggal = htmlspecialchars($_POST['tanggal']);
                $lokasi = htmlspecialchars($_POST['lokasi']);

                if($nama=='' || $tanggal=='' || $lokasi==''){
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Nama, Tanggal, dan Lokasi Wajib Diisi!
                        </div>
                    <?php
                }else{
                    $queryUpdate = mysqli_query($con, "UPDATE klien SET nama='$nama', tanggal='$tanggal', lokasi='$lokasi' WHERE id=$id");
                }

                if($queryUpdate){
                        ?>
                            <div class="alert alert-primary mt-3" role="alert">
                            Data Klien Berhasil DiUpdate
                            </div>
                        
                            <meta http-equiv="refresh" content="1; url=klien.php" />
                        <?php
                    }
                    else{
                        ?>
                            <div class="alert alert-warning mt-3" role="alert">
                            Data Klien Gagal DiUpdate
                            </div>
                        <?php
                    }
            }

            if(isset($_POST['hapusBtn'])){
                $queryHapus = mysqli_query($con, "DELETE FROM klien WHERE id='$id'");

                if($queryHapus){
                    ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            Data Klien Berhasil DiHapus
                        </div>
                        
                        <meta http-equiv="refresh" content="1; url=klien.php" />
                    <?php
                }
                else{
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Data Klien Gagal DiHapus
                        </div>
                    <?php
                }
            }
        ?>

        <h4><a href="klien.php" style="color:black"><i class="fa-solid fa-arrow-left me-4"></i></a>Detail Klien</h4>

        <form action="" method="post">
            <div>
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" autocomplete="off" required>
            </div>
            <div>
                <label for="tanggal">Tanggal</label>
                <input type="date" id="tanggal" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>" autocomplete="off" required>
            </div>
            <div>
                <label for="lokasi">Lokasi</label>
                <input type="text" id="lokasi" name="lokasi" class="form-control" value="<?php echo $data['lokasi']; ?>" autocomplete="off" required>
            </div>
            <div class="mt-3">
                <button class="btn btn-success me-2" type="submit" name="edit_klien"><i class="fa-solid fa-pen"></i>&nbsp;&nbsp;Update</button>
                <button class="btn btn-danger" type="submit" name="hapusBtn"><i class="fa-solid fa-trash"></i>&nbsp;&nbsp;Hapus</button>
            </div>
        </form>
    </div>
</body>
</html>