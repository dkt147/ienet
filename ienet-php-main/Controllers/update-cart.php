<?php
session_start();

$id = $_GET['id'];
$action = $_GET['action'];

if (isset($_SESSION['cart'][$id])) {
    if ($action === 'add') {
        $_SESSION['cart'][$id]['quantity'] += 1;
    } elseif ($action === 'sub' && $_SESSION['cart'][$id]['quantity'] > 1) {
        $_SESSION['cart'][$id]['quantity'] -= 1;
    }

    $item = $_SESSION['cart'][$id];
    $subtotal = $item['price'] * $item['quantity'];

    echo json_encode([
        'status' => 'success',
        'quantity' => $item['quantity'],
        'subtotal' => $subtotal
    ]);
} else {
    echo json_encode(['status' => 'error']);
}
