<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>WiFi Informations</title>
  <script type="text/javascript">
    function refreshPopup() {
      setInterval(function() {
        window.location.reload();
      }, 5000); // Refresh every 5 seconds
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
  $ip = shell_exec("ifconfig wlan0 | grep ' inet ' | awk '{print $2 }'");
  $config = shell_exec("iwconfig wlan0");
  $ap = shell_exec("iwlist wlan0 scan | grep -v -e Unknown -e Extra:tsf");
  $wlan = shell_exec("iwconfig wlan0 | grep Signal | cut -d '-' -f 2 | cut -d ' ' -f 1");
  $time = shell_exec("ping -c 1 `netstat -rn | grep ^0.0.0.0 | awk '{print $2}'`| grep time= |  awk '{print $7}' | sed 's/time=//g'");
  if ($wlan > 70)
  {
    $color1 = "red";
  } else {
    $color1 = "green";
  }
  if ($time > 20)
  {
    $color2 = "red";
  } else {
    $color2 = "blue";
  }
  ?>
  <img style="float:left;width:100px;height:38px;" src="/imgs/wifi.png">
  <img style="float:right;width:100px;height:38px;" src="/imgs/empty.png">
  <h1 style="color:blue;text-align:center;">WLAN Informations</h1>
  <font size="1" color="<?php echo $color1; ?>">WiFi signal -<?php echo $wlan; ?>dBm</font>
  <svg width="100%" height="24">
    <rect id="box1" x="0" y="3" stroke="black" fill="<?php echo $color1; ?>" width="calc((80 - <?php echo $wlan; ?>) * 3%)" height="10"/>
    <rect id="box2" x="0" y="13" stroke="black" fill="<?php echo $color2; ?>" width="calc((<?php echo $time; ?>) * 3%)" height="10"/>
  </svg>
  <font size="1" color="<?php echo $color2; ?>">Respons time <?php echo $time; ?>ms</font>
  <h3>Current connection:</h3>
  <pre>IP        <?php echo "$ip"?></pre>
  <pre><?php echo "$config"?></pre>
  <iframe src="list_file.php?path=/proc/net/&file=wireless" width="98%" height="125px" style="border:1px solid black;">
  </iframe>
  <h3>Accesspoints:</h3>
  <pre><?php echo "$ap"?></pre>
</body>
</hrtml>
