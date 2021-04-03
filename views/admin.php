<?php

$pages = array("blogs", "login", "logout");

if($routes[2] != '') {
    if(in_array($routes[2], $pages)) {
        $page = $routes[2];
    }else {
        $page = 'blogs';
    }
} else {
    $page = 'blogs';
}

if($page == 'login') {
    if(isset($_SESSION['logged_admin'])) {
        $page = 'blogs';
    }
    require("view/admin" . $page . ".php");
} else {
    if(!isset($_SESSION['logged_admin'])) {
        $page = 'login';
    } else {
        $email = $_SESSION['logged_admin'];

        $account = $db->query("SELECT * FROM admin WHERE email = :email", array('email' => $email), false);

        if($account) {
            $admin_id = $account['id'];
            $admin_name = $account['name'];
        }else {
            unset($_SESSION['logged_admin']);
            $page = 'login';
        }
    }
}

if($page == 'login' || $page == 'logout') {
    require("views/admin/auth/" . $page . ".php");
}else {
    require("views/admin/partials/header.php");
    require("views/admin/" . $page . '.php');
    require("views/admin/partials/footer.php");
}
