<?php
  shell_exec("git clone https://github.com/geg1965/Piano-LED-Visualizer-Addon update");
  shell_exec("rsync -r ./update/* ../../php; rm -Rf update");
  shell_exec("chmod +x ./post_update; ./post_update");
  echo ("<script>");
  echo ("alert(\"Update completed!\");");
  echo ("window.top.location.href = '/index.php';");
  echo ("</script>");
?>
