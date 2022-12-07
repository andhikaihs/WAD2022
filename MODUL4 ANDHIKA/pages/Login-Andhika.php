<?php 
// Create connection
include ("../config/connector.php");

session_start();
include ("../config/login.php");

?>
<!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Showroom Home</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        </head>
        <body>
        <nav class="navbar navbar-expand-lg bg-primary fixed-top">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link text-white" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <?php if($_SESSION != null){ ?>
                        <a class="nav-link text-white" href="./pages/ListCar-Andhika.php">MyCar</a>
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
                                <li><a class="dropdown-item" href="../pages/Profile-Andhika.php">profile</a></li>
                                <li><a class="dropdown-item" href="../config/logout.php">logout</a></li>
                            </ul>
                        </div>
                        <a href="Add-Andhika.php" class="btn btn-light text-primary mx-3">Add Car</a>
                    <?php } else{ ?>
                        <a href="../pages/Login-Andhika.php" class="nav-link text-white mx-4">Login</a>
                    <?php } ?>
                </div>
            </div>
        </nav>
        <div>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center min-vh-100 ">
                        <img src="../asset/image/2022-Hyundai-Ioniq-5-002.jpg" alt="" style="width:98%;">
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="row mt-5">
                            <div class="col-md-11 p-5">
                                <div clas="d-flex justify-content-center align-items-center min-vh-100">
                                    <h3><b>Login</b></h3>
                                    <form method="POST">
                                        <div class="mb-3 mt-5">
                                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
                                            <input type="password" class="form-control" id="exampleFormControlInput1" name="password">
                                        </div>
                                        <div class="form-check mt-2">
                                            <input class="form-check-input" type="checkbox" value="Y" id="rememberMe" name="rememberMe">
                                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                                        </div>
                                        <button class="btn btn-primary mt-4" type="submit" name="login">Masuk</button>
                                        <p class="mt-3">Anda belum punya akun? <a href="../pages/Register-Andhika.php">Daftar</a></p>                                        
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </body>
    </html>
