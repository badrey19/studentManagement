<?php 

require "function.php";

if(isset($_POST["submit"])){
    $nisn = $_POST["nisn"];
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $ttd = $_POST["ttd"];
    $agama = $_POST["agama"];
    $kelas = $_POST["kelas"];

    $query = "INSERT INTO siswa VALUES (
        '', '$nisn', '$nama', '$alamat', '$ttd', '$agama', '$kelas'
    )";

    mysqli_query($conn, $query);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>

    <form action="" method="post">
        <ul>
            <li><label for="nisn">Nisn :</label></li>
            <li><input type="text" name="nisn" id="nisn" maxlength="15" ></li>
        </ul>
        <ul>
            <li><label for="nama">Nama :</label></li>
            <li><input type="text" name="nama" id="nama" ></li>
        </ul>
        <ul>
            <li><label for="alamat">Alamat :</label></li>
            <li><input type="text" name="alamat" id="alamat" ></li>
        </ul>
        <ul>
            <li><label for="ttd">Tempat / Tanggal Lahir :</label></li>
            <li><input type="text" name="ttd" id="ttd" ></li>
        </ul>
        <ul>
            <li><label for="agama">Agama :</label></li>
            <li><input type="text" name="agama" id="agama" ></li>
        </ul>
        <ul>
            <li><label for="kelas">Kelas :</label></li>
            <li><input type="text" name="kelas" id="kelas" ></li>
        </ul>
        <ul>
            <li><button type="submit" name="submit">Kirim!</button></li>
        </ul>
    </form>
</body>
</html>