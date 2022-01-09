<?php
require 'prak9.php';
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "berhasil";
    } else {
        echo "gagal!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Karyawan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="tambah">
        <h1>Tambah Data Karyawan</h1>
        <form action="" method="post">

            <label for="name">NAME : </label>
            <br>
            <input type="text" name="name">
            <br>
            <label for="email">EMAIL : </label>
            <br>
            <input type="text" name="email">
            <br>
            <label for="address">ADDRESS : </label>
            <br>
            <input type="text" name="address">
            <br>
            <label for="gender"> GENDER : </label>
            <br>
            <input type="text" name="gender">
            <br>
            <label for="position">POSITION : </label>
            <br>
            <input type="text" name="position">
            <br>
            <label for="status">STATUS : </label>
            <br>
            <input type="text" name="status">
            <br>
            <button type="submit" name="submit">
                Submit
            </button>
        </form>
    </div>
</body>

</html>