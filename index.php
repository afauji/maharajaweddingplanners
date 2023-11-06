<?php
    require "koneksi.php";

    $queryPackage = mysqli_query($con, "SELECT id, nama, harga, foto FROM package ORDER BY harga DESC");
    $queryVendor = mysqli_query($con, "SELECT id, nama, foto FROM vendor ORDER BY id");
    $queryTesti = mysqli_query($con, "SELECT * FROM testi ORDER BY id DESC");

    $maharaja = "../assets/icon/maharaja.png";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maharaja Wedding Planner</title>

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

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Style CSS -->
    <link rel="stylesheet" href="dist/css/style.css">

    <!-- Rateyo Plugin Rating -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">

    <!-- Carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

</head>

<style>
    form div{
        margin-bottom: 0.75rem;
    }

    .card {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background-color: rgba(17, 24, 39, 1);
    /* color :rgba(255, 255, 255, 1); */
    padding: 20px;
    max-width: 250px;
    height: 400px;
    border-radius: 20px;
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
    /* color: rgba(107, 114, 128, 1); */
    color: white;
    }

    .author {
    margin-top: 1.3rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    /* color: rgba(107, 114, 128, 1); */
    color: white;
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
    <?php require "navbar.php"; ?>
    
    <!-- Header -->
    <div class="header d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="fw-semibold" data-aos="fade-up">Maharaja Wedding Planner</h1>
                    <p class="text-white-50" data-aos="fade-up" data-aos-delay="300">Every Love Story is Beautiful, But Yours Should be Unique</p>
                    <a href="#contacts" class="btn btn-primary btn-lg rounded-5 me-2" data-aos="fade-up" data-aos-delay="400">Contact Us</a>
                    <a href="#abouts" class="btn btn-outline-light btn-lg rounded-5 me-2" data-aos="fade-up" data-aos-delay="400">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->

    <!-- Package -->
    <div class="package-wedding" id="package">
        <div class="container">
            <div class="package-wedding-box">
                <div class="box">
                    <h1 data-aos="fade-up">Package WO</h1>
                    <p class="border-bottom" data-aos="fade-up" data-aos-delay="300">Mau tau pilihan paket terbaik? Gampang, tinggal lihat paket ini.</p>
                </div>

                <div class="box" data-aos="fade-up" data-aos-delay="400">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            <?php while($data = mysqli_fetch_array($queryPackage)){?>
                            <div class="swiper-slide">
                                <a href="page/detail-package.php?nama=<?php echo $data['nama'] ?>"><img src="assets/img/package-wedding/<?php echo $data['foto'] ?>" alt="" /></a>
                                <div class="price">
                                    <h3><?php echo $data['nama'] ?></h3>
                                    <p><i class="fa-solid fa-tag"></i> Rp. <?php echo number_format($data['harga'],0,',','.'); ?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
                        
            </div>
        </div>
    </div>
    <!-- Package -->

    <!-- Vendor -->
    <div class="vendor" id="vendors">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="fw-bold" data-aos="fade-up">Our Vendor</h1>
                    <p class="border-bottom" data-aos="fade-up" data-aos-delay="300">Vendor yang bikin puas kinerjanya sesuai keinginanmu? kami sediakan yang terbaik.</p>
                </div>

                <div class="row row-cols-xl-5 row-cols-lg-4 row-cols-md-3 row-cols-1 g-2 text-center justify-content-center">
                    <?php while($data = mysqli_fetch_array($queryVendor)){?>
                    <div class="col" data-aos="fade-up" data-aos-delay="500">
                        <div class="nama-vendor">
                            <img src="assets/img/vendor/<?php echo $data['foto'] ?>" alt="" />
                            <div class="detail-vendor">
                                <h5><?php echo $data['nama'] ?></h5>
                                <a href="page/detail-vendor.php?vendor=<?php echo $data['nama'] ?>" class="btn btn-primary btn-sm">Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>
    <!-- Vendor -->
    
    <!-- Office -->
    <div class="office" id="office-maharaja">
        <div class="container">
            <div class="row">
            <div class="col pb-4">
                <h1 class="fw-bold" data-aos="fade-up">Maharaja Office</h1>
                <p class="border-bottom" data-aos="fade-up" data-aos-delay="300">Kami memiliki kantor loh, nyaman dan tenang bisa kalian kunjungi.</p>
            </div>
            <div class="row justify-content-center text-center pb-5" data-aos="fade-up" data-aos-delay="400">
                <div class="col">
                <img src="assets/img/office/office-mwp.jpg" alt="">
                </div>
            </div>
            <div class="row align-items-center" data-aos="fade-up" data-aos-delay="500">
                <div class="col justify-content-between align-content-between">
                <h5 class="fw-bold">Office Maharaja Wedding Planner (Impose Studio) </h5>
                <br/>
                <p>Cluster Grahayana Blok D6/No.3, Telukjambe Timur, Kabupaten Karawang, Jawa Barat, 41361</p>
                <br/>
                <p><i class="fa-solid fa-phone"></i> &nbsp; <a href="https://api.whatsapp.com/send?phone=6285722837969" target="_blank" style="color: black;">0857-2283-7969</a> (Maharaja) atau <br/> <i class="fa-solid fa-phone"></i> &nbsp; <a href="https://api.whatsapp.com/send?phone=6281210873400" target="_blank" style="color: black;">0812-1087-3400</a> &nbsp; (Impose Studio)</p>
                <br/><br/>
                <p><a href="https://goo.gl/maps/jf7vAFwu1k71LjAF8" target="_blank">https://goo.gl/maps/jf7vAFwu1k71LjAF8</a></p>
                </div>
                <div class="col pb-3">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.4823197431933!2d107.29214607404467!3d-6.331500861949468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69778283bfa1bf%3A0xbba8f87a7fb05d52!2sIMPOSE%20STUDIO!5e0!3m2!1sen!2sid!4v1685557123456!5m2!1sen!2sid" class="rounded-2" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Office -->

    <!-- Testimonial -->
    <div class="testimonial" id="testi">
        <div class="container">
            <div class="row">
                <div class="col pb-4">
                    <h1 class="fw-bold" data-aos="fade-up">Testimonial</h1>
                    <p class="border-bottom" data-aos="fade-up" data-aos-delay="300">Klien sangat puas, kamipun bahagia. Apa yang Klien katakan ? </p>
                </div>
                <div class="row">
                    <!-- Button trigger modal Tambah Testimonial-->
                    <div class="row mb-3">
                        <div class="col d-grid gap-2 d-md-block">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-plus"></i>&nbsp;&nbsp;Tambah Testimonial
                            </button>
                            <a href="page/detail-klien.php" class="btn btn-secondary" role="button">Lihat Data Klien</a>
                        </div>
                    </div>

                    <?php
                        if(isset($_POST['simpan_testi'])){
                            $nama = htmlspecialchars($_POST['nama']);
                            $rating = htmlspecialchars($_POST['rating']);
                            $komentar = htmlspecialchars($_POST['komentar']);
                            
                            if($nama=='' || $rating=='' || $komentar==''){
                                ?>
                                    <div class="alert alert-warning mt-3 col-12 col-md-4" role="alert">
                                        Nama, Rating, Komentar Wajib Diisi!
                                    </div>

                                    <meta http-equiv="refresh" content="1; url=index.php#testi" />
                                <?php
                            }

                                $queryTambah = mysqli_query($con, "INSERT INTO testi (nama, rating, komentar) VALUES ('$nama','$rating','$komentar')");

                                if($queryTambah){
                                    ?>
                                        <script>
                                            alert("Data Testimonial Berhasil DiSimpan")
                                        </script>

                                        <meta http-equiv="refresh" content="1; url=index.php#testi" />
                                    <?php
                                }
                                else{
                                    ?>
                                        <script>
                                            alert("Data Testimonial Gagal DiSimpan")
                                            // window.location.href='index.php#testi';
                                        </script>

                                        <meta http-equiv="refresh" content="1; url=index.php#testi" />
                                    <?php
                                }
                        }
                    ?>

                    <!-- Modal Tambah Testimonial -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Testimonial</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="" method="post">
                                        <div>
                                            <label for="nama">Nama</label>
                                            <input type="text" id="nama" name="nama" placeholder="" class="form-control" autocomplete="off" required>
                                        </div>
                                        <div>
                                            <label for="rating">Rating</label>
                                            <div id="rateYo"></div>
                                            <input type="hidden" name="rating" id="rating">
                                        </div>
                                        <div>
                                            <label for="komentar">Komentar</label>
                                            <textarea name="komentar" id="komentar" cols="30" rows="10" class="form-control" required></textarea>
                                        </div>
                                        <div class="mt-3">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button class="btn btn-primary" type="submit" name="simpan_testi"><i class="fa-solid fa-floppy-disk"></i>&nbsp;&nbsp;Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
        </div>

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
    </div>
    <!-- Testimonial -->

    <!-- About Us -->
    <div class="about" id="abouts">
        <div class="container">
            <div class="row">
                <div class="col pb-4">
                    <h1 class="fw-bold" data-aos="fade-up">About Us</h1>
                    <p class="border-bottom" data-aos="fade-up" data-aos-delay="300">Mau tau siapa Maharaja? Boleh disimak ya.</p>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-delay="400">
                <div class="col pb-4">
                    <div class="team">
                        <img src="assets/img/about/about.jpg" alt="" srcset="">
                        <div class="detail-team">
                            <a href="page/detail-team.php" class="btn btn-primary btn-sm rounded-4">Lihat Detail Team</a>
                        </div>
                    </div>
                </div>
                <div class="col pb-5">
                    <h5 class="fw-bold">Maharaja Wedding Planner</h5>
                    <br/>
                    <p>Dibentuknya Maharaja Wedding Planner sejak tahun 2019 telah menyelenggarakan ratusan acara pernikahan di Karawang dan kota sekitarnya.<br/><br/>Kami adalah sekumpulan anak muda yang sangat berbakat di bidang event terutama acara pernikahan.<br/><br/>Kami hadir untuk membantu para calon pengantin merealisasikan pernikahan impiannya. Mulai dari tahap perencanaan acara, perencanaan keuangan,hingga pelaksanaan hari pernikahan. <br/><br/> Kami hadir menjaga alur komunikasi setiap vendor dengan calon pengantin menjadi lebih efektif dan efisien.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About Us -->

    <!-- Kenapa MWP -->
    <div class="why-mwp">
        <div class="container">
            <div class="row">
            <div class="col">
                <h2 class="text-center" data-aos="fade-up">Mengapa <b style="color: #d09112;">Maharaja?</b></h2>
            </div>
            <div class="row row-cols-xl-4 row-cols-lg-3 row-cols-md-2 row-cols-1 g-2 justify-content-center text-center gap-3" data-aos="fade-up" data-aos-delay="400">
                <div class="card">
                    <h2 class="icon"><i class="fa-solid fa-circle-check" style="color: #fbbe44;"></i></h2>
                    <p class="text text-white">Terpercaya</p>
                    <p class="isi text-white">Berdiri sejak tahun 2019, Merek legal dan terdaftar di Direktorat Jenderal Kekayaan Intelektual Kemenkumham Republik Indonesia</p>
                </div>
                <div class="card">
                    <h2 class="icon"><i class="fa-solid fa-handshake-simple" style="color: #fbbe44;"></i></h2>
                    <p class="text text-white">Vendor Terbaik</p>
                    <p class="isi text-white">Pilihan vendor terbaik yang kami sediakan mulai dari MUA, Documentation, Decoration, MC dan lainnya</p>
                </div>
                <div class="card">
                    <h2 class="icon"><i class="fa-solid fa-people-group" style="color: #fbbe44;"></i></h2>
                    <p class="text text-white">Tim Profesional</p>
                    <p class="isi text-white">Melayani klien dengan hati, tim kami telah menghadle ratusan acara pernikahan di Karawang dan Kota sekitarnya</p>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Kenapa MWP -->

    <!-- Contact Us -->
    <div class="contact" id="contacts">
        <div class="container">
            <div class="row text-center justify-content-center">
            <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                <h1 class="fw-bolder"> Kamu membutuhkan jasa pernikahan?<br/>Hubungi kami.</h1><br/>
                <a href="https://api.whatsapp.com/send?phone=6285722837969" class="btn btn-success btn-lg fa-brands fa-whatsapp rounded-4" target="_blank"><span>&nbsp;&nbsp;Whatsapp</span></a>
                <div class="nama-detail" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                <br/>
                <br/>
                <h5>Sosial Media Kami.</h5>
                <ul>
                    <li>
                    <a href="https://www.instagram.com/maharajaweddingplanner/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li>
                    <a href="https://www.tiktok.com/@maharajaweddingplanner" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                    </li>
                    <li>
                    <a href="https://www.facebook.com/maharajaweddingplanner" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                    </li>
                </ul>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Contact Us -->

    <?php require "footer.php"; ?>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <!-- JS -->
    <script src="dist/js/script.js"></script>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
            el: ".swiper-pagination",
            clickable: true,
            type: "fraction",
            },
            breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 60,
            },
            992: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1280: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            },
        });
    </script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>

    <!-- Rayeto -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.js"></script>

    <script>
        $(function () {
        
        $("#rateYo").rateYo({
            rating: 0,
            fullStar: true
        });
        });

        $(function () {

        $("#rateYo").rateYo()
                    .on("rateyo.change", function (e, data) {
                        var rating = data.rating;
                        $(this).parent().find('input[name=rating]').val(rating);
                    });
        });
    </script>

    <!-- Carousel -->
    <!-- <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
    
    <script>
    $(document).ready(function(){
        $("#testimonial-slider").owlCarousel({
            items:4,
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