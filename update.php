<?php

    require 'utama.php';

    $id = $_GET["id"];

    $karyawan2 = query("SELECT * FROM karyawan WHERE id = $id")[0];

if(isset($_POST["submit"])) {
    if( isset($_POST["submit"])){
        //jika sudah ditekan dijalankan function tambah
        if(update($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil diupdate');
                    document.location.href = 'halaman.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal diupdate');
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
    <title>Update Data</title>
</head>
<body>
    <div class="header">
    <h1>Update Data Karyawan</h1>
    </div>

    <form action="" method="POST">
        <ul>
            
                <input type="hidden"name= "id" id = "id" required value="<?= $karyawan2["id"]; ?>">
             
            <li>
                <label for="name"> Nama </label><br>
                <input type="text" name="name" id="name" value=" <?= $karyawan2["name"]; ?>">
            </li>
            <br>
            <li>
                <label for="email">E-Mail </label> <br>
                <input type="text" name="email" id="email" value="<?= $karyawan2["email"]; ?>">
            </li>
            <br>
            <li>
                <label for="address">Address</label><br>
                <input type="text" name="address" id="address" value="<?=$karyawan2["address"]; ?>">
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
                <input type="text" name="position" id="position" value="<?=$karyawan2["position"]; ?>">
            </li>
            <br>
            <li>
                <label for="status"> Status </label> <br>
                <select name="status" id="status"value="<?=$karyawan["status"]; ?>">
                    <option value="fulltime"> Fulltime </option>
                    <option value="parttime"> Parttime</option>
                </select>
            </li>
            <b></b>
        
                <br>
                <button type="submit" name="submit"> Update Data</button>
           
        </ul>
    </form>
</body>
</html>