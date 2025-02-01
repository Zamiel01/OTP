
<?php
require_once('connection.php');
?>

<?php
if (isset($_POST["submit"]))
{
     $time=date('H:i:s');
      #file name with a random number so that similar dont get replaced
      $filename = $_FILES['pdf_file']['name'];

      $file_tmp=$_FILES['pdf_file']['tmp_name'];

      $file_data=file_get_contents($file_tmp);

  $uploads_dir = 'files';
      #TO move the uploaded file to specific location
      move_uploaded_file($file_tmp, $uploads_dir.'/'.$filename);
$sql="INSERT  INTO documents(Name,Time,data) VALUES('$filename','$time','$file_tmp')";
 if(mysqli_query($conn, $sql)){
      echo "Successfully saved.";
      header("location: index.php");
 }else{
      echo "not saved";
 }
}

?>
