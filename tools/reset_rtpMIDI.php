<?php
  shell_exec("cp ./inis/default.ini /etc/rtpmidid/");
  shell_exec("systemctl restart rtpmidid");
  sleep(1);
?>
<script>
  alert("The rtpMIDI configuration was set to default!");
  window.top.location.href = 'rtpMIDI.php';
</script>
