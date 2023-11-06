<?php
    require "koneksi.php";

    $queryTesti = mysqli_query($con, "SELECT * FROM testi WHERE id ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel</title>
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

    <!-- Style CSS -->
    <link rel="stylesheet" href="dist/css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
</head>

<style>
    .card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgba(255, 255, 255, 1);
    padding: 20px;
    max-width: 320px;
    height: 200px;
    }

    .stars {
    display: flex;
    grid-gap: 0.125rem;
    gap: 0.125rem;
    color: rgb(238, 203, 8);
    }

    .star {
    height: 1.25rem;
    width: 1.25rem;
    }

    .infos {
    margin-top: 1rem;
    }

    .description {
    margin-top: 0.4rem;
    line-height: 1.625;
    color: rgba(107, 114, 128, 1);
    }

    .author {
    margin-top: 1.3rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    color: rgba(107, 114, 128, 1);
    }

    /* Carousel Plugin */
    .owl-theme .owl-controls{
        margin-top: 30px;
    }
    .owl-theme .owl-controls .owl-buttons div{
        opacity: 0.8;
        background: #fff;
    }
    .owl-prev:before,
    .owl-next:before{
        content: "\f053";
        font-family: "Font Awesome 5 Free"; font-weight: 900;
        font-size: 20px;
        color: #1f487e;
    }
    .owl-next:before{ content: "\f054"; }
    /* Carousel Plugin */
</style>

<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div id="testimonial-slider" class="owl-carousel">
                    <?php while($data = mysqli_fetch_array($queryTesti)){?>
                        <div class="card">
                            <div class="stars">
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
                            </div>

                            <div class="infos">
                                <p class="description">
                                    <?php echo $data['komentar'] ?>
                                </p>
                            </div>

                            <div class="author">
                                ~<?php echo $data['nama'] ?>~
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    
    <script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:3,
            itemsDesktop:[1000,2],
            itemsDesktopSmall:[979,2],
            itemsTablet:[768,1],
            pagination:false,
            navigation:true,
            navigationText:["",""],
            autoPlay:true
        });
    });
    </script>
</body>
</html>