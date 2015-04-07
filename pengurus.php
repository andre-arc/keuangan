<html>
<head>
    
</head>
<body>
   <a href="index.php">input kegiatan</a> |
   <a href="pengurus.php">input pengurus</a> |
   <br><br>
   
    <form action="proses_pengurus.php" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td> <input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama Pengurus</td>
                <td>:</td>
                <td><input type="date" name="nama"></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>:</td>
                <td><input type="text" name="jabatan"></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="proses">
                </td>
            </tr>
        </table>
    </form>
    <h3>Data Pengurus</h3>
    <table border="1">
        <tr>
           <td>NIM</td>
            <td>Nama Pengurus</td>
            <td>Jabatan</td>
        </tr>
        <?php
        include("koneksi.php");
        $sql = mysqli_query($konek, "SELECT * FROM pengurus");
            
        while($r = mysqli_fetch_array($sql)){
            echo '
            <tr>
                <td>'.$r['nim'].'</td>
                <td>'.$r['nama'].'</td>
                <td>'.$r['jabatan'].'</td>
            </tr>
            ';
            
        }
        ?>
    </table>
</body>
</html>