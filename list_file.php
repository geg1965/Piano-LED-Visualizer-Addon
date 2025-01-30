<?php
  $path = $_GET["path"];
  $file = $_GET["file"];
  $content="
    <h4>$path$file</h4>
    <code>
      <pre>".htmlspecialchars(file_get_contents("$path/$file"))."</pre>
    </code>";
  echo $content;
?>
