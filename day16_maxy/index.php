<head>
    <title>Perpustakaan | Farhan Maxy</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid ps-5 pt-5 pb-3" style="background-color: black;">
        <h1 style="color:white">Perpustakaan</h1>
    </div>

    <div class="container-fluid pt-5 ps-5 p-e-3">
        <h3>Daftar Buku Perpusatkaan</h3>
        <hr>
        <?php
        include 'init.php';
        ?>
        <table>
            <tr>
                <td class="p-2"><h4>ID</h4></td>
                <td class="p-2"><h4>Judul</h4></td>
                <td class="p-2"><h4>Penulis</h4></td>
                <td class="p-2"><h4>Terbit</h4></td>
                <td class="p-2"><h4>Genre</h4></td>
            </tr>
            <?php
            $library->getBookAll();
            ?>
        </table>
    </div>
</body>