<!doctype html>
<html class="dark" xmlns:x-transition="" lang="eng">
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
  <title>Piano LED Visualizer Addon</title>
  <title>Move Button Example</title>
  <style>
    .absolute-button {
      position: absolute;
      top: 55px;
      left: calc(50% - 80px);
    }
    select {
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
  </style>
</head>

<body>
  <script>
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
  </script>

  <iframe src="/presets.php" width="100%" height="35" name="PRESETS" title="PLV Presets"frameborder="0"></iframe>

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
  <button class="absolute-button"data-url="LED-Piano.php"type="button">Refresh </button>

    <select id="tools" size="1" name="tools" style="color: white" onchange="window.open(this.value,'location=no','width=800,height=600');selectElement('tools', '');">
      <optgroup label="System" style="color: black; font-family: 'Times New Roman', Times, serif;">
        <option selected disabled hidden value="">Tools</option>
        <option value="rtpMIDI.php">rtpMIDI</option>
        <option value="./tools.php">System</option>
      </optgroup>
      <optgroup label="Other" style="color: black; font-family: 'Times New Roman', Times, serif;">
        <option value="https://flyingnotes.app">flyingnotes</option>
        <option value="ledemu2.html">LED Emulator</option>
      </optgroup>
      <optgroup label="Info" style="color: black; font-family: 'Times New Roman', Times, serif;">
        <option value="">About</option>
        <option value="https://github.com/geg1965/Piano-LED-Visualizer-Addon/">GitHub</option>
        <option value="https://github.com/geg1965/Piano-LED-Visualizer-Addon/blob/master/README.md">Help</option>
      </optgroup>
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
  </script>
</body>
</html>
