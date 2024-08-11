<?php

error_reporting(0);
include("include/connection.php");
?>
<?php
	$st_nm = '';
	$st_gd = '';
	$st_ct = '';
	$st_email = '';
	$st_ad = '';
	$st_qt = '';
    $st_ex = '';
    
	
	if(isset($_GET['editid']))
	{
		
		$selct_update = "select * from staff where id = '".$_GET['editid']."'";
		$selct_update_result = mysqli_query($con,$selct_update);
		$row = mysqli_fetch_array($selct_update_result);
		
		$st_nm = $row['staff_name'];
		$st_gd = $row['staff_gender'];
		$st_ct = $row['staff_contact'];
		$st_email = $row['staff_email'];
		$st_ad = $row['staff_address'];
		$st_qt = $row['staff_qualification'];
        $st_ex = $row['staff_experience'];
	}
?>
<?php
	if(isset($_POST['submit']))
	{
		
    	$st_nm = $_POST['st_nm'];
    	$st_gd = $_POST['st_gd'];
    	$st_ct = $_POST['st_ct'];
    	$st_email = $_POST['st_email'];
    	$st_ad =$_POST['st_ad'];
        $st_qt =$_POST['st_qt'];
        $st_ex =$_POST['st_ex'];
   
    	$insert_staff_query = "insert into staff(staff_name,staff_gender,staff_contact,staff_email,staff_address,staff_qualification,staff_experience) values('".$st_nm."','".$st_gd."','".$st_ct."','".$st_email."','".$st_ad."','".$st_qt."','". $st_ex."')";
    	$result_insert_query = mysqli_query($con,$insert_staff_query);
    
		echo"<script language='javascript'>alert('Record Inserted Successfully.');</script>";
		echo"<script language='javascript'>document.location='view_staff.php';</script>";
		
	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab - Bootstrap Admin Dashboard Template by Themefisher.com</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <?php include("include/topbar.php"); ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <?php include("include/sidebar.php"); ?>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                
                
                <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Add Staff Form</h4>
                                <div class="basic-form">
                                    <form method=post action="staff.php" enctype="multipart/form-data">
                                        
                                                                        
                                        <div class="form-group">
                                            <label>Staff Member Name</label>
                                            <input type="text" id="st_nm" value="<?php echo $st_nm; ?>" class="form-control input-default" name="st_nm" placeholder="Enter Staff Member Name">
                                        </div>

                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <label class="mr-sm-2">Gender</label>
                                                <select class="custom-select mr-sm-2" id="st_gd" name="st_gd">
                                                    <?php if(isset($_GET['editid'])) { ?>
					                                    <option value="<?php echo $st_gd;?>" selected="selected"><?php echo $st_gd;?></option>
					                                <?php } ?>
                                                    <option>...Choose...</option>
                                                    <option value="Male">Male</option>
                                                    <option value="Female">Female</option>
                                                </select>
                                            </div>
                                    </div><br>


                                        <div class="form-group">
                                            <label>Staff Contact</label>
                                            <input type="text" id="st_ct" value="<?php echo $st_ct; ?>" class="form-control input-default" name="st_ct" placeholder="Enter Staff Contact">
                                        </div>

                                        <div class="form-group">
                                            <label>Staff Email</label>
                                            <input type="text" id="st_email" value="<?php echo $st_email; ?>" class="form-control input-default" name="st_email" placeholder="Enter Staff Email">
                                        </div>
                                    
										<div class="form-group">
                                            <label>Staff Address</label>
                                            <textarea class="form-control h-150px" rows="6" id="st_ad" name="st_ad" placeholder="Enter Staff Address"><?php echo $st_ad; ?>
											</textarea>
                                        </div>

                                        <div class="form-group">
                                            <label> Staff Qualification</label>
                                            <input type="text" id="st_qt" value="<?php echo $st_qt; ?>" class="form-control input-default" name="st_qt" placeholder="Enter Staff Qualification">
                                        </div>

                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <label class="mr-sm-2">Experience</label>
                                                <select class="custom-select mr-sm-2" id="st_ex" name="st_ex">
                                                    <?php if(isset($_GET['editid'])) { ?>
					                                    <option value="<?php echo $st_ex;?>" selected="selected"><?php echo $st_ex;?></option>
					                                <?php } ?>
                                                    <option>...Choose...</option>
                                                    <option value="1 Year">1 Year</option>
                                                    <option value="2 Year">2 Year</option>
                                                    <option value="3 Year">3 Year</option>
                                                    <option value="4 Year">4 Year</option>
                                                    <option value="More Than 5 Year">More Than 5 Year</option>
                                                </select>
                                            </div>
                                    </div><br>

                                        
                                        <input type="submit" name="submit" id="submit" class="btn btn-dark m-t-20">


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>   
                    
                </div>
            
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <!--**********************************
            Footer end
        *******************************
        ****-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

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