<?php 
	session_start();
	//error_reporting(0);
	include("include/connection.php");
	/*?>if(isset($_SESSION['session']))
	{
		echo "<script language='javascript'>document.location='dashboard.php'</script>" ;
		exit;
	}<?php */
?>
<?php
	$error = '';
	if(isset($_POST['submit']))
	{

    	$user_nm = $_POST['user_nm'];
    	$user_pass = $_POST['user_pass'];
    
    	$login_query = "select * from login where user_name='".$user_nm."' and user_pass='".$user_pass."' ";
    	$result_query = mysqli_query($con,$login_query);
		
		if(mysqli_num_rows($result_query) > 0)
		{
			$row = mysqli_fetch_array($result_query);
			$_SESSION['session'] = $row;
			echo "<script language='javascript'>document.location='dashboard.php';</script>";
		}
		else
		{
			$error = "Wrong Username or Password." ;
		}

	}

?>
<!DOCTYPE html>
<html class="h-100" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>BIG BAZZAR - LOGIN</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <link href="css/style.css" rel="stylesheet">
    
</head>

<body class="h-100">
    
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    



    <div class="login-form-bg h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100">
                <div class="col-xl-6">
                    <div class="form-input-content">
                        <div class="card login-form mb-0">
                            <div class="card-body pt-5">
                               <h4 class="text-center">BIG BAZZAR<br><br>LogIn</h4>
        						<br>
                                <?php if($error!='') { echo "<center><h3><div class='badge badge-danger px-2'>".$error."</div></h3></center>" ; } ?>                               
                                <br>
                                <form method="post" action="index.php" enctype="multipart/form-data">
                                  
                                <div class="form-group">
                                        <input type="text" id="user_nm" class="form-control" name="user_nm" placeholder="User Name">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="password" id="user_pass" class="form-control" name="user_pass" placeholder="Password">
                                    </div>
                                    <input type="submit" name="submit" id="submit" class="btn login-form__btn submit w-100" value="Log In">
                                </form>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>
</body>
</html>





