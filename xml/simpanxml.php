<?php
require_once('config.php');

$xml = simplexml_load_file('datadsn.xml');
 
foreach($xml->dosen as $datadosen)
{
   $id = $datadosen->id;
   $nama = $datadosen->nama;
   $nip = $datadosen->nip;
   $email = $datadosen->email;
   

   $query = "INSERT INTO dosen 
                 VALUES ('$id', '$nama', '$nip', '$email')";
   mysqli_query($koneksi, $query);
  
}





?>