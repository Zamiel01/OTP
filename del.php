
<?php
require_once('connection.php');

?>
<?php

if(isset($_POST['delete'])){
      $row_id= mysqli_real_escape_string($conn, $_POST['delete'] );
      $query ="DELETE FROM documents WHERE id='$row_id' ";
      $query_run= mysqli_query($conn, $query);
}
if($query_run){
echo "Deleted successfully";
header("location:index.php");
 exit(0);
}else{
      echo "not deleted";
      header("location: index.php");
exit(0);
}