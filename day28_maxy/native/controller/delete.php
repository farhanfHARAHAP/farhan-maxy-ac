<?php

include 'functions.php';

try{
    $id = $_GET['id'];
    destroyCitizen($id);
    header('Location: ../index.php?alert='.'Successfully deleted a citizen data!');
}catch(Exception){
    header('Location: ../index.php?alert='.'There is error when trying to delete a citizen data');
}