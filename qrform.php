<?php
$host ="localhost";
$dbname ="message_db";
$username ="root";
$password ="";
  
 $conn = mysqli_connect(hostname:$host, database:$dbname, username:$username, password:$password);
 if(mysqli_connect_errno()){
      die("Connection erro: " . mysqli_connect_error());
 }else{
      echo 'success';
 }
 
 session_start();
 // new filename
 $filename = 'pic_'.date('YmdHis') . '.jpeg';
 
 $url = '';
 if( move_uploaded_file($_FILES['webcam']['tmp_name'],'img/'.$filename) ){
      $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/upload/' . $filename;
       $_SESSION['status']="photo added successfully";
     }
 
 // Return image url
 echo $url;



 if(isset($_POST["text"])){
      $name =$_POST["text"];


      $sql="SELECT * FROM table_attendance WHERE STUDENT='$name' AND STATUS='0'";
      $query= $conn->query($sql);
      if($query-> num_rows>0){
          $Voice= new COM("SAPI.Spvoice");
      $message= "".$name. "Have a good day!";
      $Voice->speak($message);
          $sql="UPDATE table_attendance SET TIME_OUT=CURTIME(),STATUS='1' WHERE STUDENT='$name'";
          $query= $conn->query($sql);
          header("location:index.php");
      exit;

      }else{
      $Voice= new COM("SAPI.Spvoice");
      $message="HELLO" .$name. "your attendance has been taken. thank you";

 $sql="INSERT INTO table_attendance(STUDENT,DATE,TIME_IN,STATUS,image) values('$name',CURDATE(),CURTIME(),'0','$filename')";
$run =mysqli_query($conn, $sql) or die(mysqli_error());
 if($run){
      $Voice->speak($message);
      echo "Successfully saved.";
      header("location:index.php");
      exit;
 }else{
      echo "not saved";
 }
}
}
 
 
 

 



  
