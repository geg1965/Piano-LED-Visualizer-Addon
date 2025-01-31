<!DOCTYPE html>
<html>
  <head>
    <title>PLV save configuration</title>
  </head>
<body>
  <?php
    $config = $_GET["config"];
    shell_exec("cp ../../config/settings.xml ./cfgs/settings.xml.$config");
    shell_exec("cp ../../config/sequences.xml ./cfgs/sequences.xml.$config");
  ?>
  <script>
    var txt = "Preset <?php echo $config; ?> was saved!";
    alert(txt);
    window.location.href = 'presets.php';
  </script>
</body>
</html>
