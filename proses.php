<?php
include("koneksi.php");

$nm_kegiatan = isset($_POST['nm_kegiatan']) ? $_POST['nm_kegiatan'] :  "";
$tgl_kegiatan = isset($_POST['tgl']) ? $_POST['tgl'] :  "";
$dana_masuk = isset($_POST['dn_masuk']) ? $_POST['dn_masuk'] :  "";
$dana_keluar = isset($_POST['dn_keluar']) ? $_POST['dn_keluar'] :  "";
$nim = isset($_POST['nim']) ? $_POST['nim'] :  "";


$sql = mysqli_query($konek, "insert into kegiatan values('', '$nm_kegiatan', '$tgl_kegiatan','$nim')");

$sql2 = mysqli_query($konek, "select * from kegiatan where jenis_kegiatan='$nm_kegiatan'");

$result = mysqli_fetch_array($sql2);
$sql3 = mysqli_query($konek, "insert into dana values('', '$dana_masuk', '$dana_keluar','$result[id]')");

if($sql && $sql2 && $sql3){
    header("Location: index.php");
}
?>