<?php

$pages = array("blogs");

if($routes[2] != '') {
    if(in_array($routes[2], $pages)) {
        $page = $routes[2];
    }else {
        $page = 'blogs';
    }
}

require("admin/" . $page . '.php');