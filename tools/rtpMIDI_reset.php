<?php
  shell_exec("cp ./inis/default.ini /etc/rtpmidid/");
  shell_exec("systemctl restart rtpmidid");
  sleep(1);
  echo ("<script>");
  echo ("alert(\"The rtpMIDI configuration was set to default!\");");
  echo ("window.top.location.href = 'rtpMIDI.php';");
  echo ("</script>");
?>
