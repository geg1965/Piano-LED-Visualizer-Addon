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
  <title>Piano LED Visualizer @-on</title>
  <style>
    .button1 {
      position: absolute;
      top: 55px;
      left: calc(50% - 80px);
    }
    @media (min-width: 500px) {
      .wifi {
        width: 110px;
        left: calc(100% - 240px);
        background: #fff;
        background: rgba(0,0,0,0) url(./imgs/wifi.png) no-repeat scroll 80px center/18px auto;
      }
    }
    @media (max-width: 500px) {
      .wifi {
        width: 36px;
        left: calc(100% - 164px);
        background: #fff;
        background: rgba(0,0,0,0) url(./imgs/wifi.png) no-repeat scroll 8px center/18px auto;
      }
    }
    .wifi {
      position: absolute;
      top: 8px;
      font-size: 12px;
      border-radius: 10px;
      padding: 6px 4px;
      border: 1px solid #d7d7d7;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      color: #000000;
    }
    .tools {
      position: absolute;
      top: 8px;
      left: calc(100% - 120px);
      width: 110px;
      font-size: 12px;
      border-radius: 10px;
      padding: 6px 4px;
      border: 1px solid #d7d7d7;
      background: #fff;
      background: rgba(0,0,0,0) url(./imgs/tools.png) no-repeat scroll 80px center/18px auto;
      -webkit-appearance: none;
      -moz-appearance: none;
      appearance: none;
      color: #000000;
    }
    body {
      background-color: #1c87c9;
    }
    #message-box {
    top:2%;

    left:10%;
    width:80%;

    border: 1px solid black;
    background-color:#FFFFFF;
    position:absolute;
    z-index:10000;
}

.disabled-body {
    background-color: rgba(0,0,0,0.5);
}

.fadeable {
    opacity: 1;
    transition: opacity 3s;
}

.fade {
    opacity: 0 !important;
}
  </style>
</head>

<body>
  <script>
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  </script>
  <iframe src="/presets.php" width="100%" height="36" name="PRESETS" title="PLV Presets"frameborder="0"></iframe>
  <style type=text/css>
    [data-url]::after {
      content: attr(data-url)
    }
    #iFrame {
      min-height: 2000px;
      width: 100%;
    }
  </style>
  <div> <iframe id="iFrame" src="LED-Piano.php"></iframe> </div>
  <button class="button1"data-url="LED-Piano.php"type="button">Refresh </button>
  <select class="tools" id="tools" size="1" name="tools" style="color: white;" onchange="selectAction(event); selectElement('tools', '');">
    <optgroup label="System" style="color: black; font-family: 'Times New Roman', Times, serif;">
      <option selected disabled hidden value="">Tools</option>
      <option>rtpMIDI</option>
      <option>btMIDI</option>
      <option>System</option>
      <option>Update</option>
    </optgroup>
    <optgroup label="Other" style="color: black; font-family: 'Times New Roman', Times, serif;">
      <option>flyingnotes</option>
      <option>LED Emulator</option>
    </optgroup>
    <optgroup label="Info" style="color: black; font-family: 'Times New Roman', Times, serif;">
      <option>About</option>
      <option>GitHub</option>
      <option>Help</option>
    </optgroup>
  </select>
  <select class="wifi" id="wifi" size="1" name="wifi" style="color: black; font-family: 'Times New Roman', Times, serif; text-align: center;" onchange="selectAction(event); fi', '');">
    <option selected disabled hidden value=""></option>
    <option>WiFi info</option>
  </select>
  <script>
    Array.prototype.forEach.call(document.querySelectorAll('[data-url]'), function(elem) {
      elem.addEventListener('click', function(e) {
        iFrame.src = this.dataset.url
      })
    })
    function selectElement(id, valueToSelect) {
      let element = document.getElementById(id);
      element.value = valueToSelect;
    }
    function selectAction(evt) {
      switch (evt.target.value) {
        case "WiFi info":
          window.open('./tools/wifi_info.php','tools','width=800,height=600');
          break;
        case "rtpMIDI":
          window.open('./tools/rtpMIDI.php', 'tools', 'width=800,height=600');
          break;
        case "btMIDI":
          window.open('./tools/btMIDI.php', 'tools', 'width=800,height=600');
          break;
        case "System":
          window.open('./tools/system.php', 'tools', 'width=800,height=600');
          break;
        case "Update":
          if (confirm('Are you sure you want to update Piano LED Visualizer @-on?')) {
            var url= "./tools/update.php";
            window.location = url;
          }
          break;
        case "flyingnotes":
          window.open('https://flyingnotes.app', 'flyingnotes', 'width=1200,height=500');
          break;
        case "LED Emulator":
          window.open('ledemu2.html', 'emulator', 'width=400,height=600');
          break;
        case "About":
          alert('Piano LED Visualizer @-on v1.1.1\n\nMade by GEG1965 [© 2025]');
          break;
        case "GitHub":
          window.open('https://github.com/geg1965/Piano-LED-Visualizer-Addon/');
          break;
        case "Help":
          window.open('https://github.com/geg1965/Piano-LED-Visualizer-Addon/blob/master/Docs/HELP.md');
          break;
      }
    }
  </script>
</body>
</html>
