<?php

function createCitizen($name, $age, $address, $job){    
    include 'connectDB.php';
    $sql = "INSERT INTO day28_citizens VALUES (null, '$name', $age, '$address', '$job')";
    $conn->query($sql);
    $conn->close();    
}

function destroyCitizen($id){
    include 'connectDB.php';
    $sql = "DELETE FROM day28_citizens WHERE id = $id";
    $conn->query($sql);
    $conn->close();    
}

function showCitizen(){
    include 'connectDB.php';
    $sql = "SELECT * FROM day28_citizens";
    $result = $conn->query($sql);
    $data = [];
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
        array_push($data,[
            'id'=>$row['id'],
            'name'=>$row['name'],
            'age'=>$row['age'],
            'address'=>$row['address'],
            'job'=>$row['job'],
        ]);
        }
        $conn->close();
        return $data;
    } else {
        return [];
    }
}