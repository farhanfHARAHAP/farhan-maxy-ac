<?php
try{
    function forToArr(){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $nipa = $_POST['nipa'];
        $nips = $_POST['nips'];
        $npkn = $_POST['npkn'];

        return [$nis, $nama, $nipa, $nips, $npkn];
    }

    include 'connectDB.php';

    $data = forToArr();

    $sql = "CALL insertSiswa('$data[0]','$data[1]',$data[2],$data[3],$data[4])";
    $result = $conn->query($sql);

    header('Location: ../ranking.php?mode=admin');
} catch (Exception $e) {    
    header('Location: ../ranking.php?mode=admin');
}
?>