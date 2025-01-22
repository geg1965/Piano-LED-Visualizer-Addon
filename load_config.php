<?php
$config = $_GET["config"];
shell_exec("cp ./cfgs/settings.xml.$config ../../config/settings.xml");
shell_exec("cp ./cfgs/sequences.xml.$config ../../config/sequences.xml");
shell_exec("systemctl restart rtpmidid");
shell_exec("systemctl restart visualizer");
sleep(10);
?>
<script>
setTimeout(function(){alert("Das Preset wurde geladen!")}, 0);
window.top.location.href = 'index.php';
</script>
