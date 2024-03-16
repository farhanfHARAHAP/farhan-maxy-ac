<?php
include 'function/functions.php';
include 'template/head.php';
title('RS Marhaen Jaya | Upload Photo');
if(isset($_GET['mode']) && isset($_GET['mode'])){
?>

<body>
    <?php include 'template/header.html'; ?>
    <br>    
    <!--Upload Form-->
    <div class="container-flex ps-5 pe-3">
        <h2>Ganti Foto Profil</h2>
        <hr>
        <h3>Untuk <?=$_GET['mode']?> dengan id <?=$_GET['id']?></h3>        
        <!--Error code-->
        <?php
        if(isset($_GET['error'])){
            if($_GET['error'] == 0){
                echo "<p style='color:red'>Anda belum memasukan file apapun.</p>";
            }
            if($_GET['error'] == 1){
                echo "<p style='color:red'>Foto untuk id ini sudah diupload sebelumnya. Tolong kontak admin.</p>";
            }
            if($_GET['error'] == 2){
                echo "<p style='color:red'>File bukan .jpg .png atau .gif</p>";
            }
            if($_GET['error'] == 3){
                echo "<p style='color:red'>Ukuran file terlalu besar!</p>";
            }
            if($_GET['error'] == 4){
                echo "<p style='color:red'>Unknown error! Tolong kontak admin.</p>";
            }
        }
        ?>
        <br>
        <!--Form-->
        <div>
        <form action="function/upload.php" method="post" enctype="multipart/form-data">
            <p>Select image to upload:</p>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="hidden" name="id" id="id" value="<?=$_GET['id']?>">
            <input type="hidden" name="mode" id="mode" value="<?=$_GET['mode']?>">
            <br><br>
            <input type="submit" value="Upload Image" name="submit" class="btn btn-primary">
        </form>
        </div>
    </div>  
    <br><br><br>  
</body>

<?php
} ?>