<?php
if (isset($_POST["add"])) {

if (isset($_SESSION['loggedIn'])) {

    if (isset($_SESSION['cart'])) {

        $itemArrayID = array_column($_SESSION['cart'], 'productID');

        if (in_array($_POST['productID'], $itemArrayID)) {
            $key = array_search($_POST['productID'], $itemArrayID);
            $_SESSION['cart'][$key]['quantity'] += 1;
        } else {

            $count = count($_SESSION['cart']);
            $itemArray = array(
                'productID' => $_POST['productID'],
                'quantity' => 1,
            );

            $_SESSION['cart'][$count] = $itemArray;
        }
    } else {

        $itemArray = array(
            'productID' => $_POST['productID'],
            'quantity' => 1,
            
        );
        $_SESSION['cart'][0] = $itemArray;
    }
} else {
    header("location: ./login.php");
    exit();
}
}
