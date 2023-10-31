<?php
require "function.php";



$students = query("SELECT * FROM siswa");



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Administrasi Sekolah</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <br><a href="tambah.php">Tambah data</a> <br> <br>

    <table border="1" cellpadding="10" cellspacing="0" >
        <tr>
            <th>No.</th>
            <th>Nisn</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat/Tgl Lahir</th>
            <th>Agama</th>
            <th>Kelas</th>
        </tr>
        <?php foreach($students as $student) : ?>
        <tr>
            <td><?= $student["id"]; ?></td>
            <td><?= $student["nisn"] ?></td>
            <td><?= $student["nama"] ?></td>
            <td><?= $student["alamat"] ?></td>
            <td><?= $student["ttd"] ?></td>
            <td><?= $student["agama"]?></td>
            <td><?= $student["kelas"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>