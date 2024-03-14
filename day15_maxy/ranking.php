<head>
    <title>Daftar Ranking Siswa</title>    
</head>

<body style="margin-top: 10pt; margin-left: 10pt; margin-right: 10pt;">
    <p style="text-align: right;"><a href="ranking.php?mode=admin">Admin</a></p>
    <br>
    <!--Title-->
    <h1 style="text-align: center;">Daftar Ranking Siswa</h1>
    <hr>
    <!--Menu-->
    <div>
        <table>
            <tr>
                <td style="padding: 10pt;"><h3>Menu</h3></td>
                <td style="padding: 10pt;"><h3><a href="ranking.php?mode=all">Show All</a></h3></td>
                <td style="padding: 10pt;"><h3><a href="ranking.php?mode=ipa">Sort by IPA</a></h3></td>
                <td style="padding: 10pt;"><h3><a href="ranking.php?mode=ips">Sort by IPS</a></h3></td>
                <td style="padding: 10pt;"><h3><a href="ranking.php?mode=pkn">Sort by PKN</a></h3></td>
            </tr>
        </table>
    </div>
    <hr>
    <!--Table-->
    <div style="margin-left:10%; margin-right: 10%; margin-top: 10pt">
    <table>
        <!--Thead-->
        <tr>
            <td style="padding: 10pt;"><h3>RANKING</h3></td>
            <td style="padding: 10pt;"><h3>NIS</h3></td>
            <td style="padding: 10pt;"><h3>NAMA</h3></td>            
            <?php
            if($_GET['mode']=='all' || $_GET['mode']=='admin'){
            ?>
            <td style="padding: 10pt;"><h3>RATA-RATA</h3></td>
            <td style="padding: 10pt;"><h3>IPS</h3></td>
            <td style="padding: 10pt;"><h3>IPA</h3></td>
            <td style="padding: 10pt;"><h3>PKN</h3></td>
            <?php
            } ?>
            <?php
            if($_GET['mode']=='ips'){
            ?>            
            <td style="padding: 10pt;"><h3>NILAI IPS</h3></td>            
            <?php
            } ?>
            <?php
            if($_GET['mode']=='pkn'){
            ?>            
            <td style="padding: 10pt;"><h3>NILAI PKN</h3></td>            
            <?php
            } ?>
            <?php
            if($_GET['mode']=='ipa'){
            ?>            
            <td style="padding: 10pt;"><h3>NILAI IPA</h3></td>            
            <?php
            } ?>
        </tr>
        <!--Trows-->
        <?php
        include 'template/connectDB.php';        

        if($_GET['mode']=='all' || $_GET['mode']=='admin'){
            include 'template/getSiswaByAll.php';
            foreach($arr_data as $col){            
        ?>
        <tr>
            <td style="padding: 10pt;"><p><?=$col[0]?></p></td>        
            <td style="padding: 10pt;"><p><?=$col[1]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[2]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[3]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[4]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[5]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[6]?></p></td>        
        <?php 
            }
        } ?>
        <?php
        if($_GET['mode']=='ipa'){
            include 'template/getSiswaByNIPA.php';
            foreach($arr_data as $col){            
        ?>
        <tr>
            <td style="padding: 10pt;"><p><?=$col[0]?></p></td>        
            <td style="padding: 10pt;"><p><?=$col[1]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[2]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[3]?></p></td>                       
        <?php 
            }
        } ?>
        <?php
        if($_GET['mode']=='ips'){
            include 'template/getSiswaByNIPS.php';
            foreach($arr_data as $col){            
        ?>
        <tr>
            <td style="padding: 10pt;"><p><?=$col[0]?></p></td>        
            <td style="padding: 10pt;"><p><?=$col[1]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[2]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[3]?></p></td>                       
        <?php 
            }
        } ?>
        <?php
        if($_GET['mode']=='pkn'){
            include 'template/getSiswaByNPKN.php';
            foreach($arr_data as $col){            
        ?>
        <tr>
            <td style="padding: 10pt;"><p><?=$col[0]?></p></td>        
            <td style="padding: 10pt;"><p><?=$col[1]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[2]?></p></td>    
            <td style="padding: 10pt;"><p><?=$col[3]?></p></td>                       
        <?php 
            }
        } ?>
    </table>
    </div>
    <hr>
    <?php
    if($_GET['mode']=='admin'){ ?>
    <!--Form Admin-->
    <div style="margin-top: 10pt; margin-left: 10pt; margin-right: 10pt;">
        <h2>Tambah Siswa</h2>
        <br>
        <form action="template/insertSiswa.php" method="POST">
            <p>NIS (5 Karakter)</p>
            <input type="text" name="nis" id="nis">
            <p>Nama</p>
            <input type="text" name="nama" id="nama">
            <p>Nilai IPA</p>
            <input type="text" name="nipa" id="nipa">
            <p>Nilai IPS</p>
            <input type="text" name="nips" id="nips">
            <p>Nilai PKN</p>
            <input type="text" name="npkn" id="npkn">
            <br><br>
            <input type="submit" value="Tambah Siswa">
        </form>
    </div>
    <hr>
    <?php 
    } ?>
    <br><br>
    <!--Credits-->
    <p style="text-align: center;">@ 2024 | FARHAN FADILLAH HARAHAP | MAXY ACADEMY BE BATCH 6</p>
    <br>
    
</body>
