
<?php
require_once('connection.php');
?>

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>File Upload with Progress Bar | CodingNepal</title>
  <link rel="stylesheet" href="style2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
    #custom-btn{
  margin-top: 30px;
  display: block;
  width: 25%;
  height: 40px;
  border: none;
  outline: none;
  border-radius: 25px;
  color: #fff;
  font-size: 18px;
  font-weight: 500;
  letter-spacing: 1px;
  text-transform: uppercase;
  cursor: pointer;
  background: linear-gradient(135deg,#3a8ffe 0%,#9658fe 100%);
  position:absolute;
  left: 480px;
  bottom: 150px;
}
  </style>
</head>
<body>
  <div class="wrapper">
    <header>Upload Your Document</header>
    <form action="upload.php" method="post" enctype="multipart/form-data"> 
      <input class="file-input" type="file" name="pdf_file"   hidden required>
      <i class="fas fa-cloud-upload-alt"></i>
      <p>Browse File to Upload</p>
    <section class="progress-area"></section>
    <section class="uploaded-area"></section>
    </div>
      <input type="submit" id="custom-btn" name="submit" value="upload">
  </form>

  <script src="script2.js"></script>

</body>
</html>
