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


    }
}
$_SESSION['message'] = $message;
header("Location: index.php");






