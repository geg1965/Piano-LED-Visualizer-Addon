<!DOCTYPE html>
<html>
<body>
<h1><br>Configure static rtpMIDI connection</h1>
<h3>After a change of the rtpMIDI configuration, the appropriate input and playback port must be selected in the Piano LED Visualizer on the MIDI page and "CONNECT PORTS" must be executed.</h3><br>
<form action="/set_rtpmidi.php">
  <label for="IP1">IP......................</label>
  <input type="number" id="ip1" name="ip1" min="0" max="255" value="192" required="required"> .
  <input type="number" id="ip2" name="ip2" min="0" max="255" value="168" required="required"> .
  <input type="number" id="ip3" name="ip3" min="0" max="255" value="0" required="required"> .
  <input type="number" id="ip4" name="ip4" min="0" max="255" value="1" required="required"><br><br>
  <label for="name">Port..................</label>
  <input type="number" id="port" name="port" min="5000" max="6000" value="5004" required="required"><br><br>
  <label for="name">Bonjour-Name.</label>
  <input type="text" id="name" name="name" required="required"><br><br><br>
  <input type="submit">
</form>

</body>
</html>
