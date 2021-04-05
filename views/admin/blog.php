<?php

$pages = array("single", "add", "edit", "category");

if($routes[3] != '') {
    if(in_array($routes[3], $pages)) {
        $page = $routes[3];

        $blog_id = $routes[4];

        if($page == 'single' || $page == 'edit') {

            $blog = blog::single($blog_id);
        }
    }else {
        header("location:admin");
    }
}

if($page != 'add') {
    require("views/admin/partials/header.php");
    require("views/admin/blog/" . $page . ".php");
    require("views/admin/partials/footer.php");
}else {
    require("views/admin/blog/" . $page . ".php");
}