<?php

require 'prak9.php';

$id = $_GET["id"];

if (prak9_hapus($id) > 0) {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}
