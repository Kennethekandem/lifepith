<?php


class categories
{
    public static function all() {
        global $db;

        return $categories = $db->query("SELECT * FROM categories");
    }
}