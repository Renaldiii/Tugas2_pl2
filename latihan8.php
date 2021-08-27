<h1>DELET</h1>
<a href="index.php?id_do=<?php echo base64_encode(2);?>"><= Kembali</a>
<br></br>
<?php 
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();
    $id_do     = $_GET['id_do'];

    $data = mysqli_query($con,"DELETE FROM tbdosen WHERE id_do='$id_do'");
     echo "<script>alert('Data Berhasil Dihapus')('location:latihan8.php');</script>";
?> 

