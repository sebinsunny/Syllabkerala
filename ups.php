<?php
  
    //$file_path = "up/";
     $file_name = $_FILES['uploaded_file']['name'];
		$file_size =$_FILES['uploaded_file']['size'];
		$file_tmp =$_FILES['uploaded_file']['tmp_name'];
		$file_type=$_FILES['uploaded_file']['type'];   
		

if($file_size > 2097152){
		$errors[]='File size must be excately 2 MB';
		}				
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"up/".$file_name);
			echo "Success";
			//$a="INSERT INTO jose(file)VALUES('http://syllabkerala.in/upload/$file_name')";
			$b=mysqli_query($conn,$a);
		}else{
			print_r($errors);
		}



   // $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    //if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path) ){
      //  echo "success";
    //} else{
      //  echo "fail";
    //}
 ?>