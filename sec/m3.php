<?php

 include_once("connection.php");

    $query = "SELECT * FROM subject WHERE branch='computer' AND sem='s5'"; 
    
    
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)){
            $data[] = $row;
    }
    echo json_encode($data);



?>