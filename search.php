<?php

@include 'connection.php';

session_start();


require 'config.inc.php';
if(isset($_SESSION['username'])){
    $email = $_SESSION['useremail'];
}

@include 'add_to_cart.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>search page</title>
   <script src="https://kit.fontawesome.com/72f30a4d56.js" crossorigin="anonymous"></script>
    <link rel="icon" href="favIcon.png" type="image/png">
    <link rel="stylesheet" href="css/stal2.css">
      <!-- Animate.css -->
      <link rel="stylesheet" href="./css/animate.css">

<!-- Icomoon Icon Fonts-->
<link rel="stylesheet" href="./css/icomoon.css">

<!-- Bootstrap  -->
<link rel="stylesheet" href="./css/bootstrap.css">

<!-- Flexslider  -->
<link rel="stylesheet" href="./css/flexslider.css">

<!-- Owl Carousel  -->
<link rel="stylesheet" href="./css/owl.carousel.min.css">
<link rel="stylesheet" href="./css/owl.theme.default.min.css">

<!-- Theme style  -->
<link rel="stylesheet" href="./css/style.css">

<!-- Modernizr JS -->
<script src="./js/modernizr-2.6.2.min.js"></script>

<!-- Favicon -->
<link rel="shortcut icon" href="./images/koselii.png" type="image/x-icon">

    <style>
        
        .error-container {
         /* text-align: center; */
         /* margin: 10px 0; */
         }

      .error-container.success {
         background-color: lightgreen;
          }

      .error-container.failed {
         background-color: lightcoral;
         }
    
    </style>
</head>
<body>
   
<?php @include 'header.php'; ?>

<section class="quick-view">
    <?php
    if(isset($_GET['error'])): ?>
        <?php
        $errorMessage = $_GET['error'];
        $errorClass = ($errorMessage === 'Product added to cart') ? 'success' : 'failed';
        ?>
        <div class="error-container <?php echo $errorClass; ?>">
            <p class="formerror"><?php echo $errorMessage; ?></p>
        </div>
    <?php endif; ?>


    <?php @include 'nav.php'; ?>


    <?php
        if(isset($_POST['search'])){
            ?>
            
            <div id="fh5co-product" class="product-screen-container">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span>Cool Stuff</span>
                <h2>Products.</h2>
            </div>
        </div>
        <div class="row productList">
        <?php 
            $sql = "SELECT * FROM products;";
            if($result = $conn -> query($sql)){
                if($result -> num_rows > 0){
                    while($row = $result -> fetch_array()){?>
            <div class="col-md-4 text-center">
                <div class="product">
                    <div class="product-grid" style="background-image:url(./images/products/<?php echo $row['productPhoto']?>);">
                    </div>
                    <div class="desc">
                        <h3><?php echo '<a href="./single.php?productID='. $row['productID'].'">'.$row['productName'].'</a>';?></h3>
                        <span class="price">Rs. <?php echo $row['productPrice'];?></span>
                        <form method="post">
                            <button type="submit" class="btn btn-success" name="add">Add To Cart</button>
                            <input type="hidden" name="productID" value="<?php echo $row['productID'];?>">
                            <?php echo '<a href="./single.php?productID='. $row['productID'].'" class="icon"><i class="icon-eye"></i></a>';?>
                        </form>
                    </div>
                </div>
            </div>
        <?php 
                    }
                }
            }
        ?>
        </div>
    </div>
</div>

        <!-- <input type="number" name="product_quantity" value="1" min="0" class="qty"><br/> -->
         <input type="hidden" name="product_id" value="<?php echo $fetch_products['productID']; ?>">
         <input type="hidden" name="product_name" value="<?php echo $fetch_products['productName']; ?>">
         <input type="hidden" name="product_type" value="<?php echo $fetch_products['productType']; ?>">
         <input type="hidden" name="product_availableQuantity" value="<?php echo $fetch_products['p_quantity']; ?>">
         <input type="hidden" name="product_price" value="<?php echo $fetch_products['productPrice']; ?>">
         <input type="hidden" name="product_image" value="<?php echo $fetch_products['productPhoto']; ?>">
         <!-- <input type="submit" value="add to cart" name="add_to_cart" class="btn"> -->

             </div>

      </form>
    <?php
            }
        // else{
        //     echo '<p style="margin-left: 25%;">Sorry, ' . $_POST['search'] . ' product is currently unavailable!</p>';
        // }
        
    ?>

    <!-- <div class="option-btn">
        <a href="product.php" class="option-btn">Back</a>
    </div> -->
    <div class="option-btn">
   <!-- <a href="javascript:history.back();" class="option-btn">Continue Shopping</a> -->
   
   <a href="product.php" class="option-btn">Continue Shopping</a>
</div>

</section>



</body>
</html>