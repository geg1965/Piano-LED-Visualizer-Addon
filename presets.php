<!doctype html>
<html>
  <head>
    <title>PLV Presets</title>
    <style>
      @media (min-width: 861px) {
        img {
          display: flex;
        }
      }
      @media (max-width: 860px) {
        img {
          display: none;
        }
      }
    .banner {
      position: absolute;
      top: 0px;
      left: calc(50% - 200px);
      justify-content: center;
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
      color: #000000;
    }
    </style>
  </head>
  <body>
    <select size="1" left="200px" name="load" style="color: white" onchange="document.location.href=this.value">
      <optgroup label="Load Preset:" style="color: black; font-family: 'Times New Roman', Times, serif;">
      <option selected disabled hidden value="">Load Preset</option>
      <option value="./load_config.php?config=01">Preset 01</option>
      <option value="./load_config.php?config=02">Preset 02</option>
      <option value="./load_config.php?config=03">Preset 03</option>
      <option value="./load_config.php?config=04">Preset 04</option>
      <option value="./load_config.php?config=05">Preset 05</option>
      <option value="./load_config.php?config=06">Preset 06</option>
      <option value="./load_config.php?config=07">Preset 07</option>
      <option value="./load_config.php?config=08">Preset 08</option>
      <option value="./load_config.php?config=09">Preset 09</option>
      <option value="./load_config.php?config=10">Preset 10</option>
      <option value="./load_config.php?config=11">Preset 11</option>
      <option value="./load_config.php?config=12">Preset 12</option>
      <option value="./load_config.php?config=13">Preset 13</option>
      <option value="./load_config.php?config=14">Preset 14</option>
      <option value="./load_config.php?config=15">Preset 15</option>
      <option value="./load_config.php?config=16">Preset 16</option>
      <option value="./load_config.php?config=17">Preset 17</option>
      <option value="./load_config.php?config=18">Preset 18</option>
      <option value="./load_config.php?config=19">Preset 19</option>
      </optgroup>
    </select>
&nbsp;
    <select size="1" name="save" style="color: white; left: 125px;" onchange="document.location.href=this.value">
      <optgroup label="Save Preset" style="color: black; font-family: 'Times New Roman', Times, serif;">
      <option selected disabled hidden value="">Save Preset</option>
      <option value="./save_config.php?config=01">Preset 01</option>
      <option value="./save_config.php?config=02">Preset 02</option>
      <option value="./save_config.php?config=03">Preset 03</option>
      <option value="./save_config.php?config=04">Preset 04</option>
      <option value="./save_config.php?config=05">Preset 05</option>
      <option value="./save_config.php?config=06">Preset 06</option>
      <option value="./save_config.php?config=07">Preset 07</option>
      <option value="./save_config.php?config=08">Preset 08</option>
      <option value="./save_config.php?config=09">Preset 09</option>
      <option value="./save_config.php?config=10">Preset 10</option>
      <option value="./save_config.php?config=11">Preset 11</option>
      <option value="./save_config.php?config=12">Preset 12</option>
      <option value="./save_config.php?config=13">Preset 13</option>
      <option value="./save_config.php?config=14">Preset 14</option>
      <option value="./save_config.php?config=15">Preset 15</option>
      <option value="./save_config.php?config=16">Preset 16</option>
      <option value="./save_config.php?config=17">Preset 17</option>
      <option value="./save_config.php?config=18">Preset 18</option>
      <option value="./save_config.php?config=19">Preset 19</option>
      </optgroup>
    </select>
    <div class="banner">
      <img src="./imgs/banner.png" height="25" width="400">
    </div>
  </body>
</html>
