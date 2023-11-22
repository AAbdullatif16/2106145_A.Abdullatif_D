<?php
$db = mysqli_connect("localhost", "root", "", "2106145_aabdullatif");
if (!$db) {
    echo "<script>
                alert('database tidak terhubung')    
    </script>";
};

$nim = $_POST['nim'];
$nama_lengkap = $_POST['nama_lengkap'];
$email = $_POST['email'];
$jurusan = $_POST['jurusan'];
$no_telepon = $_POST['no_telepon'];


$query = "INSERT INTO form_wisuda_itg VALUES (NUll,'$nim','$nama_lengkap','$email','$jurusan','$no_telepon')";
mysqli_query($db, $query);
echo "<script>alert('Peserta berhasil ditambahkan')</script>";
echo "<script> window.location='./index.php'</script>";
?>