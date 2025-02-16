<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Preset Backup & Restore</title>
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
  <img style="float:left;width:100px;height:38px;" src="/imgs/file.png">
  <img style="float:right;width:100px;height:38px;" src="/imgs/empty.png">
  <h1 style="color:blue;text-align:center;">Preset Manager</h1>
  <h3 style="text-align:center;">Individual presets and preset banks can be saved and restored. When restoring individual presets, the destination can be selected. Restoring an entire bank will overwrite or delete existing presets.</h3><br>

  <form action="upload.php" method="post" enctype="multipart/form-data" style="text-align:center;">
    Upload file
    <input type="file" style="width: 265px; border: 1px dashed #BBB;" name="fileToUpload" id="fileToUpload" accept=".plv_bank,.plv_preset" required="required">
    <select id="preset" size="1" name="preset">
      <optgroup label="Destination:" style="color: gray; font-family: 'Times New Roman', Times, serif;">
      <option selected disabled hidden value="">Select Preset</option>
      <option style="color: black" value="all">Bank</option>
      <?php
        $list = shell_exec("cd ../cfgs; ls settings.xml.*");
        for ($i = 1; $i <= 128; $i++) {
          if (preg_match("/settings.xml.$i\n/i", "$list")) {
            $name = "Preset";
            $color = "red";
          } else {
            $name = "Empty";
            $color = "black";
          }
          echo "<option style=\"color: $color\" value=\"$i\">$name $i</option>";
        }
      ?>
      </optgroup>
    </select>
    <input type="submit" style="width: 7em;" value="Upload" name="submit">
  </form><br><br>

  <form action="download.php" style="text-align:center;">
    Download filename
    <input type="text" size="25px" name="file" id="fileToDownload" required="required" pattern="[A-Za-z0-9²³@€\-\(\)\{\}\[\]_ #+&%$§!]{1,25}">
    <select id="preset" size="1" name="preset">
      <optgroup label="Save Preset:" style="color: gray; font-family: 'Times New Roman', Times, serif;">
      <option selected disabled hidden value="">Select Preset</option>
      <option style="color: black" value="all">Bank</option>
      <?php
        for ($i = 1; $i <= 128; $i++) {
          if (preg_match("/settings.xml.$i\n/i", "$list")) {
            $name = "Preset";
            $color = "red";
            $disabled = "";
          } else {
            $name = "Empty";
            $color = "gray";
            $disabled = "disabled";
          }
          echo "<option $disabled style=\"color: $color\" value=\"$i\">$name $i</option>";
        }
      ?>
      </optgroup>
    </select>
    <input type="submit"  style="width: 7em;" value="Download" name="submit">
  </form><br><br>
  <form action="delete_presets.php" style="text-align:center;">
    Remove preset
    <select id="preset" size="1" name="preset">
      <optgroup label="Save Preset:" style="color: gray; font-family: 'Times New Roman', Times, serif;">
        <option selected disabled hidden value="">Select Preset</option>
        <option style="color: red" value="all">Bank</option>
        <?php
          for ($i = 1; $i <= 128; $i++) {
            if (preg_match("/settings.xml.$i\n/i", "$list")) {
              $name = "Preset";
              $color = "red";
              $disabled = "";
            } else {
              $name = "Empty";
              $color = "gray";
              $disabled = "disabled";
            }
            echo "<option $disabled style=\"color: $color\" value=\"$i\">$name $i</option>";
          }
        ?>
      </optgroup>
    </select>
    <input type="submit" style="color:red;width: 7em;" value="Delete" name="submit">
  </form>
  <h2>The active PLV configuration:
  <svg id="refresh-logs" onclick="return refresh();" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"> <path d="M2.5 2v6h6M21.5 22v-6h-6"/><path d="M22 11.5A10 10 0 0 0 3.2 7.2M2 12.5a10 10 0 0 0 18.8 4.2"/></svg></h2>
  <iframe src="list_file.php?path=/home/Piano-LED-Visualizer/config/&file=settings.xml" width="98%" height="400px" style="border:1px solid black;">
  </iframe>
  <script type="text/javascript">
    function refresh() {
      window.location.reload(true);
    }
  </script>
</body>
</html>
