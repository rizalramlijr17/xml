<?php 
require_once('config.php');

$query = "SELECT * FROM mahasiswa";
$run_query = mysqli_query($koneksi, $query);

if ($run_query) {
    $hasil = array();

    while ($row = mysqli_fetch_array($run_query)){
        array_push($hasil, array(
            'id' => $row['id'],
            'nama' => $row['nama'],
            'nim' => $row['nim'],
            'jurusan' => $row['jurusan'],
            'email' => $row['email'],
            'gambar' => $row['gambar'],
        ));
    }

    echo json_encode($hasil);
}

?>