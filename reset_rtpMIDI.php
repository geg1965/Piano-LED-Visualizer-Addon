<?php
shell_exec("cp ./cfgs/default.ini /etc/rtpmidid/");
shell_exec("systemctl restart rtpmidid");
sleep(1);
?>
<script>
alert("The rtpMIDI configuration was set to default!");
window.top.location.href = 'index.php';
</script>
