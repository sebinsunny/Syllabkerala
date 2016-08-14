<?php
        include_once("connection.php");


    if(isset($_POST['submit'])){
    //echo "hai";
$a = $_POST['branch'];
$b = $_POST['sem'];
$c = $_POST['yer'];
//$b = $_POST['branch'];

  // Storing Selected Value In Variable
echo "You have selected :" .$a;
echo "You have selected :" .$b;
echo "You have selected :" .$c;  // Displaying Selected Value
}


  $query ="DELETE FROM subject WHERE branch='$a' AND sem='$b' AND year='$c' "; 
    
    $result = mysqli_query($conn, $query);
 header("Location: qdeletion.html");









       
        ?>
