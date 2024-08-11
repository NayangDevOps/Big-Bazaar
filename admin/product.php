<?php

//error_reporting(0);
include("include/connection.php");
?>
<?php
	$pro_cat = '';
	$pro_tp = '';
    $pro_nm = '';
	$pro_br = '';
	$pro_sz = '';
	$pro_cr = '';
    $pro_qty = '';
    $pro_pr = '';
    $pro_det = '';
	$pro_image = '';
	
	if(isset($_GET['editid']))
	{
		
		$selct_update = "select * from product where id = '".$_GET['editid']."'";
		$selct_update_result = mysqli_query($con,$selct_update);
		$row = mysqli_fetch_array($selct_update_result);
		
        $pro_cat = $row['product_category'];
        $pro_tp = $row['product_type'];
        $pro_nm = $row['product_name'];
		$pro_br = $row['product_brand'];
		$pro_sz = $row['product_size'];
        $pro_cr = $row['product_color'];
        $pro_qty = $row['product_qty'];
		$pro_pr = $row['product_price'];
		$pro_det = $row['product_details'];
		$pro_image = $row['product_image'];
	}
?>
<?php
	if(isset($_POST['submit_product']))
	{
        if($_GET['action']=='edit')
        {
            $pro_cat = $_POST['pro_cat'];
            $pro_tp = $_POST['pro_tp'];
            $pro_nm = $_POST['pro_nm'];
            $pro_br = $_POST['pro_br'];
            $pro_sz = $_POST['pro_sz'];
            $pro_cr = $_POST['pro_cr'];
            $pro_pr = $_POST['pro_pr'];
            $pro_qty = $_POST['pro_qty'];
            $pro_det =$_POST['pro_det'];

            if($_FILES['pro_image']['name'] != '')
			{
				$cat_file=$_FILES['pro_image']['name'];
				$img_path="uploads/".$cat_file;
				move_uploaded_file($_FILES['pro_image']['tmp_name'],$img_path);			
				$img=$_FILES['pro_image']['name'];
					
				if($img != '')
				{
					unlink('uploads'.$_POST['imgId']);
				}
				if($img == '')
				{
					$img=$_POST['imgId'];
				}
			}
			else
			{
				$cat_file=$_POST['imgId'];
			}
			
            $update_query = "UPDATE product SET product_category='".$pro_cat."',product_type='".$pro_tp."'
    , product_name='".$pro_nm."', product_brand='".$pro_br."', product_size='".$pro_sz."'
    , product_color='".$pro_cr."', product_price='".$pro_pr."', product_qty='".$pro_qty."'
    , product_details='".$pro_det."', product_image='".$pro_image."' WHERE id='".$_GET['editid']."'";

            $result = mysqli_query($con,$update_query);
            if($result){
                echo"<script language='javascript'>alert('Record Update Successfully.');</script>";
                echo"<script language='javascript'>document.location='view_product.php';</script>";
            }else{
                echo"<script language='javascript'>alert('Record Not Update Successfully.');</script>";
            }
            
        }
    
	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Quixlab</title>
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
                                <h4 class="card-title">Add Product Form</h4>
                                <div class="basic-form">
                                    <form method="post" action="product.php" enctype="multipart/form-data">
                                        
                                    <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <label class="mr-sm-2">Category</label>
                                                <select class="custom-select mr-sm-2" id="pro_cat" name="pro_cat">
                                                    <?php if(isset($_GET['editid'])) { ?>
					                                    <option value="<?php echo $pro_cat;?>" selected="selected"><?php echo $pro_cat;?></option>
					                                <?php } ?>
                                                    <option>Choose...</option>
                                                    <option value="Traditional">Traditional</option>
                                                    <option value="Formal">Formal</option>
                                                </select>
                                            </div>
                                    </div><br>

                                        <div class="form-row align-items-center">
                                            <div class="col-auto my-1">
                                                <label class="mr-sm-2">Type</label>
                                                <select class="custom-select mr-sm-2" id="pro_tp" name="pro_tp">
                                                    <?php if(isset($_GET['editid'])) { ?>
					                                    <option value="<?php echo $pro_tp;?>" selected="selected"><?php echo $pro_tp;?></option>
					                                <?php } ?>
                                                    <option>Choose...</option>
                                                    <option value="Kurta Pajama">Kurta Pajama</option>
                                                    <option value="Sherwani">Sherwani</option>
                                                    <option value="Salwar-Kameez">Salwar-Kameez</option>
                                                    <option value="Paint">Paint</option>
                                                    <option value="Shirt">Shirt</option>
                                                </select>
                                            </div>
                                        </div><br>


                                        <div class="form-group">
                                            <label>Product Name</label>
                                            <input type="text" id="pro_nm" value="<?php echo $pro_nm; ?>" class="form-control input-default" name="pro_nm" placeholder="Enter Product Name">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Brand </label>
                                            <input type="text" id="pro_br" value="<?php echo $pro_br; ?>" class="form-control input-default" name="pro_br" placeholder="Enter Product Type">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Size</label>
                                            <input type="text" id="pro_sz" value="<?php echo $pro_sz; ?>" class="form-control input-default" name="pro_sz" placeholder="Enter Product size">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Color</label>
                                            <input type="text" id="pro_cr" value="<?php echo $pro_cr; ?>" class="form-control input-default" name="pro_cr" placeholder="Enter Product price">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Qty</label>
                                            <input type="text" id="pro_qty" value="<?php echo $pro_qty; ?>" class="form-control input-default" name="pro_qty" placeholder="Enter Product price">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Price</label>
                                            <input type="text" id="pro_pr" value="<?php echo $pro_pr; ?>" class="form-control input-default" name="pro_pr" placeholder="Enter Product price">
                                        </div>

                                        <div class="form-group">
                                            <label>Product Details</label>
                                            <textarea class="form-control h-150px" rows="6" id="pro_det" name="pro_det" placeholder="Enter Product Details"><?php echo $pro_det; ?>
											</textarea>
                                        </div>
  
                                        <div>
                                            <label>Product Image</label><br>
                                            <input type="file" id="pro_image" name="pro_image"  value="<?php echo $pro_image ?>" >
										</div><br> 
                                           
                                        <?php
					                    if(isset($_GET['editid'])&&$_GET['action']=='edit')
					                    { ?>
                                        
                                        <input type="submit" name="submit_product" id="submit_product" value="Update" class="btn btn-dark m-t-20">
                                        <input type="hidden" name="action" id="action" value="edit" />
                                         <input type="hidden" name="id" id="id" value="<?php echo $_GET['editid'];?>   "/>
                                        <input type="hidden" name="imgId" id="imgId" value="<?php echo $pro_image;?>" />
                                        <?php
                                        }
                                        else
                                        {?>
                                        <input type="submit" name="submit_product" id="submit_product" value="Save Product" class="btn btn-dark m-t-20">
                                        <?php
				}
				?>
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
        *******************************q
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