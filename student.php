<?PHP
    include_once("connection.php");
    $flag = '';
    $success = '';

if($_POST){
    $a = $_POST['firstname'];
    $b = $_POST['lastname'];
    $c = $_POST['phone'];
    $d= $_POST['address'];
    $e = $_POST['college'];
    $f = $_POST['sem'];
    $g = $_POST['admission'];
    $h= $_POST['email'];
    $i = $_POST['username'];
    $j = $_POST['password'];
   

    $query = "INSERT INTO student(firstname, lastname, phone, address,college,sem,admission,email,username,password) 
    VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')"; 
    
    $result = mysqli_query($conn, $query);

    if($result > 0){
        if(isset($_POST['mobile']) && $_POST['mobile'] == "android"){
            echo "success";
            exit;
        }
        $success = 1;   
    }
    else{
        if(isset($_POST['mobile']) && $_POST['mobile'] == "android"){
            echo "failed";
            exit;
        }
        $flag = 1; 
    }
}
    
?>
<!DOCTYPE html>
<html lang="en">

<?php 

include 'head_tag.php';

?>

<body>

<?php
include 'header.php';

?>

    <div class="container">
        <div class="row">
            <div class="col-lg-7 center-block">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        Signup!
                    </div>                    
                    <div class="panel-body padding">
                    <?php if($flag==1): ?>
                        <div id="login-alert" class="alert alert-danger alert-dismissible col-sm-12">Username already in use!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                    <?php endif; ?>
                    <?php if($success==1): ?>
                        <div id="login-alert" class="alert alert-success alert-dismissible col-sm-12">Registration success!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                        </div>
                    <?php endif; ?>
                        <form class="form-horizontal" method="post">                           
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Name</label>
                                    <div class="row"> 
                                        <div class="col-lg-4">
                                            <input class="form-control" name="firstname" placeholder="First name" required="" type="text" value="">
                                        </div>
                                        <div class="col-lg-4">
                                            <input class="form-control" name="lastname" placeholder="Last name" required="" type="text" value="">
                                        </div>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="phone" placeholder="+91 9123456789" required="" type="number" value="">
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="email" placeholder="Enter your email" required="" type="email" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Username</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="username" placeholder="Enter desired username" required="" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Password</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="password" placeholder="Enter password " required="" type="password" value="">
                                    </div>
                                </div>                                                                                                
                                <div class="form-group">                            
                                    <div class=" col-lg-8 col-lg-offset-3">
                                        <span class="help-block"><p class="text-danger">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</p></span>
                                    </div>
                                </div><button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">Create my account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>