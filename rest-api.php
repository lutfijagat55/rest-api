<?php
include "conn.php";

 
$sql= "SELECT * FROM siswa";
$query = mysqli_query($conn, $sql);
while ($data = mysqli_fetch_array($query)){
    // echo $data["nama"]." ";

    $item[] = array(
        'nama'=>$data["nama"],
        'nim'=>$data["nim"],
        'kelas'=>$data["kelas"]
    );
}
    $response = array(
        'status'=>'OK',
        'data'=>$item
    );
    header("Content-type: application/json");
    echo json_encode($response);

?>