<!--<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <center>
    <div class="wrapper">
        <h2>Apply For Leave</h2>
        <p>Please fill this form to apply for leave.</p>
        <form action="reason.php" method="GET">
            <div class="form-group ">
                <label>Username</label>
                <input type="text" name="username" class="form-control"  placeholder="Enter the name" required>
            </div>  
            <div class="form-group ">
            <label> Subject</label>
            <input type="text" name="subject" class="form-control"  placeholder="Enter the subject" required>
            </div>
            <div>
                <label>Reason</label>
                <textarea rows="4" cols="50" name="reason" class="form-control" placeholder="Enter a valid reason" required>
                </textarea><br>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
            </div>
        </form>
    </div>  
    </center>
</body>
</html>-->

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Apply Leave</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<form action="reason.php">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-55">
						Apply for leave
					</span>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="form-group ">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"  placeholder="Enter the name" required>
                    </div>  
                    <div class="form-group ">
                    <label> Subject</label>
                    <input type="text" name="subject" class="form-control"  placeholder="Enter the subject" required>
                    </div>
                    <div>
                    <label>Reason</label>
                    <textarea rows="4" cols="50" name="reason" class="form-control" placeholder="Enter a valid reason" required>
                    </textarea><br>
                    </div>
					<div class="form-group">
                    <input type="submit" class="btn btn-primary" value="Submit">
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
    
	