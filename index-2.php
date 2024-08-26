<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("connection.php");
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light" id="navbar">
        <img src="img/images.png" height="30px" id="logo-bri">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Inventory</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
    <?php if(isset($connStatus)){ ?>
    <div class="alert alert-info" role="alert">
        <?php echo $connStatus; ?>
    </div>
    <?php } ?>
        <div class="row">
            <div class="col-lg-12 card">
                <div class="row" id="first-row">
                    <div class="col-lg-2 d-flex justify-content-center">
                        <img src="img/Adam Ghirvan Fadhil.png" id="self-photo">
                    </div>
                    <div class="col-lg-5 mt-3" id="responsive-identity">
                        <h1 id="chg-name"><?php echo $nama ? $nama : "Data Kosong" ?></h1>
                        <h3 id="chg-role"><?php echo $role ? $role : "Data Kosong" ?></h3>

                        <button class="btn btn-primary mt-3">Kontak</button>
                        <button class="btn btn-success mt-3">Resume</button>
                    </div>
                    <div class="col-lg-5 mt-3" id="full-data">
                        <h3>Full Data</h3>
                        <table>
                            <?php 
                                $listLabel = ["Availability", "Usia", "Lokasi", "Pengalaman", "Email"];
                                $infoFields = [$avail, $age, $lokasi, $exp, $email];

                                foreach($listLabel as $index => $label) {
                                    echo "<tr><td><b>".$label."</b></td>";
                                    if($infoFields[$index] != []) {
                                        echo "<td>: ". $infoFields[$index] ."</td></tr>";
                                    } else {
                                        echo "<td>: Data Kosong</td></tr>";
                                    }
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</html>