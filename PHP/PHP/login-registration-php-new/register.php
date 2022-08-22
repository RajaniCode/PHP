<?php 

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL</title>
        <link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="jquery-3.1.1.min/jquery-3.1.1.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>	
    </head>

    <body>
        <div class="container"> 
            <div id="login-form">		
			    <form method="post" action="/signup-login/register.php" autocomplete="off">			
                    <div class="col-md-12">					
						<div class="form-group">
							<h2 class="">Sign Up.</h2>
						</div>

						<div class="form-group">
						   <hr />
						</div>	
						
						<div class="form-group">
							<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="" />
							</div>
							<span class="text-danger"></span>
						</div>

						<div class="form-group">
							<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
							<input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="" />
							</div>
							<span class="text-danger"></span>
						</div>

						<div class="form-group">
							<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
							<input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />
							</div>
							<span class="text-danger"></span>
						</div>

						<div class="form-group">
							<hr />
						</div>

						<div class="form-group">
							<button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
						</div>

						<div class="form-group">
							<hr />
						</div>

						<div class="form-group">
						<a href="index.php">Sign in Here...</a>
					</div>

				</div>
			    </form>        
		    </div>
        </div>
    </body>
</html>