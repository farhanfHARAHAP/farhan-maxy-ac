<?php
include 'function/functions.php';
include 'template/head.php';
title('RS Marhaen Jaya | Dokter');
?>

<body>
    <?php include 'template/header.html'; ?>
    <br>    
    <div class="container-flex ps-5 pe-3">
        <!--Table Dokter-->
        <p style="text-align: right;"><a href="index.php">Kembali</a></p>
        <h3>List Seluruh Dokter</h3>
        <p>Klik salah satu untuk membuka detail dokter</p>
        <hr>
        <table>
            <tr>
                <td class="pe-5 pb-3"><b>NO.</b></td>
                <td class="pe-5 pb-3"><b>NAMA</b></td>                
            </tr>
            <?php
            $col = selectDokterAll();
            $i = 0;
            foreach($col as $col){
                $i+=1;
            ?>
            <tr>
                <td class="pe-5 pb-3"><?=$i?></td>
                <td class="pe-5 pb-3"><?=$col?></td>                
                <td class="pe-5 pb-3"><a href="dokter.php?id=<?=$i?>">Detail</a></td>                
            </tr>
            <?php
            } ?>
        </table>
        <hr>
        <!--Detail Dokter-->        
        <?php
        if(isset($_GET['id'])){ ?>
        <div>
            <h4>Detail Dokter</h4>
            <?php
            $nama_dokter = selectDokter($_GET['id']);
            ?>
            <br>
            <div class="row">
                <div class="col"><h5><b><?=$nama_dokter?></b></h5></div>
                <div class="col">     
                    <?php
                    $imagefile = getImgDokter($_GET['id']);
                    if($imagefile != 'KOSONG'){
                    ?>
                    <img src="uploads/<?=$imagefile?>" height="300">
                    <br>
                    <a href="upload-photo.php?id=<?=$_GET['id']?>&mode=dokter" target="_blank">Ubah Foto</a> 
                    <?php
                    } ?>
                    <?php           
                    if($imagefile == 'KOSONG'){
                    ?>
                    <h4>Gambar belum diupload!</h4>
                    <a href="upload-photo.php?id=<?=$_GET['id']?>&mode=dokter" target="_blank">Upload Foto</a> 
                    <?php
                    } ?>                                     
                </div>
            </div>           
            <p><a href="dokter.php">Tutup detail</a></p> 
        </div>
        <?php
        } ?>
        <!--Tambah Dokter-->        
        <?php
        if(!(isset($_GET['id']))){ ?>
        <div>
            <h4><b>Tambahkan Dokter</b></h4>
            <?php
            if(isset($_GET['success'])){
                echo "<p style='color:green'>Berhasil menambahkan dokter baru!</p>";
            }
            if(isset($_GET['failed'])){
                echo "<p style='color:red'>Pastikan isi form sesuai ketentuan!</p>";
            }
            if(isset($_POST['Submit'])){
                try{
                    if($_POST['NAMA']!= ''){
                        insertDokter($_POST['ID'], $_POST['NAMA']);
                        header('Location: dokter.php?success=1');
                    }else{
                        header('Location: dokter.php?failed=1');
                    }           
                }catch(Exception $e){
                    header('Location: dokter.php?failed=1');
                }
            }
            ?>
            <br>
            <form action="dokter.php" method="post">
            <div class="row" style="width:50%">
                <div class="col">
                    <p>Nama Dokter</p>
                    <input class="form-control" type="text" name="NAMA" id="NAMA" placeholder="Nama Lengkap...">
                </div>                
            </div><br>   
            <div class="row" style="width:50%">
                <div class="col">
                    <p>ID Dokter Baru</p>
                    <input class="form-control" type="text" name="ID_V" id="ID_V" value="<?=$i+1?>" disabled>
                    <input type="hidden" name="ID" id="ID" value="<?=$i+1?>">
                </div>                
            </div><br>          
            <div class="row">
                <div class="col">                    
                    <input class="btn btn-primary" type="submit" value="Submit" name="Submit" id="Submit">
                </div>                
            </div><br>
            </form>
        </div>        
        <hr>
        <!--Hapus Dokter-->      
        <div>        
            <h4><b>Hapus Dokter</b></h4>            
            <?php
            if(isset($_GET['deletesuccess'])){
                if($_GET['deletesuccess'] == 1){
                    echo "<p style='color:green'>Berhasil menghapus dokter (permanent)</p>";
                }
                if($_GET['deletesuccess'] == 0){
                    echo "<p style='color:red'>Gagal menghapus. Isi sesuai ketentuan!</p>";
                }
            }            
            ?>
            <br>
            <form action="function/delete.php" method="post">
            <div class="row" style="width:50%">
                <div class="col">
                    <p>ID Pasien</p>
                    <input class="form-control" type="text" name="ID" id="ID">
                    <input type="hidden" name="MODE" id="MODE" value="dokter">
                </div>                
            </div><br> 
            <div class="row">
                <div class="col">                    
                    <input class="btn btn-primary" type="submit" value="Submit" name="Submit" id="Submit">
                </div>                
            </div><br>
            </form>
        </div> 
        <?php
        } ?>
        <br><br><br>
    </div>
</body>