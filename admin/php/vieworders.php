<?php
include ('config.inc.php');
if (isset($_GET["orderID"]) && !empty(trim($_GET["orderID"]))) {
    $ID = trim($_GET["orderID"]);
    $sql = "SELECT * FROM orders WHERE orderID = '$ID'";
    $sql = "SELECT orders.*,users.*, users.userName 
        FROM orders 
        INNER JOIN users ON orders.userID = users.uID 
        WHERE orderID = '$ID'";

    if ($result = $conn->query($sql)) {
        if ($result->num_rows == 1) {
            $row = $result->fetch_array(MYSQLI_ASSOC);
        } else {
            header("location: error.php");
            exit();
        }
    }

}
if (isset($_GET["status"])) {
    $ID = trim($_GET["orderID"]);
    $status = mysqli_real_escape_string($connection, $_GET["status"]);
    $sql = "UPDATE orders SET status = '$status' WHERE orderID = '$ID'";

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Order</title>
    <!-- Favicon -->
   <link rel="shortcut icon" href="../img/koselii.png" type="image/x-icon">
    <!-- Custom fonts for this template -->
    <link rel="stylesheet" href="../vendor/fontawesome-free/css/all.min.css" type="text/css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">

    <link rel="stylesheet" href="../css/sb-admin-2.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .order-details {
            max-width: 600px;
            margin: 0 auto;
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
        }

        .order-info {
            margin-bottom: 20px;
        }

        .order-info label {
            font-weight: bold;
        }

        .order-products {
            margin-bottom: 20px;
        }

        .product-list {
            list-style: none;
            padding: 0;
        }

        .product-list li {
            margin-bottom: 5px;
        }

        .delivery-info {
            margin-bottom: 20px;
        }

        .order-status {
            margin-bottom: 20px;
        }

        .status-label {
            font-weight: bold;
        }

        .status-select {
            padding: 5px;
            font-size: 16px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<div id="wrapper">
    <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            <div class="container-fluid">
                <div class="row m-5 p-5">
                    <div class="col-xl-12 col-lg-12 mb-4">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary text-center">Order</h6>
                            </div>
                            <div class="card-body">

                                <body>
                                    <div class="order-details">
                                        <h1>Order Details</h1>
                                        <div class="order-info">
                                            <label for="order-id">Order ID:</label>
                                            <span id="order-id"><?= $row['orderID'] ?></span>
                                            <br>
                                            <label for="user-id">User ID:</label>
                                            <span id="user-id"><?= $row['uID'] ?></span>
                                            <br>
                                            <label for="user-name">User Name:</label>
                                            <span id="user-name"><?= $row['userName'] ?></span>
                                        </div>
                                        <div class="order-products">
                                            <table>
                                                <th>
                                                    <h2>Products</h2>

                                                </th>
                                                <th>
                                                    <h2>Quantity </h2>
                                                </th>
                                                <tbody>
                                                    <?php $productQuery = "SELECT products.*,order_products.quantity from order_products NATURAL JOIN products WHERE order_products.orderID = $ID";
                                                    $productResult = mysqli_query($conn, $productQuery);
                                                    // Check if the query was successful
                                                    if ($productResult) {

                                                        while ($productRow = mysqli_fetch_assoc($productResult)) {
                                                            ?>
                                                            <tr>
                                                                <td><?= $productRow['productName'] ?></td>
                                                                <td><?= $productRow['quantity'] ?></td>
                                                            </tr>
                                                            <!-- echo '<li>' . $productRow['productName'] . '</li>'; -->
                                                            <?php
                                                        }
                                                        echo ' </tbody>';
                                                        echo '</table>';
                                                    } else {

                                                        echo "Error: " . mysqli_error($connection);
                                                    }
                                                    ?>

                                        </div>
                                        <div class="delivery-info">
                                            <h2>Delivery Information</h2>
                                            <p>City: <span id="city"><?= $row['city'] ?></span></p>
                                            <p>Province: <span id="province"><?= $row['province'] ?></span></p>
                                            <p>Street: <span id="street"><?= $row['street'] ?></span></p>
                                            <p>Postal Code: <span id="postal-code"><?= $row['postal'] ?></span></p>
                                        </div>
                                        <form method="post">
                                            <div class="order-status">
                                                <h2>Status</h2>
                                                <label for="status" class="status-label">Order Status:</label>
                                                <select id="status" class="status-select" name="status">
                                                    <option value="pending">Pending</option>
                                                    <option value="completed">Completed</option>
                                                </select>
                                                <button class="btn" type="submit">Update Status</button>
                                                <input type="hidden" name="orderID" value="<?= $ID ?>">
                                            </div>
                                        </form>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

</html>