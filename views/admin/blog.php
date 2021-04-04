<?php

$pages = array("single", "add", "edit", "category");

if($routes[3] != '') {
    if(in_array($routes[3], $pages)) {
        $page = $routes[3];
    }else {
        header("location:admin");
    }
}

require("views/admin/blog/" . $page . ".php");