<?php


class contact
{
    public static function contactUs($fname, $lname, $email, $message) {

        $from = $email;
        $sender = $fname . ' ' . $lname;
        $to = config::email();
        $subject = 'Contact Us';
        $msg = $message;

        $mail = mail::send($from, $sender, $to, $subject, $msg);

        if($mail) {
            respond::alert('success', '', 'Mail sent successfully');
        }
    }

    public static function volunteer($fname, $lname, $email, $state, $message) {

        $from = $email;
        $sender = $fname . ' ' . $lname;
        $to = config::email();
        $subject = 'Volunteer';
        $msg =
        '<p>Name: ' . $fname . ' ' . $lname .'</p><br>' .
        '<p>State: ' . $state . '</p><br>' .
        '<p>' . $message . '</p><br>';

        $mail = mail::send($from, $sender, $to, $subject, $msg);

        if($mail) {
            respond::alert('success', '', 'Mail sent successfully');
        }

    }
}
