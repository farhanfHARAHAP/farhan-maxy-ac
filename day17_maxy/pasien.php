<?php
include 'function/functions.php';
include 'template/head.php';
title('RS Marhaen Jaya | Pasien '.$_GET['id']);
?>

<body>
    <?php include 'template/header.html'; ?>
    <br>
    <div class="container-flex ps-5 pe-3">
        <?php
        $data = selectPasien($_GET['id']);
        ?>
        <p style="text-align: right;"><a href="index.php">Kembali</a></p>
        <!--Data Pasien-->
        <h3>Data Pasien</h3>
        <hr>
        <div class="row">
            <div class="col">
                <h4><b><?=$data[0]?></b></h4>
                <h5>Umur: <?=$data[1]?></h5>
            <h5>Alamat: <?=$data[2]?></h5>
            </div>
            <div class="col">     
                <?php
                $imagefile = getImgPasien($_GET['id']);
                if($imagefile != 'KOSONG'){
                ?>
                <img src="uploads/<?=$imagefile?>" height="300">
                <br>
                <a href="upload-photo.php?id=<?=$_GET['id']?>&mode=pasien" target="_blank">Ubah Foto</a> 
                <?php
                } ?>
                <?php           
                if($imagefile == 'KOSONG'){
                ?>
                <h4>Gambar belum diupload!</h4>
                <a href="upload-photo.php?id=<?=$_GET['id']?>&mode=pasien" target="_blank">Upload Foto</a> 
                <?php
                } ?>                                     
            </div>  
        </div>        
        <hr>
        <!--Riwayat Pasien-->
        <h4>Riwayat Pasien</h4>
        <br>
        <table>
            <tr>
                <td class="pe-5 pb-3"><b>NO.</b></td>
                <td class="pe-5 pb-3"><b>TIMESTAMP</b></td>
                <td class="pe-5 pb-3"><b>DOKTER</b></td>
                <td class="pe-5 pb-3"><b>CATATAN</b></td>
            </tr>
            <?php
            $col = selectRiwayatByPasien($_GET['id']);
            $i = 0;
            foreach($col as $col){
                $i+=1;
            ?>
            <tr>
                <td class="pe-5 pb-3"><?=$i?></td>
                <td class="pe-5 pb-3"><?=$col[2]?></td>
                <td class="pe-5 pb-3"><?=$col[0]?></td>
                <td class="pe-5 pb-3"><?=$col[1]?></td>
            </tr>
            <?php
            } ?>
        </table>
        <hr>
        <!--Tambah Riwayat Pasien-->
        <h4><b>Tambah Riwayat Pasien</b></h4>  
        <div>            
            <?php
            if(isset($_GET['success'])){
                echo "<p style='color:green'>Berhasil menambahkan riwayat pasien!</p>";            
            }
            if(isset($_POST['Submit'])){
                try{            
                    insertRiwayat($_POST['PASIEN'], $_POST['DOKTER'], $_POST['CATATAN']);                
                    header("Location: pasien.php?id=".$_GET['id']."&success=1");           
                } catch (Exception $e) {
                    echo "<p style='color:red'>Pastikan isi form sesuai ketentuan!</p>";
                }            
            }
            ?>
            <br>          
            <form action="pasien.php?id=<?=$_GET['id']?>" method="post">
                <div class="row" style="max-width: 50%;">
                    <div class="col">
                        <p>ID Dokter</p>
                        <input class="form-control" type="text" name="DOKTER" id="DOKTER" maxlength="3" placeholder="0">
                        <a href="dokter.php">Lihat daftar dokter</a>
                    </div>
                    <div class="col">
                        <p>ID PASIEN</p>
                        <input class="form-control" type="text" maxlength="3" value="<?=$_GET['id']?>" disabled>
                        <input type="hidden" name="PASIEN" id="PASIEN" value="<?=$_GET['id']?>">
                    </div>
                </div>
                <br>
                <div class="row" style="max-width: 50%;">
                    <p>Catatan</p>
                    <textarea name="CATATAN" id="CATATAN" cols="30" rows="10" class="form-control" placeholder="Masukan catatan disini..."></textarea>
                </div>
                <div class="row" style="max-width: 50%;">
                    <div class="col"></div>
                    <div class="col" style="text-align: right;">
                        <br>
                        <input class="btn btn-primary" type="submit" value="Submit" name="Submit" id="Submit">
                    </div>
                </div>
            </form>  
        </div> 
        <br><br> 
    </div>
</body>