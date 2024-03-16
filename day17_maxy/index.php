<?php
include 'function/functions.php';
include 'template/head.php';
title('RS Marhaen Jaya | Pasien');
?>

<body>
    <?php include 'template/header.html'; ?>
    <br>
    <!--Table Pasien-->
    <div class="container-flex ps-5 pe-3">
        <p style="text-align: right;"><a href="dokter.php">List Dokter</a></p>
        <h3>List Seluruh Pasien</h3>
        <p>Klik salah satu untuk membuka detail berkas pasien</p>
        <hr>
        <table>
            <tr>
                <td class="pe-5 pb-3"><b>NO.</b></td>
                <td class="pe-5 pb-3"><b>NAMA</b></td>
                <td class="pe-5 pb-3"><b>UMUR</b></td>
                <td class="pe-5 pb-3"><b>ALAMAT</b></td>
            </tr>
            <?php
            $col = selectPasienAll();
            $i = 0;
            foreach($col as $col){
                $i+=1;
            ?>
            <tr>
                <td class="pe-5 pb-3"><?=$i?></td>
                <td class="pe-5 pb-3"><?=$col[0]?></td>
                <td class="pe-5 pb-3"><?=$col[1]?></td>
                <td class="pe-5 pb-3"><?=$col[2]?></td>
                <td class="pe-5 pb-3"><a href="pasien.php?id=<?=$i?>">Detail</a></td>                              
            </tr>
            <?php
            } ?>
        </table>
        <hr>
        <!--Tambah Pasien-->                        
        <div>
            <h4><b>Tambahkan Pasien</b></h4>
            <?php
            if(isset($_GET['success'])){
                echo "<p style='color:green'>Berhasil menambahkan pasien baru!</p>";
            }
            if(isset($_GET['failed'])){
                echo "<p style='color:red'>Pastikan isi form sesuai ketentuan!</p>";
            }
            if(isset($_POST['Submit'])){
                try{
                    if($_POST['NAMA']!= '' && $_POST['UMUR']!= '' && $_POST['ALAMAT']!= ''){
                        insertPasien($_POST['ID'],$_POST['NAMA'],$_POST['UMUR'],$_POST['ALAMAT']);
                        header('Location: index.php?success=1');
                    }else{
                        header('Location: index.php?failed=1');
                    }           
                }catch(Exception $e){                    
                    header('Location: index.php?failed=1');
                }
            }
            ?>
            <br>
            <form action="index.php" method="post">
            <div class="row" style="width:50%">
                <div class="col">
                    <p>Nama Pasien</p>
                    <input class="form-control" type="text" name="NAMA" id="NAMA" placeholder="Nama Lengkap...">
                </div>                
            </div><br> 
            <div class="row" style="width:50%">
                <div class="col">
                    <p>ID Pasien Baru</p>
                    <input class="form-control" type="text" name="ID_v" id="ID_v" value="<?=$i+1?>" disabled>
                    <input type="hidden" name="ID" id="ID" value="<?=$i+1?>">
                </div>                
            </div><br> 
            <div class="row" style="width:50%">
                <div class="col">
                    <p>Umur Pasien</p>
                    <input class="form-control" type="text" name="UMUR" id="UMUR" placeholder="Umur..." maxlength="3">
                </div>                
            </div><br>    
            <div class="row" style="width:50%">
                <div class="col">
                    <p>Alamat Pasien</p>
                    <input class="form-control" type="text" name="ALAMAT" id="ALAMAT" placeholder="Alamat...">
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
        <!--Hapus Pasien-->      
        <div>        
            <h4><b>Hapus Pasien</b></h4>            
            <?php
            if(isset($_GET['deletesuccess'])){
                if($_GET['deletesuccess'] == 1){
                    echo "<p style='color:green'>Berhasil menghapus pasien (permanent)</p>";
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
                    <input type="hidden" name="MODE" id="MODE" value="pasien">
                </div>                
            </div><br> 
            <div class="row">
                <div class="col">                    
                    <input class="btn btn-primary" type="submit" value="Submit" name="Submit" id="Submit">
                </div>                
            </div><br>
            </form>
        </div> 
        <br><br><br>
    </div>
</body>