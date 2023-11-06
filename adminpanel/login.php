<?php
    session_start();
    require "../koneksi.php";

    $background = "../assets/img/primary-img.jpg";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style>
    .main{
        height: 100vh;
        background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
        url('<?php echo $background; ?>');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: bottom;
        width: 100%;
    }

    .form-container {
    width: 320px;
    border-radius: 0.75rem;
    background-color: rgba(17, 24, 39, 1);
    padding: 2rem;
    color: rgba(243, 244, 246, 1);
    }

    .title {
    text-align: center;
    font-size: 1.5rem;
    line-height: 2rem;
    font-weight: 700;
    }

    .form {
    margin-top: 1.5rem;
    }

    .input-group {
    margin-top: 0.25rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    }

    .input-group label {
    display: block;
    color: rgba(156, 163, 175, 1);
    margin-bottom: 4px;
    }

    .input-group input {
    width: 100%;
    border-radius: 0.375rem;
    border: 1px solid rgba(55, 65, 81, 1);
    outline: 0;
    background-color: rgba(17, 24, 39, 1);
    padding: 0.75rem 1rem;
    color: rgba(243, 244, 246, 1);
    }

    .input-group input:focus {
    border-color: #0B5ED7;
    }

    .login {
    display: block;
    width: 100%;
    padding: 0.75rem;
    text-align: center;
    color: white;
    border: none;
    border-radius: 0.375rem;
    font-weight: 600;
    }
</style>

<body>
    <div class="main d-flex flex-column justify-content-center align-items-center">
        <div class="form-container">
            <a href="../index.php" style="color: white; font-size:large;"><i class="fa-solid fa-arrow-left me-4"></i></a>
            <p class="title">Login Admin</p>
            <form class="form" action="" method="post">
                <div class="input-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" placeholder="" autocomplete="off" required>
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="" autocomplete="off" required>
                </div>
                <div>
                    <button type="submit" class="btn btn-primary mt-3 login" name="loginbtn">Login</button>
                </div>
            </form>
        </div>

        <div class="mt-3" style="width:320px">
            <?php
                if(isset($_POST['loginbtn'])){
                    $username = htmlspecialchars($_POST['username']);
                    $password = htmlspecialchars($_POST['password']);

                    $query = mysqli_query($con, "SELECT * FROM admin WHERE username='$username'");
                    $countdata = mysqli_num_rows($query);
                    $data = mysqli_fetch_array($query);

                    if($countdata>0){
                        if(password_verify($password, $data['password'])){
                            $_SESSION['username'] = $data['username'];
                            $_SESSION['login'] = true;
                            header('location: ../adminpanel');
                        }
                        else{
                            ?>
                            <div class="alert alert-warning" role="alert">
                            Password yang Anda masukkan salah!
                            </div>
                            <?php
                        }
                    }
                    else{
                        ?>
                        <div class="alert alert-warning" role="alert">
                        Akun tidak tersedia
                        </div>
                        <?php
                    }
                }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>