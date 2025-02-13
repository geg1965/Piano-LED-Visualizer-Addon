<?php
  $P = $_GET["password"];
  $txt = "";
  if ($P == "") {
    $txt = " to the default password";
    $P = "visualizer";
  } else {
    $txt = "";
  }
  shell_exec("printf '$P''\n''$P''\n' | passwd plv");
  echo ("<script>");
  echo ("alert(\"Password for user plv have been set$txt!\");");
  echo ("window.top.location.href = 'system.php';");
  echo ("</script>");
?>
