<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>
            .style-img{
                width: 350px;
                height: 250px;
            }
        </style>
    </head>
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-dark">
            <div class="container-fluid">
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="Andhika_home.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="Andhika_booking.php">Booking</a>
                        </li>
                   </ul>
                </div>
            </div>
        </nav>        

        <!-- Home -->
        <section>
            <div class="text-center">
                <h4>WELCOME TO EAD RENT</h4>
                <p>Find your best deal, here!</p>
            </div>
        </section>

        <!-- Jenis Mobil -->
        <section>
            <div class="container my-3">
                <div class="row">
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card" style="width: 23rem;">
                            <img src="img/lexusux300e.png" class="card-img-top style-img" alt="Lexus UX 300e">
                            <div class="card-body">
                                <h5 class="card-title">Lexus UX 300e</h5>
                                <p class="card-text">Rp. 1000000/day</p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item text-primary"><strong>5 Kursi</strong></li>
                                <li class="list-group-item text-primary"><strong>150 KW</strong></li> 
                                <li class="list-group-item text-primary"><strong>Automatic</strong></li>
                            </ul>
                            <div class="card-body text-center bg-light">
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card" style="width: 23rem">
                            <img src="img/hyundaiioniq5.png" class="card-img-top style-img" alt="Hyundai Ioniq 5">
                            <div class="card-body">
                                <h5 class="card-title">Hyundai Ioniq 5</h5>
                                <p class="card-text">Rp. 800000/day</p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item text-primary"><strong>5 Kursi</strong></li>
                                <li class="list-group-item text-primary"><strong>125 KW</strong></li>
                                <li class="list-group-item text-primary"><strong>Automatic</strong></li>
                            </ul>
                            <div class="card-body text-center bg-light">
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="card" style="width: 23rem">
                            <img src="img/wulingairev.png" class="card-img-top style-img" alt="Wuling Air EV">
                            <div class="card-body">
                                <h5 class="card-title">Wuling Air EV</h5>
                                <p class="card-text">Rp. 500000/day</p>
                            </div>
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item text-primary"><strong>4 Kursi</strong></li>
                                <li class="list-group-item text-primary"><strong>30 KW</strong></li>
                                <li class="list-group-item text-primary"><strong>Automatic</strong></li>
                            </ul>
                            <div class="card-body text-center bg-light">
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="text-muted text-center bg-light">
            <div class="text-center p-3" style="color:black">
                Created by Andhika_1202200168
            </div>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>