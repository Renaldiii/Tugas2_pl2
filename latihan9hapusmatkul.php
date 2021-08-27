<h1>DELET</h1>
<a href="index.php?id_mk=<?php echo base64_encode(3);?>"><= Kembali</a>
<br></br>
<?php 
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    $id_mk     = $_GET['id_mk'];

    $data = mysqli_query($con,"DELETE FROM tbmatkul WHERE id_mk='$id_mk'");
     echo "<script>alert('Data Berhasil Dihapus')('location:latihan9hapusmatkul.php');</script>";
?> 
