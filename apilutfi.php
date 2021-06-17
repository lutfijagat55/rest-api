<?php

include "conn.php";

$nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
$nim = isset($_POST["nim"]) ? $_POST["nim"] : "";
$kelas = isset($_POST["kelas"]) ? $_POST["kelas"] : "";


$sql = "INSERT INTO 'siswa' ('nim', 'nama', 'kelas')
VALUES ('".$nama."', '".$nim."', '".$kelas."');";
// echo $sql;  

$query = mysqli_query($conn, $sql);
if ($query){
    $msg = " simpan data siswa berhasil";
}else{
    $msg = " simpan data gagal";
}

$response = array(
    'status'=>'ok',
    'msg' =>$msg
);

header("Content-type: application/json");
echo json_encode($response);
?>