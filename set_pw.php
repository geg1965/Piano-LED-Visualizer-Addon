<?php
$P = $_GET["password"];
$txt = "";
if ($P == "") {
  $txt = " to the default password";
  $P = "visualizer";
} else {
  $txt = "";
}
shell_exec("printf '$P''\n''$P''\n' | passwd plv");

?>
<script>
var txt = "Password for user plv have been set<?php echo $txt; ?>!";
alert(txt);
window.top.location.href = 'tools.php';
</script>
