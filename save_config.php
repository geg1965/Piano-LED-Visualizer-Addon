<!DOCTYPE html>
<html>
<head>
  <title>PLV load configuration</title>
</head>
<body>
  <?php
    $config = $_GET["config"];
    shell_exec("cp ./cfgs/settings.xml.$config ../../config/settings.xml");
    shell_exec("cp ./cfgs/sequences.xml.$config ../../config/sequences.xml");
    shell_exec("systemctl restart visualizer");
    sleep(10);
  ?>
  <script>
    var txt = "Preset <?php echo $config; ?> wurde geladen!";
    alert(txt);
    window.top.location.href = 'index.php';
  </script>
</body>
</html>
root@pianoledvisualizer:/home/Piano-LED-Visualizer/webinterface/php# cat save_config.php
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
    var txt = "Preset <?php echo $config; ?> wurde gespeichert!";
    alert(txt);
    window.location.href = 'presets.php';
  </script>
</body>
</html>
