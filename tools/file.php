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
  </style>
</head>
<body>
  <img style="float:left;width:100px;height:38px;" src="/imgs/file.png">
  <img style="float:right;width:100px;height:38px;" src="/imgs/empty.png">
  <h1 style="color:blue;text-align:center;">Preset Manager</h1>
  <h3 style="text-align:center;">Individual presets and preset banks can be saved and restored. When restoring individual presets, the destination can be selected. Restoring an entire bank will overwrite or delete existing presets.</h3><br>

  <form action="upload.php" method="post" enctype="multipart/form-data" style="text-align:center;">
    Select file:
    <input type="file" name="fileToUpload" id="fileToUpload" accept=".plv_bank,.plv_preset" required="required">
    <select id="preset" size="1" name="preset">
      <optgroup label="Destination:" style="color: gray; font-family: 'Times New Roman', Times, serif;">
      <option selected disabled hidden value="">Select Preset</option>
      <option style="color: black" value="all">Bank</option>
      <?php
        $list = shell_exec("cd ../cfgs; ls settings.xml.*");
        for ($i = 1; $i <= 128; $i++) {
          if (preg_match("/settings.xml.$i/i", "$list")) {
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
    <input type="submit" value="Upload" name="submit">
  </form><br><br>

  <form action="download.php" style="text-align:center;">
    Download file name:
    <input type="test" name="file" id="fileToDownload" required="required" pattern="[A-Za-z0-9²³@€\-\(\)\{\}\[\]_ #+&%$§!]{1,25}">
    <select id="preset" size="1" name="preset">
      <optgroup label="Save Preset:" style="color: gray; font-family: 'Times New Roman', Times, serif;">
      <option selected disabled hidden value="">Select Preset</option>
      <option style="color: black" value="all">Bank</option>
      <?php
        for ($i = 1; $i <= 128; $i++) {
          if (preg_match("/settings.xml.$i/i", "$list")) {
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
    <input type="submit" value="Download" name="submit">
  </form><br><br>
  <div style="text-align:center">
    <button  style="color:red;" onclick="delete_presets()">Reset all Presets</button>
  </div><br>
  <h2>The active PLV configuration:</h2>
  <iframe src="list_file.php?path=/home/Piano-LED-Visualizer/config/&file=settings.xml" width="98%" height="400px" style="border:1px solid black;">
  </iframe>
  <script>
    function delete_presets() {
     if (confirm('Are you sure you want to delete all presets?')) {
       var url= "/tools/delete_presets.php";
       window.location = url;
     }
    }
  </script>
</body>
</html>
