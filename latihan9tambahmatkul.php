<h1>Tambah Matakuliah</h1>
<a href="index.php?id_mk=<?php echo base64_encode(3);?>"><= Kembali</a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    if(isset($_POST['proses']))
    {
    
    $query = mysqli_query($con,"INSERT INTO tbmatkul ( namamtk ) values('".$_POST['namamtk']."')");
    echo "<script>alert('Data Berhasil Disimpan')('location:latihan9tambahmatkul.php');</script>";
    }
?>
<form action="" method="POST">
    <input type="text" name="namamtk">
    <input type="submit" name="proses" value="Simpan">
</form> 
