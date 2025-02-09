<!DOCTYPE html>
<html>
<head>
  <title>PLV System Tools</title>
  <style>
    iframe{
      background-color:#DDDDDD;
    }
  </style>
</head>
<body>
  <div id="maincontainer ">
  <img style="float:left;width:100px;height:38px;" src="/imgs/system.png">
  <img style="float:right;width:100px;height:38px;" src="/imgs/empty.png">
  <h1 style="color:blue;text-align:center;">Raspberry PI OS tools and infos</h1>
  <form style="text-align:center;" action="set_pw.php">
    <label for="password">Enter new password for user "plv" </label>
    <input type="password" id="password" name="password" placeholder="empty for default">
    <input type="submit" style="color:red;width: 9em;" value="set password">
    <input type="checkbox" onclick="myFunction()">Show Password
  </form><br>

  <form style="text-align:center;" method="post" action="">
    <?php
      $selected = shell_exec("cat ./inis/addon.ini") + 1;
    ?>
    <label for="channel">Global MIDI-Channel for PLV preset change </label>
    <select method="post" name="channel" onchange="this.form.submit()">
      <optgroup label="Select" style="color: gray; font-family: 'Times New Roman', Times, serif;">
      <option disabled hidden value="">Channel</option>
      <option <?php if($selected == 99){echo("selected");}?> style="color: black" value="99">Off</option>
      <?php
        for ($i = 1; $i <= 16; $i++) {
          echo "<option "; if($selected == $i){echo("selected ");}; echo "style=\"color: black\" value=\"$i\">Ch. $i</option>";
        }
      ?>
    </select>
  </form>
  <?php
    if(isset($_POST["channel"])) {
      $channel=$_POST["channel"] - 1;
      shell_exec("echo $channel > ./inis/addon.ini");
      header("Refresh:0");
    }
  ?>

  <br>
  <h2>OS Information:</h2>
  <iframe src="list_file.php?path=/etc/&file=os-release" width="98%" height="220px" style="border:1px solid black;">
  </iframe>

  <h2>Hardware Information:</h2>
  <iframe src="list_file.php?path=/proc/&file=cpuinfo" width="98%" height="280px" style="border:1px solid black;">
  </iframe>
  <?php $uptime = shell_exec("uptime");?>
  <font size="1" color="gray">Uptime: <?= $uptime ?></font>
  <script>
    function myFunction() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
</body>
</html>
