<?php
    include './includes/functions.php';

    $username=  $_SESSION['userName'];
    $user = getById('users','userName',$username);
    // echo $user['status'];
    // echo $user['data']['pharmacy_id'];

    if(isset($_POST['order-purchase'])){
        $productID = checkParamId('productID');
        $result = getById('products','productID',$productID);
        $medicine_name = $result['data']['productName'];
        $price = $result['data']['productPrice'];
        $fileNameNew = $result['data']['productPhoto'];
        
        $user_id = $user['data']['uID'];
        $amount_due = $_POST["subtotal"];
        $product_quantity = $_POST["quantity"];
        $payment_option = $_POST["payment"];
        $city = $_POST["city"];
        $province = $_POST["state"];
        $street = $_POST["street-address"];
        $postal = $_POST["postal-code"];
        $status = "pending";

        $query = "INSERT INTO orders (userID, amount,payment ,status , city, province, street, postal) VALUES ('$user_id','$amount_due', '$payment_option' ,'$status','$city','$province','$street','$postal')";
        // $data = mysqli_query($conn,$query);
        
        if ($conn->query($query) === TRUE) {
            $order_id = $conn->insert_id;

            $order_products_query = "INSERT INTO order_products ( productID, orderID , quantity ) VALUES ('$productID','$order_id' ,'$product_quantity')";
        if ($conn->query($order_products_query) === TRUE) {
        }
        else{
            echo "Error inserting data into user_orders table: " . $conn->error;

        }
            // Retrieve the order_id generated for the newly inserted row
            // $order_id = $conn->insert_id;
        
            // // Insert data into the order_address table using the retrieved order_id
            // $sql_insert_order_address = "INSERT INTO order_address (order_id, city, province, street, postal)VALUES ('$order_id', '$city','$province','$street','$postal')";
            // $sql_insert_order_pending = "INSERT INTO order_pending (order_id, user_id, productID, invoice_number , total_products, amount, order_status)VALUES('$order_id','$user_id','$productID','$invoice_number','$product_quantity','$amount_due','$status')";
            // $sql_insert_order_inventory = "INSERT INTO inventory (productID,medicine_name,manufacturer,price,quantity,expiration_date,dosage, image) VALUES('','$medicine_name','$manufacturer_name','$price','$product_quantity','$date','$dosage','../uploaded_img/$fileNameNew')";
        

                // if($payment_option == "esewa"){
                //     redirect("e-sewa.php?order_id=$order_id&product_amount=$amount_due",'');
                // }else{
                    redirect('./index.php','Your Order has been submitted.');
                // }
            // if (($conn->query($sql_insert_order_address) === TRUE) && ($conn->query($sql_insert_order_pending) === TRUE) && ($conn->query($sql_insert_order_inventory) === TRUE)) {
            
            // } else {
            //     echo "Error inserting data into order_address table: " . $conn->error;
            // }
        } else {
            echo "Error inserting data into user_orders table: " . $conn->error;
        }

        // if($data){
        //     echo "<br>stored";
        //     // redirect('admin.php','data inserted');
        // }
        // else{
        //     echo "failed";
        // }
    }

    if(isset($_POST['order-purchases'])){
    
    $amount_due = $_POST['subtotal'];
    $user_id = $user['data']['uID'];
    $product_quantity = $_POST["totalQuantity"];
    $payment_option = $_POST["payment"];
    $city = $_POST["city"];
    $province = $_POST["state"];
    $street = $_POST["street-address"];
    $postal = $_POST["postal-code"];
    $status = "pending";
        $query = "INSERT INTO orders (userID, amount,payment ,status , city, province, street, postal) VALUES ('$user_id','$amount_due', '$payment_option' ,'$status','$city','$province','$street','$postal')";
    if ($conn->query($query) === TRUE) {
        $order_id = $conn->insert_id;
        foreach ($_SESSION['cart'] as $key => $value) {
            $productID = $value['productID'];
            $quantity = $value['quantity'];
            $order_products_query = "INSERT INTO order_products ( productID, orderID, quantity ) VALUES ( '$productID','$order_id', '$quantity')";
            if ($conn->query($order_products_query) === TRUE) {
            }
            else{
                echo "Error inserting data into order_products table: " . $conn->error;
    
            }
        }
    }
    else {
        echo "Error inserting data into orders table: " . $conn->error;
    }

        // if($data){
        //     echo "<br>stored";
        //     // redirect('admin.php','data inserted');
        // }
        // else{
        //     echo "failed";
        // }
        redirect('./index.php','Your Order has been submitted.');

    }
    