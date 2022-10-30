<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Booking</title>
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

        <!-- Header -->
        <div class="text-center">
            <h3 class="mt-2">Thank You Andhika_1202200168 for Reserving</h3>
            <h5 class="my-3">Please double check your reservation details</h5>
        </div>

        <!-- Table -->
        <section>
            <div class="container-fluid">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Booking Number</th>
                            <th>Name</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Car Type</th>
                            <th>Phone Number</th>
                            <th>Service(s)</th>
                            <th>Total Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo rand(1000000000,9999999999)?></th>
                            <td><?php echo $_POST['name']?></td>
                            <td><?php echo $_POST['bookdate']." ".$_POST['starttime'] ?></td>
                            <td><?php echo date('Y-m-d', strtotime($_POST['bookdate'].'+'.$_POST['duration'].'days'." ".$_POST['starttime'] ))  ?></td>
                            <td><?php echo $_POST['type'] ?></td>
                            <td><?php echo $_POST['phone'] ?></td>
                            <td>
                                <?php
                                $totalservice = 0;
                                if(isset($_POST['service'])==null){
                                    echo "No service";                                
                                }elseif($_POST['service']){
                                    foreach($_POST['service'] as $service){
                                        echo "<ul><li>".$service.'</li></ul>';
                                        if($service=='Health Protocol'){
                                            $totalservice+=25000;
                                        }
                                        if($service=='Driver'){
                                            $totalservice+=100000;
                                        }
                                        if($service=='Battery Filled'){
                                            $totalservice+=250000;
                                        }
                                    }
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if($_POST['type'] == 'Lexus UX 300e'){
                                    echo "Rp. ".$price=1000000*(int)$_POST['duration'] +$totalservice;
                                }
                                elseif($_POST['type'] == 'Hyundai Ioniq 5'){
                                    echo "Rp. ".$price=800000*(int)$_POST['duration'] +$totalservice;
                                }
                                elseif($_POST['type'] == 'Wuling Air EV'){
                                    echo "Rp. ".$price=500000*(int)$_POST['duration'] +$totalservice;
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <!-- Footer -->
        <footer class="text-muted text-center bg-light fixed-bottom">
            <div class="text-center p-3" style="color:black">
                Created by Andhika_1202200168
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    </body>
</html>