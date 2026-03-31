<?php
require_once __DIR__ . "/config.php";
header("Content-Type: application/javascript");
header("Service-Worker-Allowed: /");
$site_lang_raw = function_exists('get_option') ? get_option('subscribers_lang') : '';
$site_lang = function_exists('swpush_sanitize')
  ? swpush_sanitize($site_lang_raw)
  : htmlspecialchars((string)$site_lang_raw, ENT_QUOTES | ENT_HTML5, 'UTF-8');
?>
var siteLanguage = "<?php echo $site_lang; ?>";
var version = '1.7.5';
importScripts("https://<?php echo $subscribers_cdn_host; ?>/assets/subscribers-sw.js");
