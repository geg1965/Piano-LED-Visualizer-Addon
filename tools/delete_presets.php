<?php
  shell_exec("find ../cfgs -type f -name '*.xml.*' ! -name '*.default' -delete");
  echo("<script>");
  echo("alert('All presets where deleted!');");
  echo("window.top.location.href = 'file.php';");
  echo("</script>");
?>
