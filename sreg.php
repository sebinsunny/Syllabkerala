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
                        <form accept-charset="utf-8" action="signup.php" class="form-horizontal" method="post" role="form">                           
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Firstname</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="firstname" placeholder="First name" required="" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Lastname</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="lastname" placeholder="First name" required="" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Phone</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="phone" placeholder="First name" required="" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Address</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="address" placeholder="First name" required="" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">College</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="College" placeholder="Enter college name" required="" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Semester</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="sem" placeholder="Enter semester" required="" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Admission No.</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="admission" placeholder="First name" required="" type="text" value="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-lg-3 control-label">Email</label> 
                                    <div class="col-lg-8">
                                    <input class="form-control" name="email" placeholder="Enter your email" required="" type="text" value="">
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
                                    <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
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