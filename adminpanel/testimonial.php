<?php
    require "session.php";
    require "../koneksi.php";

    $queryTesti = mysqli_query($con, "SELECT * FROM testi WHERE id ORDER BY rating DESC");
    $jumlahTesti = mysqli_num_rows($queryTesti);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial</title>

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

    <div class="container mt-3 mb-4">
        <?php
            if(isset($_GET['testi'])){
                $queryHapus = mysqli_query($con, "DELETE FROM testi WHERE id='$_GET[testi]'");

                if($queryHapus){
                    ?>
                        <div class="alert alert-primary mt-3" role="alert">
                            Data Testimonial Berhasil DiHapus
                        </div>
                        
                        <meta http-equiv="refresh" content="1; url=testimonial.php" />
                    <?php
                }
                else{
                    ?>
                        <div class="alert alert-warning mt-3" role="alert">
                            Data Testimonial Gagal DiHapus
                        </div>
                    <?php
                }
            }
        ?>

        <h4>List Data Testimonial</h4>

        <div class="table-responsive mt-4">
            <table class="table table-hover table-bordered">
                <thead class="table-dark text-center">
                    <tr>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Komentar</th>
                    <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if($jumlahTesti==0){
                    ?>
                        <tr>
                            <td colspan="5" class="text-center">Tidak Ada Data Testimonial</td>
                        </tr>
                    <?php
                        }
                        else{
                            $jumlah = 1;
                            while($data=mysqli_fetch_array($queryTesti)){
                    ?> 
                            <tr class="text-center align-middle">
                                <td><?php echo $jumlah; ?></td>
                                <td><?php echo $data['nama']; ?></td>
                                <td>
                                    <?php
                                        $rating=1;
                                        while ($rating <= 5 ){
                                            if($data['rating'] < $rating){
                                                ?>
                                                    <i class="fa-regular fa-star" style="color: #ffd500;"></i>
                                                <?php
                                            }
                                            else{
                                                ?>
                                                    <i class="fa-solid fa-star" style="color: #ffd500;"></i>
                                                <?php
                                            }
                                            $rating++;
                                        }
                                    ?>
                                </td>
                                <td><?php echo $data['komentar']; ?></td>
                                <td>
                                    <a href="?testi=<?php echo $data['id']; ?>" class="btn btn-danger text-white" type=""><i class="fa-solid fa-trash"></i></a>
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