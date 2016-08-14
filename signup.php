<?PHP
    include_once("connection.php");

if(isset($_POST['firstname']) && isset($_POST['phone']) && 
   isset($_POST['address']) && isset($_POST['email']) && isset($_POST['password'])){
    $a = $_POST['firstname'];
    $b = $_POST['phone'];
    $c = $_POST['address'];
    $d = $_POST['email'];
     $e = $_POST['password'];

    $query ="INSERT INTO college(cname,cphone,caddress,cemail,cpassword) 
    VALUES ('$a','$b','$c','$d','$e')"; 
    
    $result = mysqli_query($conn, $query);

    if($result > 0){
        if(isset($_POST['mobile']) && $_POST['mobile'] == "android"){
            echo "success";
            exit;
        }
        //echo "Insert Successfully";   
    }
    else{
        if(isset($_POST['mobile']) && $_POST['mobile'] == "android"){
            echo "failed";
            exit;
        }
        echo "Something Error";   
    }
}
    
?>





















<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Assistant Application</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="signup.css">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>





<div class="container" id="wrap">
	  <div class="row">
      <br>
      <br>
        
            <form action="<?PHP $_PHP_SELF ?>" method="post" accept-charset="utf-8" class="form" role="form" >   <legend>Sign Up</legend>
                   
                    <div  class="row">
                        <div class="col-xs-8 col-md-8">
                         <label>Institution</label> 
                            <input type="text" name="firstname" value="" class="form-control input-lg" placeholder=" Name of the college"  />                        
                       <!-- <div class="col-xs-6 col-md-6">
                        <!    <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name" />   -->                     </div>
 <div class="col-xs-8 col-md-8">
                     <label>Phone</label> 
                    <input type="text" name="phone" value="" class="form-control input-lg" placeholder="phone no"  />
                    </div>
                     <div class="col-xs-8 col-md-8">
                     <label>Address</label> 
                    <input type="text" name="address" value="" class="form-control input-lg" placeholder="Address"  />
                    </div>



                    <div class="col-xs-8 col-md-8">
                     <label>Username</label> 
                    <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  />
                    </div>
                    <div class="col-xs-8 col-md-8">
                     <label>Password</label> 
                    <input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  />
                    </div>

                                        <div class="col-xs-8 col-md-8" ><input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password" />  
                                        </div>                 
                     <div class="col-xs-8 col-md-8">
                    <!-- <label>Birth Date</label>   </div>                 <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select name="month" class = "form-control input-lg">
<option value="01">Jan</option>
<option value="02">Feb</option>
<option value="03">Mar</option>
<option value="04">Apr</option>
<option value="05">May</option>
<option value="06">Jun</option>
<option value="07">Jul</option>
<option value="08">Aug</option>
<option value="09">Sep</option>
<option value="10">Oct</option>
<option value="11">Nov</option>
<option value="12">Dec</option>
</select>                        </div>
                      
                    </div>
                     <label>Gender : </label>                    <label class="radio-inline">
                        <input type="radio" name="gender" value="M" id=male />                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="F" id=female />                        Female
                    </label>-->
                    <br />
              <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                    <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                        Create my account</button>
            </form>          
          </div>
</div>            
</div>
</div>
</body>
</html>