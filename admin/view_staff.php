<?php
    include("include/connection.php");
?>

<?php

    if(isset($_GET['delid']))
    {

       
		
        $delete_query = "delete from staff where id = '".$_GET['delid']."'";
		$delete_result = mysqli_query($con,$delete_query);
        echo "<script language='javascript'>alert('Record Delete Successfully')</script>";
		echo "<script language='javascript'>document.location='view_staff.php'</script>";
	
    }
?>
<!DOCTYPE html>
<html lang="en">
<script language="javascript">
	function deletethis()
	{
		var ans = confirm('Confirm that you want to delete this record !');
		if(ans == true)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
</script>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Big Bazzar</title>
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

            <div class="row page-titles mx-0">
                <div class="col p-md-0">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                        <li class="breadcrumb-item active"><a href="javascript:void(0)">Home</a></li>
                    </ol>
                </div>
            </div>
            <!-- row -->

            <div class="container-fluid">
                <div class="row">
                    
                    <!-- /# column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">
                                    <h4>Staff Table</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Staff Member Name</th>
                                                <th>Gender</th>
                                                <th>Staff Contact</th>
                                                <th>Staff Email</th>
                                               	<th>Staff Address</th>
												<th>Staff Qualification</th>
                                                <th>Experience</th>
                                                
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                            <?php
                                                    $q = "select * from staff";
                                                    $r = mysqli_query($con,$q);  
                                                    if(mysqli_num_rows($r)>0)
                                                    {
                                                        $i=1;
                                                        while($row = mysqli_fetch_array($r))
                                                        {
                                                    
                                            ?>
                                            <tr>
                                                <td><?php echo $i; ?></td>
                                                <td><?php echo $row['staff_name']; ?></td>
                                                <td><?php echo $row['staff_gender']; ?></td>
                                                <td><?php echo $row['staff_contact']; ?></td>
                                                <td><?php echo $row['staff_email']; ?></td>
                                               	<td><?php echo $row['staff_address']; ?></td>
                                                <td><?php echo $row['staff_qualification']; ?></td>
                                                <td><?php echo $row['staff_experience']; ?></td>
                                                <td>
                                                
													<a href="staff.php?editid=<?php echo $row['id']?>"><span class="badge badge-primary px-2">Edit</span></a>
                                                
													<a href="view_staff.php?delid=<?php echo $row['id']?>" onClick="return deletethis();"><span class="badge badge-danger px-2">Delete</span></a>
                                                </td>

                                            </tr>
                                            <?php
													$i++;
												}
											}
											else
											{
												echo '
													<tr>
														<td colspan="12" align="center">No Records Found</td>
													</tr>';
											}
											?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                    
                    
                    
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
        ***********************************-->
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