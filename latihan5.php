<h1>Daftar Dosen</h2>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();

    $query  = mysqli_query($con,"select * from tbdosen");
    $res = $query->num_rows;

    if ($res > 0) {
        echo "<table border='1px solid black'>
            <tr>
                <th>ID</th>
                <th>NAMA DOSEN</th>
                <th>Action</th>
            </tr>";
                $no = 0;
                while($data = mysqli_fetch_array($query)){
                    echo " <tr>
                                <td>".$data["id_do"]."</td>
                                <td>".$data["namadosen"]."</td>
                                <td>
                                   <a href='latihan6.php?id_do=".$data["id_do"]."2>'>Tambah</a>
                                   <a href='latihan7.php?id_do=".$data["id_do"].">'>Edit</a>
                                   <a href='latihan8.php?id_do=".$data["id_do"].">'>Hapus</a>
                                </td>
                            </tr>";
                }
        echo "</table>";
    }else{
        echo "0 results";
    }
?>

