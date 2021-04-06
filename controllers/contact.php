<?php


class contact
{
    public static function contactUs($fname, $lname, $email, $message) {

        $from = $email;
        $sender = $fname . ' ' . $lname;
        $to = config::email();
        $subject = 'Contact Us';
        $msg = $message;

        mail::send($from, $sender, $to, $subject, $msg);
    }
}