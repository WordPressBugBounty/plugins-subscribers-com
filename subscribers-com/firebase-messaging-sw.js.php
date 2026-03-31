<?php
require("config.php");
header("Content-Type: application/javascript");
$site_lang = function_exists('swpush_sanitize') ? swpush_sanitize(get_option('subscribers_lang')) : htmlspecialchars(get_option('subscribers_lang'), ENT_QUOTES | ENT_HTML5, 'UTF-8');
?>
var siteLanguage = "<?php echo $site_lang; ?>";
var version = '1.7.3';
importScripts("https://<?php echo $subscribers_cdn_host; ?>/assets/subscribers-sw.js");
