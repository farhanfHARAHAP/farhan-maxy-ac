<?php
try{
    if(!(isset($_POST['Submit']))){
        echo "Illegal access!";
    }
    $ID = $_POST['ID'];
    $MODE = $_POST['MODE'];

    include 'functions.php';

    if($MODE == 'dokter'){                
        $delete_file = getImgDokter($ID);
        if($delete_file != 'KOSONG'){
            unlink($delete_file);
        }    
        deleteDokter($ID);
        header("Location: ../dokter.php?deletesuccess=1");                  
    }

    if($MODE== 'pasien'){    
        $delete_file = getImgPasien($ID);
        if($delete_file != 'KOSONG'){
            unlink($delete_file);
        }    
        deletePasien($ID);
        header("Location: ../index.php?deletesuccess=1");
    }
}
catch(Exception $e){
    if($MODE== 'pasien'){
        header("Location: ../index.php?deletesuccess=0");
    }
    if($MODE== 'dokter'){
        header("Location: ../dokter.php?deletesuccess=0");   
    }
}
?>