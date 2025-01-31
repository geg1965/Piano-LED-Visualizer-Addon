<!doctype html>
<html>
<head>
    <title>Piano LED Emulator</title>
    <script type="text/javascript">
        window.resizeTo(100, 120);
        function refreshPopup() {
            setInterval(function() {
                window.location.reload();
            }, 1000); // Refresh every 1 seconds
        }
    </script>
    <style>
      #box {
      fill: green;
      stroke: black;
      }
    </style>
</head>

<body onload="refreshPopup();">


<?php
$wlan = shell_exec("iwconfig wlan0 | grep Signal | cut -d '-' -f 2 | cut -d ' ' -f 1");
?>

<svg width="80" height="14">
  <rect id="box" x="0" y="3" width="calc((80 - <?php echo $wlan; ?>) * 2)" height="10"/>
</svg>
</body>
</hrtml>
