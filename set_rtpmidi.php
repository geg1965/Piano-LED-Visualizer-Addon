<?php
$ip1 = $_GET["ip1"];
$ip2 = $_GET["ip2"];
$ip3 = $_GET["ip3"];
$ip4 = $_GET["ip4"];
$port = $_GET["port"];
$name = $_GET["name"];
shell_exec("cp ./cfgs/default.ini /etc/rtpmidid/");
shell_exec("echo [connect_to] >> /etc/rtpmidid/default.ini");
shell_exec("echo hostname=$ip1.$ip2.$ip3.$ip4 >> /etc/rtpmidid/default.ini");
shell_exec("echo port=$port >> /etc/rtpmidid/default.ini");
shell_exec("echo name=$name >> /etc/rtpmidid/default.ini");
shell_exec("systemctl restart rtpmidid");
sleep(1);
?>
<script>
window.top.location.href = 'index.php';
</script>
