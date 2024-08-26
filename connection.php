<?php
session_start();
function getConnection() {
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";
    $dbname = "latihan_mysql";

    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error) {
        die("Koneksi Gagal".$conn->connect_error);
    } else {
        return $conn;
    }
}
function getPostData($field) {
    if($_POST[$field] != ""){
        if(strlen($field) == 3) {
            $tempInputAngka = str_replace(',', '.', $_POST[$field]);
            if(is_numeric($tempInputAngka)){
                if(strpos($tempInputAngka,',') || strpos($tempInputAngka,'.')) {
                    $_SESSION['connStatus'] = "Umur dan pengalaman tidak boleh menggunakan koma atau titik";
                    header('Location: index.php');
                } else {
                    if($tempInputAngka == 0 && $field == 'age') {
                        $_SESSION['connStatus'] = "Umur tidak boleh 0";
                        header('Location: index.php');
                    } else {
                        return $tempInputAngka;
                    }

                }
            } else {
                $_SESSION['connStatus'] = "Umur dan pengalaman harus menggunakan angka!";
                header('Location: index.php');
            }
                
        } else {
            if(strlen($_POST[$field]) >= 4 ) {
                return $_POST[$field];
            } else {
                $_SESSION['connStatus'] = "Mohon isi formulir dengan benar, terdapat data yang diisi dengan kurang baik (Form diisi minimal 4 karakter)";
                header('Location: index.php');
            }
        }
    } else {
        $_SESSION['connStatus'] = "Terdapat data yang belum diisi, mohon isi formulir dengan lengkap";
        header('Location: index.php');
    }
}

function saveData($conn, $nama, $role, $avail, $age, $lokasi, $email, $exp) {
    $sql = $conn->prepare("INSERT INTO data_diri (nama, role, avail, age, lokasi, email, exp) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $sql->bind_param("sssissi", $nama, $role, $avail, $age, $lokasi, $email, $exp);

    if($sql->execute()) {
        return $sql;
    } else {
        echo "Err: Querry Failed ". $conn->error ."<br>". $sql;        
    }
}

function getData($conn, $id){
    $sql = "SELECT * FROM data_diri where id = ".$id;
    $result = $conn->query($sql);

    if($result) {
        return $result;
    } else {
        echo "Err: Querry Failed ". $conn->error ."<br>". $sql;        
    }
}

if (isset($_POST["submitData"])) {
    $conn = getConnection();
    $nama = getPostData("nama");
    $role = getPostData("role");
    $avail = getPostData("avail");
    $age = getPostData("age");
    $lokasi = getPostData("lokasi");
    $email = getPostData("email");
    $exp = getPostData("exp");

    if(saveData($conn, $nama, $role, $avail, $age, $lokasi, $email, $exp)){
        $connStatus =  "Koneksi berhasil dan menambahkan data";
    }

} else if(isset($_GET['id'])){
    $conn = getConnection();
    $id = $_GET['id'];
    $result = getData($conn, $id);
    
    if($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $nama = $data["nama"];
        $role = $data["role"];
        $avail = $data["avail"];
        $age = $data["age"];
        $lokasi = $data["lokasi"];
        $email = $data["email"];
        $exp = $data["exp"];
        $connStatus =  "Koneksi berhasil dan menampilkan data";
    } else {
        $result = null;
    }
}
?>