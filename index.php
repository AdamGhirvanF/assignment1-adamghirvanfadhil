<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        session_destroy();

        setcookie('nama', '', time()+300);
        setcookie('role', '', time()+300);
        setcookie('avail', '', time()+300);
        setcookie('age', '', time()+300);
        setcookie('lokasi', '', time()+300);
        setcookie('email', '', time()+300);
        setcookie('exp', '', time()+300);   
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
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
        <!-- <div class="row">
            <div class="col-lg-12 card">
                <div class="row" id="first-row">
                    <div class="col-lg-2 d-flex justify-content-center">
                        <img src="img/Adam Ghirvan Fadhil.png" id="self-photo">
                    </div>
                    <div class="col-lg-5 mt-3" id="responsive-identity">
                        <h1 id="chg-name"><?php echo $nama ? $nama : "-" ?></h1>
                        <h3 id="chg-role"><?php echo $role ? $role : "-" ?></h3>

                        <button class="btn btn-primary mt-3">Kontak</button>
                        <button class="btn btn-success mt-3">Resume</button>
                    </div>
                    <div class="col-lg-5 mt-3" id="full-data">
                        <h3>Full Data</h3>
                        <table>
                            <tr>
                                <td><b>Availability</b></td>
                                <td id="chg-avail">: <?php echo $avail ? $avail : "-" ?></td>
                            </tr>
                            <tr>
                                <td><b>Usia</b></td>
                                <td id="chg-age">: <?php echo $age ? $age . " tahun" : "-" ?></td>
                            </tr>
                            <tr>
                                <td><b>Lokasi</b></td>
                                <td id="chg-lokasi">: <?php echo $lokasi ? $lokasi : "-" ?></td>
                            </tr>
                            <tr>
                                <td><b>Pengalaman</b></td>
                                <td id="chg-exp">: <?php echo $exp ? $exp . " tahun" : "-" ?></td>
                            </tr>
                            <tr>
                                <td><b>Email</b></td>
                                <td id="chg-email">: <?php echo $email ? $email : "-" ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
        <div class="row">
            <div class="card col-lg-12">
                <form action="index-2.php" method="POST">
                    <label class="form-label mt-3">Nama</label>
                    <input type="text" class="form-control mt-3 mb-3" name="nama" id="nama">
                    
                    <label class="form-label">Role</label>
                    <input type="text" class="form-control mt-3 mb-3" name="role" id="role">
        
                    <label class="form-label">Availability</label>
                    <select class="form-control mt-3 mb-3" name="avail" id="avail">
                        <option value="">Pilih Availability</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Internship">Internship</option>
                    </select>

                    <label class="form-label">Age</label>
                    <input type="text" class="form-control mt-3 mb-3" name="age" id="age">
        
                    <label class="form-label">Lokasi</label>
                    <input type="text" class="form-control mt-3 mb-3" name="lokasi" id="lokasi">
        
                    <label class="form-label">Years Experience</label>
                    <input type="text" class="form-control mt-3 mb-3" name="exp" id="exp">
        
                    <label class="form-label">Email</label>
                    <input type="text" class="form-control mt-3 mb-3" name="email" id="email">
        
                    <button type="submit" class="btn btn-success btn-block mb-3" id="tombol" name="sub-session">Submit Session</button>
                    <button type="submit" class="btn btn-success btn-block mb-3" id="tombol" name="sub-cookies">Submit Cookies</button>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- <script>
    $(document).ready(function(){
        $('#tombol').click(function(e){
            e.preventDefault();

            var nama = $('#nama').val();
            var role = $('#role').val();
            var avail = $('#avail').val();
            var age = $('#age').val();
            var lokasi = $('#lokasi').val();
            var exp = $('#exp').val();
            var email = $('#email').val();
            
            if(nama == "" || role == "" || avail == "" || lokasi == "" || age == "" || exp == "" || email == ""){
                Swal.fire({
                    title: 'Error!',
                    text: 'Formulir belum lengkap',
                    icon: 'error',
                    confirmButtonText: 'Lengkapkan Formulir'
                })  
            } else {
                $("#chg-name").html(nama);
                $("#chg-role").html(role);
                $("#chg-avail").html(avail);
                $("#chg-age").html(age);
                $("#chg-lokasi").html(lokasi);
                $("#chg-exp").html(exp);
                $("#chg-email").html(email);
            }
        });
    });

</script> -->
</html>