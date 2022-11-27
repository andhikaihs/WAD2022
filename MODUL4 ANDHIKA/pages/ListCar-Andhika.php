<?php 
    session_start();
    include ("../config/connector.php");

    $query = "SELECT * FROM showroom_andhika_table";
    $show = mysqli_query($conn, $query);
    $row = mysqli_num_rows($show);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-<?php echo isset($_COOKIE['bg-nav'])? $_COOKIE['bg-nav'] : 'primary';?> fixed-top">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link text-white" href="../index.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link text-white" href="">MyCar</a>
                </li>
            </ul>
            </div>
            <!--
            <div class="d-flex">
                <a href="Add-Andhika.php" class="btn btn-light text-primary">Add Car</a>
            </div> -->
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
                    <a class="nav-link text-white" href="../pages/Login-Andhika.php">Login</a>
                <?php } ?>
            </div>

        </div>
    </nav>

    <div class="container">
        <div class="row pt-5">
            <div class="col-md-12 mt-5">
                <h3><b>My Show Room</b></h3>
                <p>List Show Room Andhika - 1202200168</p>
            </div>
        </div>
        <div class="row mt-3">
        <?php 
            if($row == 0) {?>
            <h3 class='text-center' style='margin-top:150px'>Tidak Ada Mobil</h3>
            <?php }
            else{
                while($data = mysqli_fetch_array($show)) {
            ?>
            <div class="col-md-4 mb-5">
                <div class="card" style="width: 18rem;">
                    <img src="../asset/image/<?php echo($data['foto_mobil'])?>" class="card-img-top"  height="200" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><b><?php echo($data['nama_mobil'])?></b></h5>
                        <p class="card-text"><?php echo(substr($data['deskripsi'], 0, 80))?>...</p>
                        <a href="Detail-Andhika.php?id=<?php echo($data['id_mobil'])?>" class="btn btn-primary rounded-pill px-4">Detail</a>
                        <a href="../config/delete.php?id=<?php echo($data['id_mobil'])?>" class="btn btn-danger rounded-pill px-4">Delete</a>
                    </div>
                </div>
            </div>
            <?php }} ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>