<?php
// Заголовок, чтобы поддерживалась кириллица
    header('Content-Type: text/html; charset=utf-8');
    
// Складываем полученные файлы в папку
// Припишем к названию файла время млс загрузки через нижнее подчеркивание, для уникальности названия.
    $uploaddir = '../userfile/';
    $uploadfile = $uploaddir . time() . "_" . basename($_FILES['userfile']['name']);
    
// перемещаем файл из временного хранилища в постоянное
    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "Файл успешно загружен.\n";
    } else {
        echo "Возможная атака!\n";
    }
?>