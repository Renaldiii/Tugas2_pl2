<h1>Daftar Matakuliah</h2>
<br></br>
<?php
    include 'koneksi.php';
    $db     = new Database();
    $con    = $db->Connect();

    $query  = mysqli_query($con,"select * from tbmatkul");
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
                                <td>".$data["id_mk"]."</td>
                                <td>".$data["namamtk"]."</td>
                                <td>
                                   <a href='latihan9tambahmatkul.php?id_mk=".$data["id_mk"].">'>Tambah</a>
                                   <a href='latihan9editmatkul.php?id_mk=".$data["id_mk"].">'>Edit</a>
                                   <a href='latihan9hapusmatkul.php?id_mk=".$data["id_mk"].">'>Hapus</a>
                                </td>
                            </tr>";
                }
        echo "</table>";
    }else{
        echo "0 results";
    }
?>
