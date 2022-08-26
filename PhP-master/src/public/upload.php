<?php
session_start();

$message = '';
if (isset($_POST['import']) && $_POST['import'] == 'Import')
{
    if (isset($_FILES['filename']) && $_FILES['filename']['error'] === UPLOAD_ERR_OK)
    {


    }
}
$_SESSION['message'] = $message;
header("Location: index.php");






