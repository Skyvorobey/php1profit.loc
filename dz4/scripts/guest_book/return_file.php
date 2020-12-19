<?php
function return_file($thisFile) {
    $fh = fopen($thisFile, 'r');

    while (!feof($fh))  {
        $str = fgets($fh);
        echo $str;
    }

    fclose($fh);
}
?>