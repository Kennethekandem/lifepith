<?php


class blog
{
    public static function add($title, $writer, $category_id, $content, $publish, $thumbnail = array()) {

        global $db;

        $upload = upload::add($thumbnail, config::baseUploadUrl(), true);
        $thumbnail = $upload['file'];

        switch ($publish) {
            case 'on':
                $publish = 1;
                break;
            case 'off':
                $publish =  0;
                break;
            default:
                $publish =  1;
        }

        $add = $db->query("INSERT INTO blogs (title, category_id, writer, thumbnail, publish, timestamp) VALUES (:title, :category_id, :writer, :thumbnail, :publish, :now)", array(
            'title' => $title,
            'category_id' => $category_id,
            'writer' => $writer,
            'thumbnail' => $thumbnail,
            'publish' => $publish,
            'now' => time()
        ));

        if($add) {
            $blog_id = $db->lastInsertId();

            $db->query("INSERT INTO blog_contents (blog_id, content) VALUES (:blog_id, :content)", array(
                'blog_id' => $blog_id,
                'content' => $content
            ));

            respond::alert('success', '', 'Blog has been added successfully');
        }
    }

    public static function all() {
        global $db;

        return $blogs = $db->query("SELECT * FROM blogs LEFT JOIN categories c on blogs.category_id = c.id");
    }
}