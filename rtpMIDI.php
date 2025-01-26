<!DOCTYPE html>
<html>
<body>
<h1 style="color:blue;text-align:center;"><br>Configure static rtpMIDI connections</h1>
<h3>After a change of the rtpMIDI configuration, the appropriate input and playback port must be selected in the Piano LED Visualizer on the MIDI page and "CONNECT PORTS" must be executed.</h3><br>
<form action="/set_rtpmidi.php">
  <label for="IP">IP.........................</label>
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
  <input type="button" style="color:red;width: 9em;" value="Reset to defaults" onclick="location.href='reset_rtpMIDI.php';">
</form>
<br><br><br>
<?php
    $path="/etc/rtpmidid/";
    $file="default.ini";

    //read file contents
    $content="
        <h2>Actual rtpMIDI ini file in use ($file):</h2>
            <code>
                <pre>".htmlspecialchars(file_get_contents("$path/$file"))."</pre>
            </code>";

    //display
    echo $content;
?>

<script>
function enable_box(status)
{
  status=!status;
  minimal.disabled = status;
}
</script>
</body>
</html>
