<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'index':
            include 'index.php';
            break;
        case 'profile':
            include 'pages/user/profil/profile.php';
            break;
        case 'chat':
            include 'pages/chat/chat.php';
            break;
        // case 'blog':
        //     include 'pages/blog/blog.php';
        //     break;
        case 'ulasan':
            include 'pages/ulasan/ulasan.php';
            break;
        case 'cart':
            include 'pages/keranjang/cart.php';
            break;

        case 'checkout':
            include 'pages/checkout/checkout.php';
            break;
    }
} else {
    include 'home.php';
}
