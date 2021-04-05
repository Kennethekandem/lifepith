<?php

$pages = array("dashboard", "blog", "login", "logout");

if($routes[2] != '') {
    if(in_array($routes[2], $pages)) {
        $page = $routes[2];
    }else {
        $page = 'dashboard';
    }
} else {
    $page = 'dashboard';
}

if($page == 'login') {
    if(isset($_SESSION['logged_admin'])) {
        $page = 'dashboard';
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
} elseif ($page == 'blog') {
    require("views/admin/" . $page . '.php');
} else {
    require("views/admin/partials/header.php");
    require("views/admin/" . $page . '.php');
    require("views/admin/partials/footer.php");
}

?>

<!-- Basic Modals -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Blog</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="text-danger">Are you sure you want to delete this blog?</p>
            </div>

            <form action="" method="post">
                <input type="hidden" name="blog_id" class="blog_id">
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary" name="delete">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Basic Modals -->
