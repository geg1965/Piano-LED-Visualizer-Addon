<?php
  $preset = $_GET["preset"];
  $txt = "";
  if ($preset == "") {
    $txt = "Select the preset you want to delete.";
  } elseif ($preset == "all") {
    shell_exec("find ../cfgs -type f -name '*.xml.*' ! -name '*.default' -delete");
    $txt = "All presets deleted!";
  } else {
    shell_exec("rm ../cfgs/*.xml.$preset");
    $txt = "Preset $preset was deleted!";
  }
  echo ("<script>");
  echo ("alert(\"$txt\");");
  echo ("window.top.location.href = 'file.php';");
  echo ("</script>");
?>
