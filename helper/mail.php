<?php

/**
 * MAIL CLASS
 */
class mail {

    public static function send($from, $sender, $to, $subject, $msg) {

        $yr = date('Y');
        $message = '
        <!doctype html>
<html lang="en">
<head>

    <style type="text/css">
        html { -webkit-text-size-adjust:none; -ms-text-size-adjust: none;}
        @media only screen and (max-device-width: 680px), only screen and (max-width: 680px) {
            *[class="table_width_100"] {
                width: 96% !important;
            }
            *[class="border-right_mob"] {
                border-right: 1px solid #dddddd;
            }
            *[class="mob_100"] {
                width: 100% !important;
            }
            *[class="mob_center"] {
                text-align: center !important;
            }
            *[class="mob_center_bl"] {
                float: none !important;
                display: block !important;
                margin: 0px auto;
                padding-left: 30px;
                padding-top: 23px;
            }
            .iage_footer a {
                text-decoration: none;
                color: #929ca8;
            }
            img.mob_display_none {
                width: 0px !important;
                height: 0px !important;
                display: none !important;
            }
            img.mob_width_50 {
                width: 40% !important;
                height: auto !important;
            }
            .logo-padding {
                padding-left: 30px !important;
            }
            .mail-content {
                width: 100%;
            }
            .mail-body {
                width: 100% !important;
                margin-left: -20px;
            }
            .attachment {
                margin-left: 40px !important;
            }
            *[class="logo-table"] {
                width: 50%;
            }
            *[class="main-table"] {
                padding-left: 20px;
                padding-right: 20px;
            }
            .listed li:first-child {
                padding-left: 0 !important;
            }
            .listed li:last-child {
                padding-left: 55px !important;
            }
            .link-icons li {
                padding: 0 8px !important;
            }
            .footer-table {
                padding: 0 40px !important;
            }
            .codekago-link {
                color: #0fb7fe !important;
            }
        }
        @font-face {
            font-family: \'Grotesque\';
            font-style: normal;
            font-weight: 400;
            src: local(\'Grotesque Regular\'), local(\'Grotesque-Regular\'), url(https://fonts.googleapis.com/css?family=Darker+Grotesque:500,600,700&display=swap) format(\'woff\');
        }
        body {
            font-family: "Grotesque", Sans-Serif;
        }
        .table_width_100 {
            width: 680px;
        }
        a {
            color: #377dff;
        }
        .attachment {
            line-height: 14px;
            width: 80%;
            margin-left: 60px;
        }
        .btn {
            background-color: transparent;
            color: #53565d;
            /*padding: 22px 250px;*/
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border: 1.5px solid #dadde4;
            border-radius: 15px;
        }
        .listed li{
            display: inline !important;
        }
        .listed li:first-child {
            padding-left: 20px;
            padding-right: 0;
        }
        .listed li {
            padding-left: 20px;
            padding-right: -15px;
        }
        .listed li:last-child {
            padding-left: 305px;
            padding-right: 40px;
        }
        .link-icons {
            display: inline-flex;
            list-style: none;
            padding: 0;
        }
        .link-icons li {
            padding: 0 15px;
        }
        .link-icons li:first-child {
            padding-left: 0;
        }
        .link-icons li a img {
            height: 40px;
        }
    </style>
</head>

<body style="padding: 0px; margin: 0px; background: #eff3f8; font-family: "Grotesque", Sans-Serif;">
<div id="mailsub" class="notification" align="center">

    <table width="100%" class="main-table" border="0" cellspacing="0" cellpadding="0" style="min-width: 320px; margin-top: 50px;"><tr><td style="padding-bottom: 50px;" align="center" bgcolor="#eff3f8">


                <!--[if gte mso 10]>
                <table width="680" border="0" cellspacing="0" cellpadding="0">
                    <tr><td>
                <![endif]-->

                <table border="0" cellspacing="0" cellpadding="0" class="table_width_100" width="100%" style="max-width: 680px; min-width: 300px;">
                    <!--header -->
                    <tr><td align="left" bgcolor="#fff">
                            <div style="height: 20px; line-height: 20px; font-size: 10px;">&nbsp;</div>
                            <table class="logo-table" width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr><td align="left">
                                        <div class="mob_center_bl logo-padding" style="float: left; background: #fff; display: inline-block; width: inherit; height: 100px; padding-left:60px;">
                                            <table class="mob_center" width="115" border="0" cellspacing="0" cellpadding="0" align="left" style="border-collapse: collapse;">
                                                <tr><td align="left" valign="middle">
                                                        <div style="height: 20px; line-height: 20px; font-size: 10px;">&nbsp;</div>
                                                        <table width="115" border="0" cellspacing="0" cellpadding="0" >
                                                            <tr><td align="left" valign="top" class="mob_center">
                                                                    <img src="https://codekago.com/assets/img/custom/logo.svg" style="height: 40px;" alt="">
                                                                </td></tr>
                                                        </table>
                                                    </td></tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <div style="height: 0; line-height: 30px; font-size: 10px;">&nbsp;</div>
                        </td></tr>
                    <!--header END-->

                    <!--content 1 -->
                    <tr>
                        <td align="center" bgcolor="#fbfcff">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr><td>

                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        '. $msg .'
                                        <!-- padding --><div style="height: 80px; line-height: 45px; font-size: 10px;">&nbsp;</div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!--content 1 END-->

                    <!--footer -->
                    <tr><td class="iage_footer" align="center" bgcolor="#e5f1ff">
                            <!-- padding --><div style="height: 40px; line-height: 40px; font-size: 10px;">&nbsp;</div>

                            <table class="footer-table" width="100%" border="0" cellspacing="0" cellpadding="0" style="padding: 0 70px;">
                                <tr>
                                    <td align="center">
                                        <font face="Arial, Helvetica, sans-serif" size="3" color="#424e5c" style="font-size: 13px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #424e5c;">
                                              <h1 style="font-weight: initial; font-size: 28px;">Follow us</h1>
                                            </span>
                                        </font>
                                        <ul class="link-icons">
                                            <li>
                                                <a href="' . config::facebook() . '" class="footer-icon" target="_blank">
                                                    <img src="https://codekago.com/assets/img/custom/facebook.svg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="' . config::instagram() . '" class="footer-icon" target="_blank">
                                                    <img src="https://codekago.com/assets/img/custom/instagram.svg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="' . config::twitter() . '" class="footer-icon" target="_blank">
                                                    <img src="https://codekago.com/assets/img/custom/twitter.svg" alt="">
                                                </a>
                                            </li>
                                            <li>
                                                <a href="' . config::linkedin() . '" class="footer-icon" target="_blank">
                                                    <img src="https://codekago.com/assets/img/custom/linkedin.svg" alt="">
                                                </a>
                                            </li>
                                        </ul>
                                        <font face="Arial, Helvetica, sans-serif" size="3" color="#424e5c" style="font-size: 13px;">
                                            <span style="font-family: Arial, Helvetica, sans-serif; font-size: 13px; color: #424e5c;">
                                              <p style="font-weight: inherit; font-size: 20px;">' . config::address() . '</p>
                                            </span>
                                        </font>
                                        <hr style="border-top: 1px solid #dadde4; border-bottom: 1px solid transparent;">
                                        <div style="margin-top: 30px;">
                                            <a href="' . config::url() . '" class="codekago-link" style="color: #3a4656; font-size: 20px;">www.codekago.com</a>
                                        </div>

<!--                                        <div>-->
<!--                                            <p style="color: #3b4757;">This message was sent to <a href="" style="color: #0fb7fe; text-decoration: none;">artofofiare@gmail.com</a>, if you don\'t want to receive these emails from Codekago in the future, <b>unsubscribe</b>.</p>-->
<!--                                        </div>-->
                                    </td>
                                </tr>
                            </table>

                            <!-- padding --><div style="height: 50px; line-height: 50px; font-size: 10px;">&nbsp;</div>
                        </td></tr>
                    <!--footer END-->
                </table>
                <!--[if gte mso 10]>
                </td>
                </tr>
                </table>
                <![endif]-->
            </td>
        </tr>
    </table>
</div>
</body>

</html>';

        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

        // More headers
        $headers .= 'From: '.$sender.' <'.$from.'>' . "\r\n";
        $headers .= 'Reply-To: '.$sender.' <'.$from.'>' . "\r\n";
//                 ini_set('sendmail_from','lilkenzy02@gmail.com');
        if (mail($to, $subject, $message, $headers)) {
            return true;
        }else {
            return false;
        }

    }// SEND MAIL METHOD

}
