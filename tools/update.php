<?php
  shell_exec("git clone https://github.com/geg1965/Piano-LED-Visualizer-Addon update");
  shell_exec("rsync -r ./update/* ../../php; rm -Rf update");
?>
<script>
  var txt = "Upadate completed!";
  alert(txt);
  window.top.location.href = '/index.php';
</script>
