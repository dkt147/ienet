<?php
session_start();

// Get the product ID from the GET request
$id = (int) $_GET['id'];

// Check if the product exists in the cart
if (isset($_SESSION['cart'][$id])) {
    // If the quantity is greater than 1, reduce it
    // if ($_SESSION['cart'][$id]['quantity'] > 1) {
    //     $_SESSION['cart'][$id]['quantity'] -= 1;
    //     echo json_encode(['status' => 'success', 'message' => 'Quantity decreased']);
    // }
    // // If the quantity is 1 or less, remove the item from the cart
    // else {
        unset($_SESSION['cart'][$id]);
        echo json_encode(['status' => 'success', 'message' => 'Item removed from cart']);
    // }
} else {
    // If the product doesn't exist in the cart
    echo json_encode(['status' => 'error', 'message' => 'Product not found in cart']);
}
exit;
?>
