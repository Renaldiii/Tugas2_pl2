<h1>Edit Matakuliah</h1>
<a href="index.php?id_mk=<?php echo base64_encode(3);?>"><= Kembali</a>
<br></br>
<?php
    include 'koneksi.php';
    
    $db     = new Database();
    $con    = $db->Connect();
    $id_mk     = $_GET['id_mk'];
    $data   = mysqli_query($con,"SELECT * FROM tbmatkul WHERE id_mk='$id_mk'");
    $d = mysqli_fetch_array($data);   

    if(isset($_POST['proses']))
    {
        mysqli_query($con, "UPDATE tbmatkul  SET namamtk = '$_POST[namamtk]'
        WHERE id_mk = '$_GET[id_mk]'");
        echo "<script>alert('Data Berhasil Diupdate')('location:latihan9editmatkul.php');</script>";
    }
?>
<form action="" method="POST">
    <input type="text" name="namamtk" value="<?php echo $d['namamtk'];?>">
    <input type="submit" name="proses" value="Update">
</form>
