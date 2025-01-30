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
<h1 style="color:blue;text-align:center;">Raspberry PI OS  tools and infos</h1>

<form action="/set_pw.php">
  <label for="port">Set password for user "plv" </label>
  <input type="password" id="password" name="password" placeholder="empty for default">
  <input type="submit" style="color:red;width: 9em;" value="set password">
  <input type="checkbox" onclick="myFunction()">Show Password
</form>
<br><br><br>
<h2>WLAN Informations:</h2>
<iframe src="list_file.php?path=/proc/net/&file=wireless" width="98%" height="400px" style="border:1px solid black;">
</iframe>

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
