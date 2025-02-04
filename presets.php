<!doctype html>
<html xmlns:x-transition="" lang="eng">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" sizes="180x180" href="/imgs/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/imgs/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/imgs/favicon-16x16.png">
  <link rel="mask-icon" href="/imgs/safari-pinned-tab.svg" color="#0ed3cf">
  <meta name="msapplication-TileColor" content="#da532c">
  <meta name="theme-color" content="#0ed3cf">
  <title>PLV Presets</title>
  <style>
    @media (min-width: 861px) {
      .banner {
        display: flex;
      }
      .banner_narrow {
        display: none;
      }
    }
    @media (max-width: 860px) {
      .banner {
        display: none;
      }
      .banner_narrow {
        display: flex;
      }
    }
    @media (max-width: 590px) {
      .banner_narrow {
        display: none;
      }
    }
    .banner {
      position: absolute;
      top: 0px;
      left: calc(50% - 184px);
      justify-content: center;
    }
    .banner_narrow {
      position: absolute;
      top: 0px;
      left: calc(50% - 43px);
      justify-content: center;
    }
    @media (min-width: 471px) {
      .wifi {
        display: flex;
      }
    }
    @media (max-width: 470px) {
      .wifi {
        display: none;
      }
    }
    @keyframes spin {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
    .loader {
      position: absolute;
      top: 14px;
      left: 95px;
      display: none;
      transform: translate(-50%, -50%);
    }
    .loading {
      border: 3px solid #ccc;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      border-top-color: #1ecd97;
      border-left-color: #1ecd97;
      animation: spin 1s infinite ease-in;
    }
    .wifi {
      position: absolute;
      top: -4px;
      left: calc(100% - 230px);
    }
    select {
      position: absolute;
      top: 0px;
      left: 5px;
      width: 110px;
      font-size: 12px;
      border-radius: 10px;
      padding: 6px 4px;
      border: 1px solid #d7d7d7;
      background: #fff;
      background: rgba(0,0,0,0) url(./imgs/favicon-16x16.png) no-repeat scroll 80px center/18px auto;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      color: #FFFFFF;
    }
  </style>
</head>
<body>
   <script>
    function selectActionLoad(evt) {
      document.getElementsByClassName("loader")[0].style.display = "block";
      let preset = `./load_config.php?config=${evt.target.value}`;
      document.location.href = (preset);
    }
    function selectActionSave(evt) {
      let preset = `./save_config.php?config=${evt.target.value}`;
      document.location.href = (preset);
    }
  </script>
  <div class="loader">
    <div class="loading">
    </div>
  </div>
  <select id="load" size="1" name="load" style="left: 5px" onchange="selectActionLoad(event)">
    <optgroup label="Load Preset:" style="color: gray; font-family: 'Times New Roman', Times, serif;">
    <option selected disabled hidden value="">Load Preset</option>
    <?php
      for ($i = 1; $i <= 127; $i++) {
        echo "<option style=\"color: black\" value=\"$i\">Preset $i</option>";
      }
    ?>
    </optgroup>
    <optgroup label="Read-Only:" style="color: gray; font-family: 'Times New Roman', Times, serif;">
    <option style="color: black" value="default">Default</option>
    </optgroup>
  </select>
  <select id="save" size="1" name="save" style="left: 125px" onchange="selectActionSave(event)">
    <optgroup label="Save Preset:" style="color: gray; font-family: 'Times New Roman', Times, serif;">
    <option selected disabled hidden value="">Save Preset</option>
    <?php
      for ($i = 1; $i <= 127; $i++) {
        echo "<option style=\"color: black\" value=\"$i\">Preset $i</option>";
      }
    ?>
    </optgroup>
  </select>
  <div class="banner">
    <img src="./imgs/banner.png" height="25" width="369">
  </div>
  <div class="banner_narrow">
    <img src="./imgs/banner_narrow.png" height="25" width="86">
  </div>
  <div class="wifi">
     <iframe src="/tools/wifi.php" width="100" height="35" name="PRESETS" title="PLV Presets"frameborder="0"></iframe>
  </div>
</body>
</html>
