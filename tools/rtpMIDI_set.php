<?php
  $ip1 = $_GET["ip1"];
  $ip2 = $_GET["ip2"];
  $ip3 = $_GET["ip3"];
  $ip4 = $_GET["ip4"];
  $port = $_GET["port"];
  $name = $_GET["name"];
  $replace = $_GET["replace"];
  $minimal = $_GET["minimal"];
  if (isset($replace)) {
    if (isset($minimal)) {
      shell_exec("cp ./inis/minimal.ini /etc/rtpmidid/default.ini");
    } else {
      shell_exec("cp ./inis/default.ini /etc/rtpmidid/");
    }
  }
  shell_exec("echo '\n[connect_to]' >> /etc/rtpmidid/default.ini");
  shell_exec("echo hostname=$ip1.$ip2.$ip3.$ip4 >> /etc/rtpmidid/default.ini");
  shell_exec("echo port=$port >> /etc/rtpmidid/default.ini");
  shell_exec("echo name=$name >> /etc/rtpmidid/default.ini");
  shell_exec("systemctl restart rtpmidid");
  sleep(1);
  echo ("<script>");
  echo ("window.top.location.href = 'rtpMIDI.php';");
  echo ("</script>");
?>
