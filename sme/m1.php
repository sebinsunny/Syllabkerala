<?php

 include_once("connection.php");

    $query = "SELECT * FROM syllabus WHERE branch='mechanical' AND sem='s3'"; 
    
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
    }
    echo json_encode($data);



?>