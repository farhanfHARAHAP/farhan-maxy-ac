<?php

try {

    include 'assets/connectDB.php';

    $member_id = $_POST['member_id'];
    $buku_id = $_POST['buku_id'];
    $operation = $_POST['operation'];

    if($operation == 'Pinjam'){
        include 'assets/runPinjam.php';              
        header('Location: dashboard.php?id='.$member_id);
    }

    if($operation == 'Kembalikan'){
        include 'assets/runBalikan.php';
        header('Location: dashboard.php?id='.$member_id);
    }


} catch (Exception $e) {    
    header('Location: dashboard.php?id='.$member_id);
}

?>