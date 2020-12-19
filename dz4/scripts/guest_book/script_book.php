<?php
if (isset ($_POST['submit']) && (($_POST['new_rec']) !== '') && (($_POST['new_rec']) !== null)) {
    $file = fopen(__DIR__ . '/../../data/guest_book.txt', 'a');
    $new_r = ($_POST['new_rec']);
    fwrite($file, date('d.m.Y H:i:s', time())) .
    fwrite($file, ', ') .
    fwrite($file, $new_r) .
    fwrite($file, '; ') .
    fwrite($file, "\n") .
    fclose($file);

    header("Location: /dz4/guest_book.php");
}
?>