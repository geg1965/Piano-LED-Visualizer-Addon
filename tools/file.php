<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preset Backup & Restore</title>
</head>
<body>
  <img style="float:left;width:100px;height:38px;" src="/imgs/file.png">
  <img style="float:right;width:100px;height:38px;" src="/imgs/empty.png">
  <h1 style="color:blue;text-align:center;">Preset Manager</h1>
  <h3 style="text-align:center;">Individual presets and preset banks can be saved and restored. When restoring individual presets, the destination can be selected. Restoring an entire bank will overwrite or delete existing presets.</h3><br>

  <form action="upload.php" method="post" enctype="multipart/form-data" style="text-align:center;">
    Select preset- or bank-file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload" accept=".plv_bank,.plv_preset">
    <input type="submit" value="Upload" name="submit">
  </form><br><br>

  <form action="download.php" style="text-align:center;">
    Set name for download-file
    <input type="test" name="file" id="fileToDownload" required="required">
    <select id="preset" size="1" name="preset">
      <optgroup label="Save Preset:" style="color: gray; font-family: 'Times New Roman', Times, serif;">
      <option selected disabled hidden value="">Select Preset</option>
      <option style="color: black" value="all">Bank</option>
      <?php
        for ($i = 1; $i <= 128; $i++) {
          echo "<option style=\"color: black\" value=\"$i\">Preset $i</option>";
        }
      ?>
      </optgroup>
    </select>
    <input type="submit" value="Download" name="submit">
  </form><br><br>
</body>
</html>
