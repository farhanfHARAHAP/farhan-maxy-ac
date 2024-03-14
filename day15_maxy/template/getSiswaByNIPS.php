<?php

$sql = "CALL getSiswaByNIPS()";
$result = $conn->query($sql);

$arr_no = [];
$arr_nis= [];
$arr_name = [];
$arr_nilai = [];

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        array_push($arr_no, $row['NOMOR']);
        array_push($arr_nis, $row['NIS']);
        array_push($arr_name, $row['NAMA']);
        array_push($arr_nilai, $row['NILAI']);    
    }
}

$arr_data = array_map(null, $arr_no, $arr_nis, $arr_name, $arr_nilai);
$conn->close();
?>