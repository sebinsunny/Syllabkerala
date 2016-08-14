<?PHP
    include_once("connection.php");

    $query = "SELECT sem FROM data"; 
    
    $result = mysqli_query($conn, $query);
    
    while($row = mysqli_fetch_assoc($result)){

            $data[] = $row;
    }
    echo json_encode($data);
?>