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
                </ul>
                </div>
            </div>
        </nav>
        <div>
            <div class="row">
                <div class="col-md-6">
                    <div class="d-flex justify-content-center align-items-center min-vh-100 ">
                        <img src="../asset/image/2022-Hyundai-Ioniq-5-002.jpg" alt="" style="width:100%; height:100vh">
                    </div>
                </div>
                <div class="col-md-6">
                    <div>
                        <div class="row mt-5">
                            <div class="col-md-12 p-5">
                                <h1><b>Register</b></h1>
                                <form action="../config/register.php" method="POST">
                                    <div class="mb-3 mt-4">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Nomor Handphone</label>
                                        <input type="text" class="form-control" id="exampleFormControlInput1" name="phone">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Kata Sandi</label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1" name="password1">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Konfirmasi Kata Sandi</label>
                                        <input type="password" class="form-control" id="exampleFormControlInput1" name="password2">
                                    </div>
                                    <button class="btn btn-primary mt-3" type="submit">Daftar</button>
                                    <p class="mt-3">Anda sudah punya akun? <a href="../pages/Login-Andhika.php">Login</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        </body>
    </html>
