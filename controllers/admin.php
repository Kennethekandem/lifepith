<?php


class admin
{
    public static function login ($email, $password) {
        global $db;

        $login = $db->query("SELECT * FROM admin WHERE email = :email", array('email' => $email), false);

        if($login) {

            $account_pwd = $login['password'];

            $pwd = crypt($password, $account_pwd);

            if($account_pwd != $pwd) {
                respond::alert('warning', 'Incorrect password', "Your password is incorrect");
            }

            $_SESSION['logged_admin'] = $email;
            header("location:admin/blogs");
        }
    }

    /*public static function register($name, $email, $password) {
        global $db;

        $register = $db->query("INSERT INTO admin (name, email, password) VALUES (:name, :email, :password)", array(
            'name' => $name,
            'email' => request::secureTxt($email),
            'password' => request::securePwd($password)
        ));

        if($register) {
            respond::alert('success', 'added admin', 'hello, admin added');
        }else {
            return false;
        }

    }*/
}
