<?php
include 'functions.php';

$mode = $_POST['mode'];
$id = $_POST['id'];
$target_dir = "../uploads/";
$uploadOk = 1;
$target_file = basename($_FILES["fileToUpload"]["name"]);
$imageFileType = strtolower(pathinfo($_FILES["fileToUpload"]["name"], PATHINFO_EXTENSION));
$custom_filename = $target_file; // Customized filename

try {
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            throw new ValueError(2);
        }
    }    

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
        throw new ValueError(3);
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        throw new ValueError(2);
    }

    if ($uploadOk == 0) {
        throw new ValueError(4);
    } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $custom_filename)) {
            if($mode='dokter'){
                $delete_file = getImgDokter($id);
                if($delete_file != 'KOSONG'){
                    unlink($delete_file);
                }                
                $new_file = $custom_filename;
                setImgDokter($id, $new_file);
            }            
            if($mode='pasien'){
                $delete_file = getImgPasien($id);
                unlink($delete_file);
                $new_file = $custom_filename;
                setImgPasien($id, $new_file);
            }            
            echo "The file ". htmlspecialchars($custom_filename) . " has been uploaded.";
            header("Location: ../upload-complete.php");
        } else {
            throw new ValueError(4);
        }
    }
} catch (ValueError $e) {
    if($e->getMessage() == "Path cannot be empty"){
        $e = new ValueError(0);
    }
    header("Location: ../upload-photo.php?id=".$id."&mode=".$mode."&error=".$e->getMessage());
}
?>
