<?php
/**
 * Created by IntelliJ IDEA.
 * User: psalm29
 * Date: 20/09/2017
 * Time: 9:01 PM
 */

class config {



    public static function base() {

        if(config::production()) {
            return 'https://lifepith.ng';
        }else {
            return 'https://lifepith.test';
        }

    }

    public static function production() {
        return false;
    }

    public static function email() {
        return "hello@lifepith.ng";
    }

    public static function name() {
        return "Life Pith Nigeria";
    }


    public static function phone() {
        return "070 339 46907";
    }

    public static function address() {
        return "We see a global community of well-informed, principled and equipped young leaders with knowledge for personal and societal development to drive Nigeria to it’s peak potential.";
    }

    public static function description() {
        return "";
    }

    public static function url() {
        return self::base();
    }

    public static function baseUrl() {
        if(isset($_SERVER['HTTPS'])){
            $protocol = ($_SERVER['HTTPS'] && $_SERVER['HTTPS'] != "off") ? "https" : "http";
        }else{
            $protocol = 'http';
        }
        // return $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        return $protocol . "://" . $_SERVER['HTTP_HOST'] . pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME).'/';
    }

    public static function baseFileSystem() {
        // return $_SERVER['DOCUMENT_ROOT'].pathinfo($_SERVER['PHP_SELF'], PATHINFO_DIRNAME).'/';
        return realpath(dirname(__FILE__)).'/';
    }

    public static function logo() {
        return 'assets/images/logo.png';
    }

    public static function logoUrl() {
        return self::base() . 'assets/img/custom/logo.svg';
    }

    public static function logo_white() {
        return 'assets/images/logowhite.png';
    }

    public static function logo_admin() {
        return 'assets/images/logo_admin.png';
    }

    public static function logo_mail() {
      return 'assets/images/logo_main.png';
    }

    public static function og_logo() {
        return 'assets/images/logo.png';
    }

    public static function favicon() {
        return 'assets/images/favicon.png';
    }

    public static function baseUploadUrl() {
        return 'assets/images/uploads/';
    }

    public static function baseMailPDFUploadUrl() {
        return self::url() . self::basePDFUploadUrl();
    }

    public static function baseMailLogoUrl() {
        return self::url() . self::logo();
    }

    public static function baseTestimonialUploadUrl() {
        return 'assets/images/testimonials/';
    }

    public static function instagram()
    {
        return 'https://www.instagram.com/lifepithng/';
    }

    public static function facebook()
    {
        return 'https://www.facebook.com/LifePithNigeria';
    }

    public static function twitter()
    {
        return '';
    }


    public static function linkedin()
    {
        return 'https://www.linkedin.com/company/lifepithnigeria';
    }

    public static function meta() {
        ?>
        <!-- Search Engine -->
        <meta name="description" content="<?php echo self::description(); ?>">
        <meta name="image" content="<?php echo self::base().self::logo(); ?>">

        <!-- Schema.org for Google -->
        <meta itemprop="name" content="<?php echo self::name(); ?>">
        <meta itemprop="description" content="<?php echo self::description(); ?>">
        <meta itemprop="image" content="<?php echo self::base().self::logo(); ?>">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary">
        <meta name="twitter:title" content="<?php echo self::name(); ?>">
        <meta name="twitter:description" content="<?php echo self::description(); ?>">

        <!-- Open Graph general (Facebook, Pinterest & Google+) -->
        <meta name="og:title" content="<?php echo self::name(); ?>">
        <meta name="og:description" content="<?php echo self::description(); ?>">
        <meta name="og:image" content="<?php echo self::base().self::og_logo(); ?>">
        <meta name="og:url" content="<?php echo self::base(); ?>">
        <meta name="og:site_name" content="<?php echo self::name(); ?>">
        <meta name="og:type" content="website">

        <?php
    }

    public static function analytics() {
        ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-3QDDYKL31V"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-3QDDYKL31V');
        </script>

<?php
    }



}
