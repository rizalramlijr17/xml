<?php
require_once('config.php');

$query = "SELECT * FROM mahasiswa";
$xml = new SimpleXMLElement('<xml/>');
$hasil = mysqli_query($koneksi, $query);



while ($row = mysqli_fetch_assoc($hasil)) {
    $item=$xml->addChild('datamahasiswa');
    $item->addChild("id", $row['id']);
    $item->addChild("nama", $row['nama']);
    $item->addChild("nim", $row['nim']);
    $item->addChild("jurusan", $row['jurusan']);
    $item->addChild("email", $row['email']);
    $item->addChild("gambar", $row['gambar']);
}

$fp=fopen("datamhs.xml", "rizal");
fwrite($fp, $xml->asXML());
fclose($fp);

print($xml->asXML());
mysqli_close($koneksi);

?>