<?php

include 'object.php';
$library = new Library();

$book = new Book(
    1,
    "Buku Sejarah SD/MI",
    "Dimas",
    "2021",
    "Pendidikan"
);
$library->addBook($book, "Gedung A");

$book = new Book(
    2,
    "Buku Komputer dan Komunikasi",
    "Syandra",
    "2022",
    "Teknologi dan Sains"
);
$library->addBook($book, "Gedung B");

$book = new Book(
    3,
    "Majalah Pemuda Desa",
    "Parman",
    "2023",
    "Gaya Hidup"
);
$library->addBook($book, "Gedung A");


?>