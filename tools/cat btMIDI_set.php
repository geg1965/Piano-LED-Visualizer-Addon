<?php
  $action = $_GET["action"];
  $mac = $_GET["mac"];
  shell_exec("nohup bluetoothctl --timeout 2 scan on > /dev/null 2>&1 &");
  sleep(2);
  if ("$action" !== "") {
    $result=shell_exec("bluetoothctl $action $mac");
  }
?>
<script>
alert("Action <?=$action?> for <?=$mac?> was done!");
window.top.location.href = 'btMIDI.php';
</script>
