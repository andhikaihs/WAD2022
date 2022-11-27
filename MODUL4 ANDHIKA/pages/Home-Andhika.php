<?php
    session_start();
    require './config/connector.php';

    $query = "SELECT * FROM showroom_andhika_table";
    $hasil = mysqli_query($conn, $query);

?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg bg-<?php echo isset($_COOKIE['bg-nav'])? $_COOKIE['bg-nav'] : 'primary';?> fixed-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link text-white" href="">Home</a>
                    </li>
                    <li class="nav-item">
                    <?php if($_SESSION != null){ ?>
                        <a class="nav-link text-white" href="<?php if (mysqli_num_rows($hasil) > 0) {
                                                            echo "./pages/ListCar-Andhika.php";
                                                            } else {
                                                            echo "./pages/Add-Andhika.php";
                                                            } ?>">MyCar</a>
                    <?php } ?>
                    </li>
                </ul>
            </div>
            <div class="d-flex">
                <?php if($_SESSION != null){ ?>
                    <div class="dropdown">
                        <button class="btn btn-light text-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['nama'] ?>
                        </button>
                        <ul class="dropdown-menu">  
                            <li><a class="dropdown-item" href="./pages/Profile-Andhika.php">profile</a></li>
                            <li><a class="dropdown-item" href="./config/logout.php">logout</a></li>
                        </ul>
                    </div>
                    <a href="Add-Andhika.php" class="btn btn-light text-primary mx-3">Add Car</a>
                <?php } else{ ?>
                    <a class="nav-link text-white" href="../MODUL4 ANDHIKA/pages/Login-Andhika.php">Login</a>
                <?php } ?>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-center align-items-center min-vh-100 ">
                    <div class="row">
                        <div class="col-md-12">
                            <h1><b>Selamat Datang di Showroom Andhika</b></h1>
                        </div>
                        <div class="col-md-12">
                            <p>ini adalah website jasa penyewaan mobil yang menyediakan berbagai mobil.</p>
                        </div>
                        <div class="col-md-12 my-3">
                            <?php if($_SESSION != null){ ?>
                                <a href="<?php if (mysqli_num_rows($hasil) > 0) {
                                        echo "./pages/ListCar-Andhika.php";
                                        } else {
                                        echo "./pages/Add-Andhika.php";
                                        } ?>" class="btn btn-primary">My Car</a>
                            <?php } ?>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-3">
                                <img src="./asset/image/logo-ead.png" alt="" style="width: 100px;">
                            </div>
                            <div class="col-md-3">
                                <p>Andhika_1202200168</p>
                            </div class="col-md-6">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-center align-items-center min-vh-100 ">
                    <div class="row">
                        <div class="col-md-12">
                            <img src="./asset/image/pajero.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>
