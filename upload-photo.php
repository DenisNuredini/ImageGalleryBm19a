<!DOCTYPE html>

<?php
require 'dbc.php';
if (isset($_POST['btn_upload']))
  {
    $filetmp   = $_FILES["file_img"]["tmp_name"];
    $filename  = $_FILES["file_img"]["name"];
    $filetype  = $_FILES["file_img"]["type"];
    $filepath  = "img/" . $filename;
    $filetitle = $_POST['img_title'];
    
    move_uploaded_file($filetmp, $filepath);

    $exif = @exif_read_data("./img/".$filename);
    $fileheight = $exif["COMPUTED"]["Height"];
    $filewidth = $exif["COMPUTED"]["Width"];
    $filedate = $size = $exif["IFD0"]["Make"];

    $stmt = $dbc->prepare("INSERT INTO tbl_photos (img_name, img_type, img_path, img_title, img_height, img_width, img_time) VALUES (:name, :type, :path, :title, :height, :width, :date) ");
    $stmt->bindValue(':name', $filename);
    $stmt->bindValue('type', $filetype);
    $stmt->bindValue('path', $filepath);
    $stmt->bindValue('title', $filetitle);
    $stmt->bindValue('height', $fileheight);
    $stmt->bindValue('width', $filewidth);
    $stmt->bindValue('date', "");

    if ($stmt->execute())
      {
        header('Location: index.php?success=yes&title=' . $filetitle);
      }
    else
      {
        header('Location: index.php?success=no');
      }
  }
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foto hochladen</title>
</head>
<body>
	<form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" data-abide>
	<div class="photo-field">
	<input type="file" name="file_img" pattern="^.+?\.(jpg|JPG|png|PNG)$" required>
	<small class="error">Nur JPG oder PNG hochladen.</small>
	</div>
	<div class="title-field">
	<input type="text" name="img_title" placeholder="Image title" required>
	<small class="error">Kein Name vorhanden</small>
	</div>
	<input type="submit" value="Upload Image" name="btn_upload" class="button">
	</form>
</body>
<a class="close-reveal-modal">&#215;</a>
</html>