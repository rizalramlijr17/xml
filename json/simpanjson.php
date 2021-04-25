<?php
require_once('config.php');
//untuk mendapatkan file json
$jsondata = file_get_contents('datadsn.json');

//convert json ke data array
$data = json_decode($jsondata, true);

//mendapatkan data employee details
foreach ($data as $row){
    $query = "INSERT INTO dosen(id, nama, nip, email)
    VALUES ('".$row["id"]."', '".$row["nama"]."', '".$row["nip"]."', '".$row["email"]."')";
   
   if(!mysqli_query($koneksi, $query)){
        die(" Error insert data ");
      }else{
        echo " Success insert data ";
      }
      
}


//insert data ke table tbl_emp 




?>