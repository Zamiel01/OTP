<!DOCTYPE html>
<!-- Website - www.codingnepalweb.com -->

<?php
require_once('connection.php');
$query="select * from documents";
$result =mysqli_query($conn, $query);
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Responsiive Admin Dashboard | CodingLab</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.0/css/dataTables.dataTables.css">


    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script type="text/javascript" src="js/adapter.min.js"></script>
<script type="text/javascript" src="js/vue.min.js"></script>
<script type="text/javascript" src="js/instascan.min.js"></script>
<script src="js/jquery.min.js"></script> 
<script src="webcamjs/webcam.min.js"></script> 
<link rel="stylesheet" href="./Boostrap/bootstrap-5.2.2-dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/dataTables.bootstrap5.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.0.0/js/dataTables.js"></script>
<script>
    $(document).ready(function () {
    $('#data').DataTable({
    pageLength : 3,
    lengthMenu: [[3, 10, 20, -1], [3, 10, 20, 'Todos']]
  });
});
</script>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class="bx bxl-c-plus-plus"></i>
        <span class="logo_name">CodingLab</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-box"></i>
            <span class="links_name" onclick="window.location.href='doc.php'">Upload Document</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-list-ul"></i>
            <span class="links_name">Calender & Scheduling</span>
          </a>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Log Out</span>
          </a>
        </li>
       ]
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Dashboard</span>
        </div>
        <div class="search-box">
          <input type="text" placeholder="Search..." />
          <i class="bx bx-search"></i>
        </div>
        <div class="profile-details">
          <img src="images/profile.jpg" alt="" />
          <span class="admin_name">Prem Shahi</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>
<br>

      
      <div class="container">
        <h1>Student info</h1>
    <table id="data" class="table table-bordered"  class="display" style="width:100%">
        <thead>
          <tr>
             <th>id</th>
            <th>Name</th>
            <th>Time</th>
            <th>Delete</th>
            <th>View</th>
            <th>Share</th>
        </tr>
        </thead>
       <tbody>
         <tr>
        	<?php
        	while($row= mysqli_fetch_assoc($result)){
        	?>
          <td><?php echo $row['id'] ?></td>
        	<td><?php echo $row['Name'] ?></td>
        	<td><?php echo $row['Time'] ?></td>
          <form action="del.php" method="post">
<td><button type="submit" class="btn btn-danger btn-sm" name="delete" value="<?=$row['id']; ?>">Delete</button></td>
     </form>
     <td><a href="files/<?php echo $row['Name'];?>" target="_blank"  class="btn btn-success btn-sm">View</a></td>
     <form action="otp.php" method="post">
     <td><input type="text" name="doc" value="<?=$row['Name']; ?>" hidden> <button type="submit" name="sub" class="btn btn-info btn-sm" >Share</button></td>
     </form>
          <?php
               ?>
             </tr>
           
            <?php
            }
            ?>
          </tbody>
    </table>
    </div>
   
  </body>

</html>
