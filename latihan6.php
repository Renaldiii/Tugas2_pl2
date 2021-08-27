<h1>Tambah Dosen</h1>
<a href="index.php?id_do=<?php echo base64_encode(2);?>"><= Kembali</a>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    if(isset($_POST['proses']))
    {
    
    $query = mysqli_query($con,"INSERT INTO tbdosen ( namadosen ) values('".$_POST['namadosen']."')");
    echo "<script>alert('Data Berhasil Disimpan')('location:latihan6.php');</script>";
    }
?>
<form action="" method="POST">
    <input type="text" name="namadosen">
    <input type="submit" name="proses" value="Simpan">
</form> 
