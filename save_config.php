<?php
$config = $_GET["config"];
shell_exec("cp ../../config/settings.xml ./cfgs/settings.xml.$config");
shell_exec("cp ../../config/sequences.xml ./cfgs/sequences.xml.$config");
?>
<script>
alert("Das Preset wurde gespeichert!")
window.location.href = 'presets.php';
</script>
