<?php
  $preset = $_POST["preset"];
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $tmp_file = $_FILES["fileToUpload"]["tmp_name"];
  if(isset($_POST["submit"])) {
    if($FileType == "plv_midi") {
      $check = shell_exec("unzip -l '$tmp_file' | grep -c .mid");
    } else {
      $check = shell_exec("unzip -l '$tmp_file' | grep -c settings.xml");
    }
    if($check == 0) {
      echo '<script>alert("File is not a valid plv file.")</script>';
      $uploadOk = 0;
    }
    if($FileType == "plv_preset" && $check > 1) {
      echo '<script>alert("File is not a valid plv_preset file.")</script>';
      $uploadOk = 0;
    }
  }
  if (file_exists($target_file)) {
    echo '<script>alert("Sorry, file already exists.")</script>';
    $uploadOk = 0;
  }
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo '<script>alert("Sorry, your file is too large.")</script>';
    $uploadOk = 0;
  }
  if($FileType != "plv_preset" && $FileType != "plv_bank" && $FileType != "plv_midi") {
    echo '<script>alert("Sorry, only plv_preset, plv_bank & plv_midi files are allowed.")</script>';
    $uploadOk = 0;
  }
  if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      if($FileType == "plv_bank" && "$preset" == "all"){
        shell_exec("find ../cfgs -type f -name '*.xml.*' ! -name '*.default' -delete");
        shell_exec("unzip -d .. '$target_file'");
        echo '<script>alert("The bank file has been stored.")</script>';
      } elseif ($FileType == "plv_bank") {
        echo '<script>alert("Please select \"Preset Bank\" to restore a bank file!")</script>';
        echo '<script>history.back();</script>';
      }
      if($FileType == "plv_preset" && ("$preset" == "all" | "$preset" == "" | "$preset" == "midi")){
        echo '<script>alert("Please select a preset to store a preset file!")</script>';
        echo '<script>history.back();</script>';
      } elseif ($FileType == "plv_preset") {
        shell_exec("unzip -d ./uploads '$target_file'");
        shell_exec("mv ./uploads/cfgs/settings.xml.* ../cfgs/settings.xml.$preset");
        shell_exec("mv ./uploads/cfgs/sequences.xml.* ../cfgs/sequences.xml.$preset");
        shell_exec("rm -Rf ./uploads/cfgs/");
        echo '<script>alert("The preset file has been stored.")</script>';
      }
      if($FileType == "plv_midi" && ("$preset" != "midi" | "$preset" == "")){
        echo '<script>alert("Please select \"MIDI Bank\" to restore MIDI files!")</script>';
        echo '<script>history.back();</script>';
      } elseif ($FileType == "plv_midi") {
        shell_exec("rm -r ../../../Songs/*; unzip -d ../../.. '$target_file'");
        echo '<script>alert("The MIDI files have been stored.")</script>';
      }
    } else {
      echo '<script>alert("Sorry, there was an error uploading your file.")</script>';
    }
    unlink("$target_file");
  }
  echo '<script>window.top.location.href = \'file.php\';</script>';
?>
