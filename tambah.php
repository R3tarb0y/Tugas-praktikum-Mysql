<?php
    require 'utama.php';

    if(isset($_POST["submit"])) {
        if( isset($_POST["submit"])){
            //jika sudah ditekan dijalankan function tambah
            if(tambah($_POST) > 0) {
                echo "
                    <script>
                        alert('data berhasil ditambahkan!');
                        document.location.href = 'halaman.php';
                    </script>
                ";
            } else {
                echo "
                    <script>
                        alert('data gagal ditambahkan!');
                        document.location.href = 'halaman.php';
                    </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>tambah data</title>
</head>
<body>
    <div class="header">
    <h1>Tambah Data Karyawan</h1>
    </div>

    <form action="" method="POST">
        <ul>
            <li>
                <label for="name"> Nama </label><br>
                <input type="text" name="name" id="name">
            </li>
            <br>
            <li>
                <label for="email">E-Mail </label> <br>
                <input type="text" name="email" id="email">
            </li>
            <br>
            <li>
                <label for="address">Address</label><br>
                <input type="text" name="address" id="address">
            </li>
            <br>
            <li>
                <label for="gender"> Gender </label><br>
                <select name="gender" id="gender">
                    <option value="Pria">Pria</option>
                    <option value="Wanita">Wanita</option>
                </select>
            </li>
            <br>
            <li>
                <label for="position"> Position </label> <br>
                <input type="text" name="position" id="position">
            </li>
            <br>
            <li>
                <label for="status"> Status </label> <br>
                <select name="status" id="status">
                    <option value="fulltime"> Fulltime </option>
                    <option value="parttime"> Parttime</option>
                </select>
            </li>
            <b></b>
        
                <br>
                <button type="submit" name="submit">Tambah Data</button>
           
        </ul>
    </form>
</body>
</html>