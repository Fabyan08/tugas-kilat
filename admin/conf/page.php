<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'index':
            include './page/beranda.php';
            break;
        case 'user':
            include './page/user/user.php';
            break;
        case 'edit-user':
            include './page/user/edit-user.php';
            break;
        case 'item':
            include './page/item/item.php';
            break;
        case 'edit-item':
            include './page/item/edit-item.php';
            break;
        case 'checkout':
            include './page/checkout/checkout.php';
            break;
        case 'detail':
            include './page/checkout/detail.php';
            break;
        case 'ulasan':
            include './page/ulasan/ulasan.php';
            break;
    }
} else {
    include './page/beranda.php';
}
