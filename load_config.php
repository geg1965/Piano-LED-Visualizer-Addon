<!DOCTYPE html>
<html>
<head>
  <title>PLV load configuration</title>
</head>
<body>
  <?php
    $config = $_GET["config"];
    $exists=shell_exec("ls ./cfgs/settings.xml.$config | grep -c $config");
    if ($exists > 0) {
      shell_exec("cp ./cfgs/settings.xml.$config ../../config/settings.xml");
      shell_exec("cp ./cfgs/sequences.xml.$config ../../config/sequences.xml");
      shell_exec("systemctl restart visualizer");
      $txt="Preset $config was loaded!";
      sleep(11);
    } else {
      $txt="Preset $config does not exist!\\n\\nPlease save the preset before loading...";
    }
  ?>
  <script>
    var txt = "<?php echo $txt; ?>";
    alert(txt);
    window.top.location.href = 'index.php';
  </script>
</body>
</html>
