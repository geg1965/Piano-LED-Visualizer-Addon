<!DOCTYPE html>
<html>
  <head>
    <title>PLV rtpMIDI configuration</title>
    <style>
      iframe{
        background-color:#DDDDDD;
      }
    </style>
  </head>
<body>
  <img style="float:left;width:100px;height:38px;" src="/imgs/etpMIDI.png">
  <img style="float:right;width:100px;height:38px;" src="/imgs/empty.png">
  <h1 style="color:blue;text-align:center;">Configure static rtpMIDI connections</h1>
  <h3 style="text-align:center;">After a change of the rtpMIDI configuration, the appropriate input and playback port must be selected in the Piano LED Visualizer on the MIDI page and "CONNECT PORTS" must be executed.</h3>
  <iframe src="rtpMIDI_resp.php" width="98%" height="100px" style="border:1px solid black;">
  </iframe>
  <h3></h3><br>
  <form action="rtpMIDI_set.php" style="text-align:center;">
    <label for="IP">IP...........................</label>
    <input type="number" style="width: 4em;" id="ip1" name="ip1" min="0" max="255" value="192" required="required"> .
    <input type="number" style="width: 4em;" id="ip2" name="ip2" min="0" max="255" value="168" required="required"> .
    <input type="number" style="width: 4em;" id="ip3" name="ip3" min="0" max="255" value="0" required="required"> .
    <input type="number" style="width: 4em;" id="ip4" name="ip4" min="0" max="255" value="1" required="required"><br><br>
    <label for="port">Port.....................</label>
    <input type="number" id="port" name="port" min="5000" max="6000" value="5004" required="required">
    <label for="replace">&emsp;&emsp;Replace all connections</label>
    <input type="checkbox" id="replace" name="replace" value="yes" onclick="enable_box(this.checked)"><br><br>
    <label for="name">Bonjour-Name....</label>
    <input type="text" id="name" name="name" required="required" placeholder="Remote Bonjour-Name">
    <label for="minimal">&ensp;Minimal cfg</label>
    <input type="checkbox" id="minimal" name="minimal" value="yes" disabled><br><br><br>
    <label>Add connection to rtpMIDI configuration....</label>
    <input type="submit" style="color:green;width: 9em;" value="Add connection"><br><br><br>
    <label>Reset rtpMIDI configuration to default........</label>
    <input type="button" style="color:red;width: 9em;" value="Reset to defaults" onclick="location.href='rtpMIDI_reset.php';">
  </form>
  <br><br>
  <h2>The active rtpMIDI configuration:</h2>
  <iframe src="list_file.php?path=/etc/rtpmidid/&file=default.ini" width="98%" height="400px" style="border:1px solid black;">
  </iframe>
  <?php $version = shell_exec("dpkg -l| grep rtp | awk '{print $3}'");?>
  <font size="1" color="gray">Installed rtpMIDI version: <?= $version ?></font>
  <script>
    function enable_box(status)
    {
      status=!status;
      minimal.disabled = status;
    }
  </script>
</body>
</html>
