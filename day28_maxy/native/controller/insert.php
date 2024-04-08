<?php

include 'functions.php';

try{
    $input = [
        'name'=>$_POST['name'],
        'age'=>$_POST['age'],
        'address'=>$_POST['address'],
        'job'=>$_POST['job'],
    ];
    createCitizen($input['name'], $input['age'], $input['address'], $input['job']);
    header('Location: ../index.php?alert='.'Successfully registered new citizen!');
} catch (Exception){
    header('Location: ../index.php?alert='.'Failed to register new citizen! Invalid input.');
}
