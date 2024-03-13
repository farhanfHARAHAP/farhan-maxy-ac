<?php
try{
#Handling-START

#Header
include 'assets/header.php';
initHeader('Dashboard | Buku Topi Jerami');
#Navbar
include 'assets/navbar.html';
?>

<!--Content-->
<div class="container-fluid ps-5 pt-5 pe-5 content">
    <?php
    include 'assets/connectDB.php';
    $member_id = $_GET['id'];
    include 'assets/getMemberName.php';
    if($member_name=="Unknown"){
        header('Location: login.php');
    }
    ?>
    <h1>Halo, <?=$member_name?>!</h1>
    <hr>
    <br>
    <!--Table1-->
    <h2>Buku Tersedia</h2>
    <hr>
    <table>
        <tr>
            <td><h3>ID   .</h3></td>
            <td><h3>Gambar Depan</h3></td>
            <td><h3>Gambar Belakang</h3></td>            
            <td><h3>Nama</h3></td>
            <td><h3>Deskripsi</h3></td>            
        </tr>
        <?php
        include 'assets/connectDB.php';
        include 'assets/getAvailable.php';   
        
        foreach ($arr_data as $value) { ?>
        <tr>
            <td><p><?=$value[0]?> </p></td>
            <td><img src="https://raw.githubusercontent.com/farhanfHARAHAP/farhan-maxy-ac/main/day14_maxy/assets/buku/<?=$value[0]?>-1.jpg" width="100"></td>
            <td><img src="https://raw.githubusercontent.com/farhanfHARAHAP/farhan-maxy-ac/main/day14_maxy/assets/buku/<?=$value[0]?>-2.jpg" width="100"></td>            
            <td><p><?=$value[1]?></p></td>
            <td><p><?=$value[2]?></p></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <hr><br>
    <!--Table2-->
    <h2>Belum Kamu Kembalikan</h2>
    <hr>
    <table>
        <tr>
            <td><h3>ID   .</h3></td>
            <td><h3>Gambar Depan</h3></td>
            <td><h3>Gambar Belakang</h3></td>            
            <td><h3>Nama</h3></td>
            <td><h3>Deskripsi</h3></td>            
        </tr>
        <?php
        include 'assets/connectDB.php';include 'assets/connectDB.php';
        include 'assets/getNotReturned.php';   
        
        foreach ($arr_data as $value) { ?>
        <tr>
            <td><p><?=$value[0]?> </p></td>
            <td><img src="https://raw.githubusercontent.com/farhanfHARAHAP/farhan-maxy-ac/main/day14_maxy/assets/buku/<?=$value[0]?>-1.jpg" width="100"></td>
            <td><img src="https://raw.githubusercontent.com/farhanfHARAHAP/farhan-maxy-ac/main/day14_maxy/assets/buku/<?=$value[0]?>-2.jpg" width="100"></td>            
            <td><p><?=$value[1]?></p></td>
            <td><p><?=$value[2]?></p></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <hr><br>
    <!--Menu-->
    <h2>Menu</h2>
    <hr>
        <div class="container-fluid p-2">
            <h3>Pinjam Buku</h3>
            <form action="operation.php" method="post">
                <input class="form-control" type="text" name="buku_id" id="buku_id" style="width:40%">
                <input type="hidden" name="member_id" id="member_id" value=<?=$_GET['id']?>>
                <p>Masukkan ID Buku!</p>
                <br>
                <input type="submit" value="Pinjam" id="operation" name="operation" class="btn btn-primary">
            </form>    
            <hr>
            <h3>Kembalikan Buku</h3>
            <form action="operation.php" method="post">
                <input class="form-control" type="text" name="buku_id" id="buku_id" style="width:40%">
                <input type="hidden" name="member_id" id="member_id" value=<?=$_GET['id']?>>
                <p>Masukkan ID Buku!</p>
                <br>
                <input type="submit" value="Kembalikan" id="operation" name="operation" class="btn btn-primary">
            </form>          
        </div>
    <br><br>
</div>

<?php
#Footer
include 'assets/footer.html';

#Handling-END
}
catch(Exception $e){    
    header('Location: login.php');
}
?>