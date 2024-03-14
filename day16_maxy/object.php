<?php

class Book{
    public $id, $title, $author, $releaseDate, $genre;

    function __construct($id, $title, $author, $releaseDate, $genre){
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->releaseDate = $releaseDate;
        $this->genre = $genre;
        
    }

    function getBookDetail(){
        echo "
            <td class='p-2'>$this->id</td>
            <td class='p-2'>$this->title</td>
            <td class='p-2'>$this->author</td>
            <td class='p-2'>$this->releaseDate</td>
            <td class='p-2'>$this->genre</td>
        ";
    }
}

class Library{
    public $book_id = [];
    public $location = [];

    function addBook($book, $location){
        array_push($this->book_id, $book);
        array_push($this->location, $location);
    }

    function getBookAll(){
        foreach($this->book_id as $book){
            echo "<tr>";
            $book->getBookDetail();            
            echo "<tr>";
        }
    }
}


?>