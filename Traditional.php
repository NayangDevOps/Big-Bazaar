<?php
	include('admin/include/connection.php');
?>

<em></em><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Big Bazzar</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">  

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    
    <!-- Topbar End -->


    <!-- Navbar Start -->
    
    <!-- Navbar End -->

<?php include("include/header.php") ?>
    <!-- Carousel Start -->
    <div class="container-fluid mb-3">
        <div class="row px-xl-5">
            <div class="col-lg-12">
                <div id="header-carousel" class="carousel slide carousel-fade mb-30 mb-lg-0" data-ride="carousel">
                    	
                    <div class="carousel-inner">
                        <div class="carousel-item position-relative active" style="height: 430px;">
                            <img class="position-absolute w-100 h-100" src="img/carousel-2.jpg" style="object-fit: cover;">
                            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Featured Start -->
    
    <!-- Featured End -->


    <!-- Categories Start -->
    
    <!-- Categories End -->

	
    <!-- Products Start -->
    <div class="container-fluid pt-5 pb-3">
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3">Traditional Products</span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <?php 
					$view_Category = "select * from product where product_type='Sherwani'";
					$result = mysqli_query($con,$view_Category);
					
					if(mysqli_num_rows($result)>0)
					{
						$i=1;
						while($row = mysqli_fetch_array($result))
						{
				?>											        
                <div class="product-item bg-light mb-4">
                    <div class="product-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="admin/uploads/<?php echo $row['product_image']; ?>" alt="">
                        
                    </div>
                    <div class="text-center py-4">
                        
                        <div class="d-flex align-items-center justify-content-center mt-2">
                            <h5>RS.<?php echo $row['product_price']; ?></h5>
                        </div>
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <h5>For Check</h5>
                        </div>
                    </div>
                </div>
                <?php 
							$i++; 
						}
					}
				?>
            </div>
        </div>
    </div>
    <!-- Products End -->


    <!-- Offer Start -->
    
    <!-- Offer End -->


    <!-- Products Start -->
  
    <!-- Products End -->


    <!-- Vendor Start -->
    
    <!-- Vendor End -->


    <!-- Footer Start -->
    <?php include("include/footer.php");?>
    <!-- Footer End -->
    


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>