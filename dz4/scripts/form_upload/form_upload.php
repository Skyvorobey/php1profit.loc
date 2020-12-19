<?php
if ((isset($_FILES['file_name'])) && ($_FILES['file_name']['error'] === 0) && (('image/png' === $_FILES['file_name']['type']) || (('image/jpeg' === $_FILES['file_name']['type'])))) {

    $images_url = __DIR__ . '/../../images/';

    move_uploaded_file($_FILES['file_name']['tmp_name'], $images_url . $_FILES['file_name']['name']);
    echo 'Файл успешно загружен!';

    header("Location: /dz4/index.php");
}   else {
    echo 'Формат загружаемых файлов должен быть jpeg или png.';
}
?>



