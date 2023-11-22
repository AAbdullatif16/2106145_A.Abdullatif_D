<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Peserta Wisuda ITG</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
    <center><h2>Pendaftaran Peserta Wisuda ITG</h2> </center>
        <form action="proses_input.php" method="post">
    <center><label for="nim">NIM</label>
            <input type="text" id="nim" name="nim" required> <br>
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" id="nama_lengkap" name="nama_lengkap" required> <br>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required> <br>

            <label for="jurusan">Jurusan</label>
            <input type="text" id="jurusan" name="jurusan" required> <br>

            <label for="no_telepon">Nomor Telepon</label>
            <input type="text" id="no_telepon" name="no_telepon" required> <br>

            <input type="submit" value="Daftar" name="submit"> <br> 
    </center>

        </form>
    </div>
</body>

</html>
