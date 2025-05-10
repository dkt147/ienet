<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['id'])) {
    $id = (int) $_GET['id'];
    $data = json_decode(file_get_contents('../assets/js/product.json'), true);
    
    foreach ($data as $p) {
        if ($p['id'] == $id) {
            $_SESSION['cart'][$id]['id'] = $p['id'];
            $_SESSION['cart'][$id]['name'] = $p['title'];
            $_SESSION['cart'][$id]['image'] = $p['image'];
            $_SESSION['cart'][$id]['price'] = $p['price'];
            $_SESSION['cart'][$id]['quantity'] = ($_SESSION['cart'][$id]['quantity'] ?? 0) + 1;
            echo json_encode(['status' => 'success', "count" => count($_SESSION['cart'])]);
            exit;
        }
    }

    echo json_encode(['status' => 'error', 'message' => 'Product not found']);
}
