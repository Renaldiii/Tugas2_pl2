<h1>Edit Dosen</h1>
<a href="index.php?id_do=<?php echo base64_encode(2);?>"><= Kembali</a>
<br></br>
<?php
    include 'koneksi.php';
    
    $db     = new Database();
    $con    = $db->Connect();
    $id_do     = $_GET['id_do'];
    $data   = mysqli_query($con,"SELECT * FROM tbdosen WHERE id_do='$id_do'");
    $d = mysqli_fetch_array($data);   

    if(isset($_POST['proses']))
    {
        mysqli_query($con, "UPDATE tbdosen  SET namadosen = '$_POST[namadosen]'
        WHERE id_do = '$_GET[id_do]'");
        echo "<script>alert('Data Berhasil Diupdate')('location:latihan7.php');</script>";
    }
?>
<form action="" method="POST">
    <input type="text" name="namadosen" value="<?php echo $d['namadosen'];?>">
    <input type="submit" name="proses" value="Update">
</form>
