<?php

function insertPasien($idx, $name, $age, $address){
    include 'connectDB.php';
    $sql = "CALL insertPasien($idx, '$name', $age, '$address')";
    $conn->query($sql);
    $conn->close();
} # RETURN NULL

function insertDokter($id, $name){
    include 'connectDB.php';
    $sql = "CALL insertDokter($id, '$name')";
    $conn->query($sql);
    $conn->close();
} # RETURN NULL

function insertRiwayat($pasien_id, $dokter_id, $catatan){
    include 'connectDB.php';
    $sql = "CALL insertRiwayat($pasien_id, $dokter_id, '$catatan')";
    $conn->query($sql);
    $conn->close();
} # RETURN NULL

function selectPasienAll(){
    include 'connectDB.php';
    $sql = "CALL selectPasienAll()";
    $result = $conn->query($sql);

    $arr_NAMA = [];
    $arr_UMUR= [];
    $arr_ALAMAT = [];    

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($arr_NAMA, $row['NAMA']);
            array_push($arr_UMUR, $row['UMUR']);
            array_push($arr_ALAMAT, $row['ALAMAT']);             
        }
    }

    $arr_data = array_map(null, $arr_NAMA, $arr_UMUR, $arr_ALAMAT);
    $conn->close();
    return $arr_data;
} # RETURN NAMA, UMUR, ALAMAT

function selectDokterAll(){
    include 'connectDB.php';
    $sql = "CALL selectDokterAll()";
    $result = $conn->query($sql);

    $arr_NAMA = [];    

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($arr_NAMA, $row['NAMA']);                        
        }
    }

    $arr_data = $arr_NAMA;
    $conn->close();
    return $arr_data;
} # RETURN NAMA, UMUR, ALAMAT

function selectPasien($id){
    include 'connectDB.php';
    $sql = "CALL selectPasien($id)";
    $result = $conn->query($sql);

    $arr_NAMA = '';
    $arr_UMUR= '';
    $arr_ALAMAT = '';    

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $arr_NAMA = $row['NAMA'];
            $arr_UMUR = $row['UMUR'];
            $arr_ALAMAT = $row['ALAMAT'];             
        }
    }

    $arr_data = array($arr_NAMA, $arr_UMUR, $arr_ALAMAT);
    $conn->close();
    return $arr_data;
} # RETURN NAMA, UMUR, ALAMAT

function selectDokter($id){
    include 'connectDB.php';
    $sql = "CALL selectDokter($id)";
    $result = $conn->query($sql);

    $arr_NAMA = '';  

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $arr_NAMA = $row['NAMA'];           
        }
    }

    $arr_data = $arr_NAMA;
    $conn->close();
    return $arr_data;
} # RETURN NAMA

function selectRiwayatByPasien($id){
    include 'connectDB.php';
    $sql = "CALL selectRiwayatByPasien($id)";
    $result = $conn->query($sql);

    $arr_DOKTER = [];
    $arr_CATATAN = [];
    $arr_WAKTU = [];    

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($arr_DOKTER, $row['DOKTER']);
            array_push($arr_CATATAN, $row['CATATAN']);
            array_push($arr_WAKTU, $row['WAKTU']);             
        }
    }

    $arr_data = array_map(null, $arr_DOKTER, $arr_CATATAN, $arr_WAKTU);
    $conn->close();
    return $arr_data;
} # RETURN DOKTER, CATATAN, WAKTU

function deletePasien($id){
    include 'connectDB.php';
    $sql = "CALL deletePasien($id)";
    $conn->query($sql);
    $conn->close();
} # RETURN NULL

function deleteDokter($id){
    include 'connectDB.php';
    $sql = "CALL deleteDokter($id)";
    $conn->query($sql);
    $conn->close();
} # RETURN NULL

function getImgPasien($id){
    include 'connectDB.php';
    $sql = "CALL getImgPasien($id)";
    $result = $conn->query($sql);

    $arr_IMAGE = '';  

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $arr_IMAGE = $row['IMAGEFILE'];           
        }
    }

    $arr_data = $arr_IMAGE;
    $conn->close();
    return $arr_data;
} # RETURN IMAGEFILE

function getImgDokter($id){
    include 'connectDB.php';
    $sql = "CALL getImgDokter($id)";
    $result = $conn->query($sql);

    $arr_IMAGE = '';  

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $arr_IMAGE = $row['IMAGEFILE'];           
        }
    }

    $arr_data = $arr_IMAGE;
    $conn->close();
    return $arr_data;
} # RETURN IMAGEFILE

function setImgDokter($id, $image){
    include 'connectDB.php';
    $sql = "CALL setImgDokter($id, '$image')";
    $conn->query($sql);
    $conn->close();
} # RETURN NULL

function setImgPasien($id, $image){
    include 'connectDB.php';
    $sql = "CALL setImgPasien($id, '$image')";
    $conn->query($sql);
    $conn->close();
} # RETURN NULL