<?php
function Redirect($url, $permanent = false)
{
  header('Location: ' . $url, true, $permanent ? 301 : 302);
  exit();
}
$ip = gethostbyname(trim(`hostname --all-ip-addresses| awk '{print $1}'`));
$para = $_GET["para"];
$url="http://".$ip.$para;
Redirect(($url), false);
?>
