<?php
  shell_exec("nohup bluetoothctl --timeout 2 scan on > /dev/null 2>&1 &");
  sleep(2);
  echo "Available devices";
  $devices=shell_exec("bluetoothctl devices | grep ^Device");
  $content="
    <code>
      <pre>$devices</pre>
    </code>";
  echo $content;
  echo "Paired devices";
  $devices=shell_exec("bluetoothctl devices Paired");
  $content="
    <code>
      <pre>$devices</pre>
    </code>";
  echo $content;
  echo "Connected devices";
  $devices=shell_exec("bluetoothctl devices Connected");
  $content="
    <code>
      <pre>$devices</pre>
    </code>";
  echo $content;
?>
