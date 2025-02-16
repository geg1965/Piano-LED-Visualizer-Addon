<?php
  $file = $_GET["file"];
  $preset = $_GET['preset'];

  if ($preset == "all") {
    $file = "$file.plv_bank";
    shell_exec("zip './downloads/$file' ../cfgs/*.xml.* -x *.default");
  } else {
    $file = "$file.plv_preset";
    shell_exec("zip './downloads/$file' ../cfgs/*.xml.$preset");
  }
  if(!file_exists("./downloads/$file")){
    echo '<script>alert("Preset not available")</script>';
    echo '<script>history.back()</script>';
  } else {
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Disposition: attachment; filename=$file");
    header("Content-Type: application/zip");
    header("Content-Transfer-Encoding: binary");

    // read the file from disk
    readfile("./downloads/$file");
    unlink("./downloads/$file");
  }
?>
