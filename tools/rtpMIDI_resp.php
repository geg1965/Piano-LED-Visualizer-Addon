<!doctype html>
<html>
<head>
  <title>rtpMIDI Hosts response</title>
  <script type="text/javascript">
    function refreshPopup() {
      setInterval(function() {
        window.location.reload();
      }, 5000); // Refresh every 5 seconds
    }
  </script>
</head>
<body onload="refreshPopup();">
  <?php
    $color = array("black", "blue", "green", "yellow", "magenta", "purple", "blue", "green", "yellow", "magenta", "purple");
    $col_t = array("white", "white", "white", "black", "black", "white", "white", "white", "black", "black", "white");
    $pos_y = array("0", "34", "54", "74", "94", "114", "134", "154", "174", "194", "214");
    $connect_to=shell_exec("grep -A 2 '^\[connect_to\]' /etc/rtpmidid/default.ini");
    $ips=shell_exec("echo '$connect_to' | grep  -c 'hostname'");
    if ($ips > 10) {
      $ips="10";
    }
    echo "<svg width=\"100%\" height=\"calc(20 + $ips * 20)\">";
    echo "<text x=\"2\" y=\"13\">rtpMIDI static Hosts response time:</text>";
    for ($i = 1; $i <= $ips; $i++) {
      $ip=shell_exec("echo '$connect_to' | grep  'hostname' | grep -n '' | grep '^$i:' | cut -d '=' -f 2");
      $ip = str_replace("\n", '', $ip);
      $time=shell_exec("ping -c 1 -W 1 $ip");
      $time=shell_exec("echo '$time' | grep time= |  awk '{print $7}' | sed 's/time=//g'");
      if ("$time" == "") {
        $time="1000";
      }
      if ($time > 20) {
        $col_f="red";
        $fill_t="white";
      } else {
        $col_f="$color[$i]";
        $fill_t="$col_t[$i]";
      }
      echo "<rect id=\"box\" x=\"0\" y=\"calc(2 + $i * 20)\" stroke=\"black\" fill=\"$col_f\" width=\"calc($time * 3%)\" height=\"14\"/>";
      echo "<text x=\"3\" y=\"$pos_y[$i]\" fill=\"$fill_t\" font-size=\"small\">$ip</text>";
    }
  ?>
</svg>

</body>
</html>
