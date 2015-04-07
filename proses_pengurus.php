<?php
include("koneksi.php");

$nama = isset($_POST['nama']) ? $_POST['nama'] :  "";
$nim = isset($_POST['nim']) ? $_POST['nim'] :  "";
$jabatan = isset($_POST['jabatan']) ? $_POST['jabatan'] :  "";


$sql = mysqli_query($konek, "insert into pengurus values('$nim', '$nama','$jabatan')");


if($sql){
    header("Location: pengurus.php");
}
?>