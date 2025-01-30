<?php
$config = $_GET["config"];
shell_exec("cp ./cfgs/settings.xml.$config ../../config/settings.xml");
shell_exec("cp ./cfgs/sequences.xml.$config ../../config/sequences.xml");
shell_exec("systemctl restart visualizer");
sleep(10);
?>
<script>
var txt = "Preset <?php echo $config; ?> wurde geladen!";
alert(txt);
window.top.location.href = 'index.php';
</script>
root@pianoledvisualizer:/home/Piano-LED-Visualizer/webinterface/php# cat list_file.php
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
