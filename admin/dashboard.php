<?php
//error_reporting(0);
include("include/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Big Bazzar</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/B.png">
    <!-- Pignose Calender -->
    <link href="./plugins/pg-calendar/css/pignose.calendar.min.css" rel="stylesheet">
    <!-- Chartist -->
    <link rel="stylesheet" href="./plugins/chartist/css/chartist.min.css">
    <link rel="stylesheet" href="./plugins/chartist-plugin-tooltips/css/chartist-plugin-tooltip.css">
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

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                            
                                <h3 class="card-title text-white">Traditional Product</h3>
                                <div class="d-inline-block">
                                   
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Sherwani</h3>
                                <?php
                                    $qs = "select * from product where product_type='Sherwani'";
                                    $rs = mysqli_query($con,$qs); 
                                    $rows = mysqli_num_rows($rs)
                                ?>
                                <div class="d-inline-block">
                                    
                                    <p class="text-white mb-0"><?php echo $rows; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Kurta Pajama</h3>
                                <?php
                                    $qkp = "select * from product where product_type='Kurta Pajama'";
                                    $rkp = mysqli_query($con,$qkp); 
                                    $rowkp = mysqli_num_rows($rkp)
                                ?>
                                <div class="d-inline-block">
                                    
                                    <p class="text-white mb-0"><?php echo $rowkp; ?></p>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Salwaar Kameez</h3>
                                <?php
                                    $qsk = "select * from product where product_type='Salwaar Kameez'";
                                    $rsk = mysqli_query($con,$qsk); 
                                    $rowsk = mysqli_num_rows($rsk)
                                ?>
                                <div class="d-inline-block">
                                    
                                    <p class="text-white mb-0"><?php echo $rowsk; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                            
                            <h3 class="card-title text-white">Formal Product</h3>
                                
                                <div class="d-inline-block">
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Shirt</h3>
                                <?php
                                    $qs = "select * from product where product_type='Shirt'";
                                    $rs = mysqli_query($con,$qs); 
                                    $rows = mysqli_num_rows($rs)
                                ?>
  
                                <div class="d-inline-block">
                                <p class="text-white mb-0"><?php echo $rows; ?></p>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Paint</h3>
                                <?php
                                    $qp = "select * from product where product_type='Paint'";
                                    $rs = mysqli_query($con,$qp); 
                                    $rows = mysqli_num_rows($rs)
                                ?>
  
                                <div class="d-inline-block">
                                <p class="text-white mb-0"><?php echo $rows; ?></p>
                              </div>
                                
                            </div>
                        </div>
                    </div>
                    
                </div>


                

                

                
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; BIG BAZZAR 2022</p>
            </div>
        </div>
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

    <!-- Chartjs -->
    <script src="./plugins/chart.js/Chart.bundle.min.js"></script>
    <!-- Circle progress -->
    <script src="./plugins/circle-progress/circle-progress.min.js"></script>
    <!-- Datamap -->
    <script src="./plugins/d3v3/index.js"></script>
    <script src="./plugins/topojson/topojson.min.js"></script>
    <script src="./plugins/datamaps/datamaps.world.min.js"></script>
    <!-- Morrisjs -->
    <script src="./plugins/raphael/raphael.min.js"></script>
    <script src="./plugins/morris/morris.min.js"></script>
    <!-- Pignose Calender -->
    <script src="./plugins/moment/moment.min.js"></script>
    <script src="./plugins/pg-calendar/js/pignose.calendar.min.js"></script>
    <!-- ChartistJS -->
    <script src="./plugins/chartist/js/chartist.min.js"></script>
    <script src="./plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>



    <script src="./js/dashboard/dashboard-1.js"></script>

</body>

</html>