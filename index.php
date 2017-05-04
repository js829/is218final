<!DOCTYPE html>
<html lang="en">
<head> 
<?php include ('view/header.php'); ?> 

        <title>List Maker</title>
    </head>
    <body>
    		<form action="#" method="post">
			<?php include 'login.php';	?>


        <div class="container">
            <div class="row main">
                <div class="panel-heading">
                   <div class="panel-title text-center">
                        <center><h1 class="title">To-Do List Maker</h1></center>
                        <hr />
                    </div>
                </div> 
                <div class="main-login main-center">
                    <form class="form-horizontal" method="post" action="#">
                        
                        <center><div class="form-group">
                            <label for="email" class="cols-sm-2 control-label"><strong>Username:</strong></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
                                    <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your Username"/></center>
                                <br>
                        <center><div class="form-group">
                            <label for="password" class="cols-sm-2 control-label"><strong>Password:</strong></label>
                            <div class="cols-sm-10">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                    <input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/></center> <br>
						
                           
                            <center><div class="form-group ">
                                <input type="submit" value="Login" name="submit" id="button" class="btn btn-primary btn-lg btn-block login-button"></input></center>

                                <center><p><strong> Or </strong></p></center>
                        
                        <center><div class="form-group ">
                            <button type="button" class="btn btn-primary btn-lg btn-block login-button"><strong><a href="signup.php">Create New Account</a></strong></button></center>
                        </div>

                        <div class="login-register">
                        <href="register.php">
                    </form>
                </div>
            </div>
        </div>
        <br>
        </body>
        </html> 

<?php include ('view/footer.php'); ?> 

        <script type="text/javascript" src="assets/js/bootstrap.js"></script>
