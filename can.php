<?PHP
include_once("connection.php"); 
if(isset($_POST['tusername']) && isset($_POST['tpassword'])){
    
    $username = $_POST['tusername'];
    $password = $_POST['tpassword'];
    $query = "SELECT * FROM student WHERE username = '$username' 
        AND password = '$password'";

    $result = mysqli_query($conn, $query);
    if($result->num_rows > 0){ //has record. correct username and password
        echo "success";
        exit;
    }
    else{
        echo "Wrong username and password"; 
        exit;
    }
}
?>


<html>
<head> <title>Student Assistant Application</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="s.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<link rel="stylesheet" type="text/css" href="admin.css"></head>
    <body>
         <div class="container">


 
          <div class="row">
        <form action="<?PHP $_PHP_SELF ?>" method="post">
            <br>
            <br>
            <br>
            <div class="table-responsive">
            
            <table class="table"  align="center">
                <tr>
                <br>
                <br>
                <td colspan="1" width="200px" align="center" >Username</td>
                <td><input type="text" name="tusername"  placeholder="myusername or mymail@mail.com"/></td>
                </tr>
                <tr>
                <td colspan="1" width="200px" align="center" >password</td>
                <td> <input name="tpassword" required="required" type="password" placeholder="eg. X8df!90EO" /></td>
                  </tr>
                  <br>
                  <br>
                  <tr>
                      <td colspan="1" width="200px" align="center" ><input type="submit" value="Submit" name="sub" class="btn btn-lg btn-primary"/></td>
                  </tr>
            </table>
            </div>
        </form>
        </div>
        </div>
    </body>
</html>