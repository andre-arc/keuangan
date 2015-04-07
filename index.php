<html>
<head>
    
</head>
<body>
    <a href="index.php">input kegiatan</a> |
   <a href="pengurus.php">input pengurus</a> |
   <br><br>
   
    <form action="proses.php" method="post">
        <table>
            <tr>
                <td>NAMA KEGIATAN</td>
                <td>:</td>
                <td> <input type="text" name="nm_kegiatan"></td>
            </tr>
            <tr>
                <td>Tanggal Kegiatan</td>
                <td>:</td>
                <td><input type="date" name="tgl"></td>
            </tr>
            <tr>
                <td>Dana Masuk</td>
                <td>:</td>
                <td><input type="text" name="dn_masuk"></td>
            </tr>
            <tr>
                <td>Dana Keluar</td>
                <td>:</td>
                <td><input type="text" name="dn_keluar"></td>
            </tr>
            <tr>
                <td>Pengurus</td>
                <td>:</td>
                <td>
                    <select name="nim" id="">
                        <option >Pilih siapa pengurus</option>
                        <?php
                            include("koneksi.php");
                            $sql = mysqli_query($konek, "select * from pengurus");
                            while($r = mysqli_fetch_array($sql)){
                                echo '<option value="'.$r['nim'].'">'.$r['nama'].'</option>';
                            }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="proses">
                </td>
            </tr>
        </table>
    </form>
    <h3>Data Kegiatan</h3>
    <table border="1">
        <tr>
            <td>Nama Kegiatan</td>
            <td>Tanggal Kegiatan</td>
            <td>Nama Pengurus</td>
            <td>Dana Masuk</td>
            <td>Dana Keluar</td>
        </tr>
        <?php
        $sql2 = mysqli_query($konek, "SELECT * FROM kegiatan as k, dana as d, pengurus as p where k.nim=p.nim and k.id=d.id_kegiatan ");
            
        while($r = mysqli_fetch_array($sql2)){
            echo '
            <tr>
                <td>'.$r['jenis_kegiatan'].'</td>
                <td>'.$r['tgl_kegiatan'].'</td>
                <td>'.$r['nama'].'</td>
                <td>'.$r['dana_masuk'].'</td>
                <td>'.$r['dana_keluar'].'</td>
            </tr>
            ';
            
        }
        ?>
    </table>
</body>
</html>