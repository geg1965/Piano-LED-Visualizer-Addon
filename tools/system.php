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
  <h1 style="color:blue;text-align:center;">Raspberry PI OS tools and infos</h1>
  <form style="text-align:center;" action="set_pw.php">
    <label for="port">Enter new password for user "plv" </label>
    <input type="password" id="password" name="password" placeholder="empty for default">
    <input type="submit" style="color:red;width: 9em;" value="set password">
    <input type="checkbox" onclick="myFunction()">Show Password
  </form>
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
