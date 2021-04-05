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

        $add = $db->query("INSERT INTO blogs (title, category_id, writer, thumbnail, publish, timestamp, day, month, year) VALUES (:title, :category_id, :writer, :thumbnail, :publish, :now, :day, :month, :year)", array(
            'title' => $title,
            'category_id' => $category_id,
            'writer' => $writer,
            'thumbnail' => $thumbnail,
            'publish' => $publish,
            'now' => time(),
            'day' => date("d"),
            'month' => date("M"),
            'year' => date("Y")
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

        return $blogs = $db->query("SELECT blogs.*, blogs.id AS blog_id, c.category FROM blogs LEFT JOIN categories c on blogs.category_id = c.id");
    }

    public static function single($blog_id) {
        global $db;

        return $blog = $db->query("SELECT blogs.*, bc.content, c.category, c.id as category_id FROM blogs LEFT JOIN blog_contents bc on blogs.id = bc.blog_id LEFT JOIN categories c on blogs.category_id = c.id WHERE blogs.id = :blog_id", array('blog_id' => $blog_id), false);
    }

    public static function edit($blog_id, $title, $writer, $category_id, $content) {
        global $db;

        $edit = $db->query("UPDATE blogs SET title = :title, writer = :writer, category_id = :category_id WHERE id = :blog_id", array(
            'title' => $title,
            'writer' => $writer,
            'category_id' => $category_id,
            'blog_id' => $blog_id
        ));

        if($edit) {
            $db->query("UPDATE blog_contents SET content = :content WHERE blog_id = :blog_id", array(
                'content' => $content,
                'blog_id' => $blog_id
            ));

            respond::alert('success', '', 'Blog updated successfully');
        }

    }

    public static function category($category_id) {
        global $db;

        return $category_blogs = $db->query("SELECT blogs.*, c.category FROM blogs LEFT JOIN categories c on blogs.category_id = c.id WHERE blogs.category_id = :category_id", array("category_id" => $category_id));
    }

    public static function category_name($category_id) {
        global $db;

        return $db->single("SELECT category FROM categories WHERE id = :id", array('id' => $category_id));

    }

    public static function delete($blog_id) {
        global $db;

        $thumbnail = $db->single("SELECT thumbnail FROM blogs WHERE id = :blog_id", array("blog_id" => $blog_id));
        upload::remove($thumbnail, config::baseUploadUrl());

        $delete = $db->query("DELETE FROM blogs WHERE id = :blog_id", array('blog_id' => $blog_id));

        respond::alert('success', '', 'Blog deleted successfully');
    }
}