<?php
session_start();

include 'db_conn.php';
include 'search.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>


    <link rel="stylesheet" href="dashboard.css">
    <!---------Bootstrap-------------->
    <!-- Font Awesome -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
      rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
      rel="stylesheet"
    />
    <!-- MDB -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.css"
      rel="stylesheet"
    />

    <!-- MDB -->
    <script
      type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.2/mdb.min.js"
    ></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  </head>
</head>
<body>


<!-----------sidenav------------------>
    <section>
        <body>
        
        <div class="sidebar">
          <a href="t_dashboard.php">Home</a>
          <a href="tdepartment.php">Departments</a>
          <a href="tdetails.php">View Details</a>
          <!-- <a href="attendance.php">Mark Attendance</a> -->
          <a href="timetable.php">Generate Time Table</a>
          <a class="active" href="viewleave.php">View Leave</a>
          <a href="applyleave.php">Apply Leave</a>
          <a href="index.php">Logout</a>
        </div>
        
        <div class="content">
            <!----------Search------------>
           <form action="" method="POST">
          <h2>Teacher Dashboard </h2>
          <p><strong> User: </strong><u><?php echo $_SESSION["User"];?></p></u>
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button name="bsearch" type="submit" class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
          </div>
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Leave Date</th>
      <th scope="col">Duration</th>
      <th scope="col">Reason</th>
      <th scope="col">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php
              $sql="select * from leaves";
              $query_run = mysqli_query($con, $sql);

              
                while($row=mysqli_fetch_assoc($query_run)){
                  ?>
              <!-- <table class="table"> -->
                <tr>
                  <th scope="row" ><?php echo $row['ldate']?></th>
                  <td ><?php echo $row['adate']?></td>
                  <td ><?php echo $row['reason']?></td>
                  <td ><?php echo $row['status']?></td>
                </tr>
              <!-- </table> -->
              <?php 
                }
              
              ?>
  </tbody>
</table>
        </div>
        </form>    
    </section>
    
</body>
</html>