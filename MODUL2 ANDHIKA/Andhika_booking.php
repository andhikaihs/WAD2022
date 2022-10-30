<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
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

        <!-- Form -->
        <section>
            <?php
            session_start();
            if (isset($_GET['car'])){
                $car=$_GET['car'];
            }
            else{
                $car='lexus';
            }
            ?>
            <div class="container-fluid my-3 px-5">
                <div class="row">
                    <div class="col-md-5">
                        <img src=<?php echo"img/".$car.".png"?> width="500" alt="">
                    </div>
                    <div class="col-md-7">
                        <h4>Rent your car now!</h4>
                        <form action="Andhika_mybooking.php" method="POST">
                            <div class="mt-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" name="name" id="name" readonly value="Andhika_1202200168">
                            </div>
                            <div class="mt-3">
                                <label for="bookdate" class="form-label">Book Date</label>
                                <input type="date" class="form-control" name="bookdate" id="bookdate">
                            </div>
                            <div class="mt-3">
                                <label for="starttime" class="form-label">Start Time</label>
                                <input type="time" class="form-control" name="starttime" id="starttime">
                            </div>
                            <div class="mt-3">
                                <label for="duration" class="form-label">Duration (Days)</label>
                                <input type="number" class="form-control" name="duration" id="duration">
                            </div>
                            <div class="mt-3">
                                <label for="type" class="form-label">Car Type</label>
                                <select class="form-select" aria-label="Car Type" name="type" id="type">
                                    <option <?php if($car=="lexus"){echo "selected";}?> value="lexus">Lexus UX 300e</option>
                                    <option <?php if($car=="hyundai"){echo "selected";}?> value="hyundai">Hyundai Ioniq 5</option>
                                    <option <?php if($car=="wuling"){echo "selected";}?> value="wuling">Wuling Air EV</option>
                                </select>
                            </div>
                            <div class="mt-3">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="number" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="mt-3">
                                <label for="service" class="form-label">Add Service(s)</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="health" name="service[]">
                                    <label for="form-check-label">Health protocol / Rp25.000</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="driver" name="service[]">
                                    <label for="form-check-label">Driver / Rp100.000</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="battrey" name="service[]">
                                    <label for="form-check-label">Battery filled / Rp250.000</label>
                                </div>
                            </div>
                            <div class="d-grid gap-2 mt-3">
                                <button class="btn btn-success" type="submit">Book</button>
                            </div>
                        </form>
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