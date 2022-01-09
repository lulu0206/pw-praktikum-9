<?php
require 'prak9.php';

$karyawan = query("SELECT * FROM karyawan");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="tambah">
        <h1>Daftar Karyawan</h1>
        <br>

        <a href="prak9-tambah.php">Tambah Mahasiswa</a>
        <br>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>
                    No.
                </th>
                <th>Aksi</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Position</th>
                <th>Status</th>
            </tr>

            <?php foreach ($karyawan as $item) : ?>
                <tr>
                    <td><?= $item["id"] ?></td>
                    <td><a href="hapus.php?id=<?= $item["id"]; ?>" onclick="return confirm('yakin?')">Hapus</a></td>
                    <td><?= $item["name"] ?></td>
                    <td><?= $item["email"] ?></td>
                    <td><?= $item["address"] ?></td>
                    <td><?= $item["gender"] ?></td>
                    <td><?= $item["position"] ?></td>
                    <td><?= $item["status"] ?></td>

                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>

</html>