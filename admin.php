<?PHP
include_once("connection.php"); 
   session_start();
$flag = '';
if(isset($_POST['tusername']) && isset($_POST['tpassword'])){
    
    $username = $_POST['tusername'];
    $password = $_POST['tpassword'];
    $query = "SELECT * FROM admin WHERE name = '$username' 
        AND password = '$password'";

    $result = mysqli_query($conn, $query);
    if($result->num_rows > 0){ //has record. correct username and password
        $_SESSION['admin'] = $username;
        header("Location: content.php");
        exit;
    }
    else{
        $flag = 1;
    }
}
?>

<html lang="en">

<?php
include('head_tag.php');
?>
<body>

<?php
include('header.php');
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-5 center-block">
                    <?php if($flag==1): ?>
                        <div id="login-alert" class="alert alert-danger col-sm-12">Login Failed! Invalid Credentials</div>
                    <?php endif; ?>
                <form form action="" method="post" class="form-signin">
                    <h2 class="form-signin-heading">Please sign in</h2>
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input type="text" name="tusername" id="inputEmail" class="form-control" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="tpassword" id="inputPassword" class="form-control" placeholder="Password" required>
                        </div>
                        <div class="checkbox">
                          <label>
                            <input type="checkbox" value="remember-me"> Remember me
                          </label>
                        </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                </form>
                <br>
               
            </div>
        </div>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
          
</body>
