<?php

 include_once("connection.php");

    $query = "SELECT * FROM syllabus WHERE branch='civil' AND sem='s1'"; 
    
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
    }
    echo json_encode($data);



?>