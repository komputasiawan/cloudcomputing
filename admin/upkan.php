<?php
if(isset($_POST['btn-upload'])) {
   $tujuanUpload ="/var/www/img/";
   $namaBaruFile = rand(1000,100000)."-".$_FILES['fileUpload']['name'];
   $lokasiFile = $_FILES['fileUpload']['tmp_name'];

   if(move_uploaded_file($lokasiFile,$tujuanUpload.$namaBaruFile)) {
   ?><script>alert('File berhasil di upload');</script><?php
   }
   else {
   ?><script>alert('file gagal di upload');</script><?php
  }
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Upload FIle Menggunakan PHP</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="fileUpload" />
<button type="submit" name="btn-upload">Upload</button>
</form>
</body>
</html>