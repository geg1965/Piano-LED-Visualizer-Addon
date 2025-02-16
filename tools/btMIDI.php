<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PLV Bluetooth MIDI configuration</title>
  <style>
    iframe{
      background-color:#DDDDDD;
    }
    input[type=text]:focus {
      background-color: lightblue;
    }
  </style>
</head>
<body>
  <img style="float:left;width:100px;height:38px;" src="/imgs/btMIDI.png">
  <img style="float:right;width:100px;height:38px;" src="/imgs/empty.png">
  <h1 style="color:blue;text-align:center;">Configure Bluetooth connections</h1>
  <h3 style="text-align:center;">After a change of the Bluetooth MIDI connection, the appropriate input and playback port must be selected in the Piano LED Visualizer on the MIDI page and "CONNECT PORTS" must be executed.</h3><br>
  <form action="btMIDI_set.php" style="text-align:center;">
    <label for="mac">MAC Adress:</label>
    <input type="text" id="mac" name="mac"  placeholder="xx:xx:xx:xx:xx:xx" required="required">
    <select id="action" required="required" name="action">
      <option value="connect">Connect</option>
      <option value="disconnect">Disconnect</option>
      <option value="pair">Pair</option>
      <option value="remove">Remove</option>
      <option value="trust">Trust</option>
      <option value="untrust">Untrust</option>
      <option value="block">Block</option>
      <option value="unblock">Unblock</option>
    </select>
    <input type="submit" style="color:green;width: 5em;" value="Submit"><br>
  </form>
  <br><br>
  <h2>Bluetooth devices:
  <svg id="refresh-logs" onclick="return refresh();" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> <path d="M2.5 2v6h6M21.5 22v-6h-6"/><path d="M22 11.5A10 10 0 0 0 3.2 7.2M2 12.5a10 10 0 0 0 18.8 4.2"/></svg></h2>
  <iframe src="btMIDI_list.php" width="98%" height="400px" style="border:1px solid black;">
  </iframe>
  <?php $version = shell_exec("dpkg -l| grep ' bluez ' | awk '{print $3}'");?>
  <font size="1" color="gray">Installed  bluez version: <?= $version ?></font>
  <script type="text/javascript">
    function refresh() {
      window.location.reload(true);
    }
  </script>
</body>
</html>
