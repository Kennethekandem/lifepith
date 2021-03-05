<?php
/**
 * Created by IntelliJ IDEA.
 * User: psalm29
 * Date: 20/09/2017
 * Time: 9:01 PM
 */

class config {



    public static function base() {

        return 'https://lifepith.dev';
    }

    public static function production() {
        return true;
    }

    public static function email() {
        return "info@codekago.com";
    }

    public static function careerMail() {
        return "careers@codekago.com";
    }

    public static function name() {
        return "Codekago Interactive";
    }


    public static function phone() {
        return "070 339 46907";
    }

    public static function address() {
        return "86, Atiku Way, Uyo, Nigeria";
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

    public static function logo_mail() {
      return 'assets/images/logo_main.png';
    }

    public static function og_logo() {
        return 'assets/img/custom/og_logo.png';
    }

    public static function favicon() {
        return 'assets/img/custom/favicon.png';
    }

    public static function baseUploadUrl() {
        return 'assets/images/account/';
    }

    public static function baseAdminUploadUrl() {
        return 'assets/images/admin/';
    }

    public static function baseSliderUploadUrl() {
        return 'assets/images/sliders/';
    }

    public static function basePDFUploadUrl() {
        return 'assets/pdf/';
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
        return 'https://www.instagram.com/codekago/';
    }

    public static function facebook()
    {
        return 'https://www.facebook.com/codekago/';
    }

    public static function twitter()
    {
        return 'https://twitter.com/codekago';
    }


    public static function linkedin()
    {
        return 'https://www.linkedin.com/company/codekago-interactive/';
    }

    public static function mailgun_api() {
        return "3ed6553be2c1c5b64bfeb4dfcb6ea60c-898ca80e-c8a03538";
    }

    public static function mailgun_url() {
        return "mailgun.sasomis.com";
    }

    public static function wallet() {
        global $db;
        return $db->single("SELECT address FROM config");
    }
    
    public static function paystack_pk() {
        if (self::production()) {
            return 'pk_live_7b267a1a28f71b090d5ae95ec6e3bf83c53c51d2';
        }else {
            return 'pk_test_d39f53edef82dc2f49d06953a8d2fc3f2a4c7312';
        }
    }

    public static function paystack_sk() {
        if (self::production()) {
            return 'sk_live_1829d96a834635598385c33c04063a4042b4917b';
        }else {
            return 'sk_test_7ceed73425f0e47601b0c5ad5ecdaf7764982fcb';
        }
    }

    public static function api_key() {
        return "8927-4a2e-148b-2ddd";
    }

    public static function pin() {
        return "psalm294u";
    }

    public static function sell() {
        global $db;
        return $db->single("SELECT sell FROM config");
    }

    public static function sell_rate() {
        global $db;
        return $db->single("SELECT sell_rate FROM config");
    }

    public static function usd_btc() {
        global $db;
        return $db->single("SELECT usd_btc FROM config");
    }

    public static function available_balance() {
        global $db;
        return $db->single("SELECT available_balance FROM config");
    }

    public static function pending_balance() {
        global $db;
        return $db->single("SELECT pending_balance FROM config");
    }

    public static function total_amount() {
        global $db;

        $wallets = $db->query("SELECT * FROM wallets");
        $total = 0;
        foreach ($wallets as $wallet) {
            $total = $wallet['available_balance'] + $total;
        }

        return $total;

    }

    public static function total() {

        return request::toNGN(self::total_amount()) + request::toNGN(self::available_balance());

    }

    public static function percentage() {
        $total = self::total();
        $percentage = (request::toNGN(self::available_balance()) / $total) * 100;
        return number_format($percentage);
    }

    public static function usd_ngn() {
        global $db;
        return $db->single("SELECT usd_ngn FROM config");
    }

    public static function rate($type) {
        global $db;
        return $db->single("SELECT $type FROM config");
    }

    public static function buy() {
        global $db;
        return $db->single("SELECT buy FROM config");
    }

    public static function buy_rate() {
        global $db;
        return $db->single("SELECT buy_rate FROM config");
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

    public static function charge($amount = '0.00001', $address = '3GUMZz24zS4x8DsV8b3D5N4JUrgft6JVXB') {
        global $db;
        return $db->single("SELECT charge FROM config");
    }

    public static function banks($rand = false) {
        global $db;

        if ($rand) {
            return $db->single("SELECT name FROM banks WHERE name != 'ASO Savings and Loans' && name != 'Citibank Nigeria' && name != 'Ekondo Microfinance Bank' && name != 'Jaiz Bank' && name != 'Parallex Bank' && name != 'Providus Bank' && name != 'MainStreet Bank' ORDER BY RAND() LIMIT 1");
        }else {
            return $db->query("SELECT * FROM banks ORDER BY name ASC");
        }

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
