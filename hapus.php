<?php

require 'utama.php';

//mengambil id yg ingin dihapus
$id = $_GET["id"];

//membuat alert menggunakan javascript
if( hapus($id) > 0) {
    //jika id ada pada database maka if ini jalan
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'halaman.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('data berhasil dihapus!');
            document.location.href = 'halaman.php';
        </script>
    ";
}
?>