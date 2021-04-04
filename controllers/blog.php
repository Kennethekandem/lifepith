<?php


class blog
{
    public static function add($title, $category_id, $content, $status, $thumbnail = array()) {

        global $db;

        $upload = upload::add($thumbnail, config::baseUploadUrl(), true);
        $thumbnail = $upload['file'];

        
    }
}