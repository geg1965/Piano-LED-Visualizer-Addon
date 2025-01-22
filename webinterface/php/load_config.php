<?php
$config = $_GET["config"];
$output = shell_exec("./load_config.sh $config");
echo "<pre>$output</pre>";
sleep(10);
?>
<script>
setTimeout(function(){alert("Preset was loaded!")}, 0);
window.top.location.href = 'index.php';
</script>
