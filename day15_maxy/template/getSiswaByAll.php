<?php

$sql = "CALL getSiswaByAll()";
$result = $conn->query($sql);

$arr_no = [];
$arr_nis= [];
$arr_name = [];
$arr_rata2 = [];
$arr_IPS = [];
$arr_IPA = [];
$arr_PKN = [];

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($arr_no, $row['NOMOR']);
        array_push($arr_nis, $row['NIS']);
        array_push($arr_name, $row['NAMA']);
        array_push($arr_rata2, $row['RATA2']);    
        array_push($arr_IPS, $row['IPS']); 
        array_push($arr_IPA, $row['IPA']); 
        array_push($arr_PKN, $row['PKN']); 
    }
}

$arr_data = array_map(null, $arr_no, $arr_nis, $arr_name, $arr_rata2, $arr_IPS, $arr_IPA, $arr_PKN);
$conn->close();
?>