<?php
session_start()
?>
<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Hello world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="theme-color" content="#fafafa">
</head>

<body>

<h3>Загрузка файла</h3>
<form action="upload.php" method="post" enctype="multipart/form-data" >
    <input type="file" name="filename" size="" >
    <input type="submit" name="import" value="Import">
    <input type="submit" name="clear" value="Clear all records">
</form>
<a href="second_page.php" > View results </a> <br />
<?php
if (isset($_SESSION['message']) && $_SESSION['message'])
{
    printf("<b>%s</b>", $_SESSION['message']);
    unset($_SESSION['message']);
}
?>
</body>
</html>
