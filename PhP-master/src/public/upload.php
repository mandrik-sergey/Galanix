<?php
session_start();

$message = '';
if (isset($_POST['import']) && $_POST['import'] == 'Import')
{
    if (isset($_FILES['filename']) && $_FILES['filename']['error'] === UPLOAD_ERR_OK)
    {

        // Достаем детали файла
        $file_tmp_path = $_FILES['filename']['tmp_name'];
        $file_name = $_FILES['filename']['name'];
        $file_size = $_FILES['filename']['size'];
        $file_type = $_FILES['filename']['type'];
        $file_name_perm = explode(".", $file_name);
        $file_extension = strtolower(end($file_name_perm));

        // преобразовуем для более удобной проверки имя файла
        $new_file_name = md5(time() . $file_name) . '.' . $file_extension;

        // разрешение файлов которые доступны для загрузки
        $file_extensions = array('csv');

        if (in_array($file_extension, $file_extensions))
        {
            // загружаем файл в директорию
            $upload_dir = './uploads/';
            $dest_path = $upload_dir . $new_file_name;

        }
        else
        {
            $message = 'Upload failed. Allowed file types: ' . implode(',', $file_extensions);
        }
    }

}
$_SESSION['message'] = $message;
header("Location: index.php");






