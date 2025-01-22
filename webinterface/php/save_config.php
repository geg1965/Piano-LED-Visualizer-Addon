<?php
$config = $_GET["config"];
$output = shell_exec("./save_config.sh $config");
echo "<pre>$output</pre>";
?>
<script>
alert("Preset was saved!")
window.location.href = 'presets.php';
</script>
