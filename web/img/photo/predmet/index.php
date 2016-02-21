<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="ru" xml:lang="ru">
<head>
<link rel="stylesheet" type="text/css" href="/style.css" />
</head>
<body>
<h>Предметная съемка</h>
<div id="gallery">
<ul>
<?php
$directory = "images";	//название папки с изображениями
$allowed_types = array('jpg','jpeg','gif','png');	//разрешеные типы изображений
if (!file_exists($directory) || !is_dir($directory))
{
die("There is no images directory");
}
$files = scandir($directory);
sort($files);
foreach ($files as $file)
{
if ($file != '.' && $file != '..')
{
$file_data = pathinfo($file);
if (in_array(strtolower($file_data['extension']), $allowed_types))
{
echo '<li><img class="pic" src="photo/predmet/'.htmlspecialchars($directory).'/'.htmlspecialchars($file).'" width="640" /></li>';
}
}
}
?>
</ul>
</div> <!-- закрывающий div -->
</body>
</html>
