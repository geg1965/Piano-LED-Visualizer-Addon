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
  <title>Piano LED Visualizer Presets</title>
  <title>Move Button Example</title>
  <style>
    .absolute-button1 {
      position: absolute;
      top: 55px;
      left: calc(50% - 80px);
    }
    .absolute-button2 {
      position: absolute;
      top: 55px;
      left: calc(50% - 193px);
    }
    .absolute-button3 {
      position: absolute;
      top: 55px;
      left: calc(50% + 90px);
    }
    .absolute-button4 {
      position: absolute;
      top: 15px;
      left: calc(100% - 140px);
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

  <iframe src="/presets.php" width="100%" height="34" name="PRESETS" title="PLV Presets"frameborder="0"></iframe>

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
  <button class="absolute-button1"data-url="LED-Piano.php"type="button">Refresh </button>
  <button class="absolute-button2"onclick="window.open('/ledemu2.html','location=no','width=300,height=400');" /> LED Emulator</button>
  <button class="absolute-button3"onclick="window.open('https://flyingnotes.app','flyingnotes','width=800,height=400');" /> flyingnotes</button>
  <button class="absolute-button4"data-url="rtpMIDI.php"type="button"> Set </button>

  <script>
    Array.prototype.forEach.call(document.querySelectorAll('[data-url]'), function(elem) {
      elem.addEventListener('click', function(e) {
        iFrame.src = this.dataset.url
      })
    })
  </script>
</body>
</html>
