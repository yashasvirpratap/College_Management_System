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
    <title>Time Table Generator</title>


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
          <a class="active" href="timetable.php">Generate Time Table</a>
          <a href="viewleave.php">View Leave</a>
          <a href="applyleave.php">Apply Leave</a>
          <a href="index.php">Logout</a>
        </div>
        
        <div class="content">
            <!----------Search------------>
           <form action="" method="POST"> 
          <h2>Generate Time Table</h2>
          <p><strong> User: </strong><u><?php echo $_SESSION["User"];?></p></u>
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button name="bsearch" type="submit" class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
</button>
          </div>
          <!--------generate timetable button--------->
            <button onclick="window.open('add_tt.php')" type="submit" id="#create" class="btn btn-primary">Add Time Table</button>
            <button onclick="window.open('delete_tt.php')" type="submit" id="#update" class="btn btn-danger">Delete Time Table</button>


            <!------------time tables---------->
            <table class="table">
            <thead>
                <tr>
                <th scope="col">Class ID</th>
                <th scope="col">Class Name</th>
                <th scope="col">Timing</th>
                <th scope="col">Day</th>
                <th scope="col">Subject</th>
                <th scope="col">Room No</th>
                <th scope="col">User</th>
                
                </tr>
            </thead>
            <tbody>
            <?php
              include 'db_conn.php';

              $sql="select * from timetable";
              $query_run = mysqli_query($con, $sql);

              
                while($row=mysqli_fetch_assoc($query_run)){
                  ?>
              <!-- <table class="table"> -->
                <tr>
                  <th scope="row" ><?php echo $row['ID']?></th>
                  <td ><?php echo $row['class_name']?></td>
                  <td ><?php echo $row['timing']?></td>
                  <td ><?php echo $row['day']?></td>
                  <td ><?php echo $row['subject']?></td>
                  <td ><?php echo $row['room_no']?></td>
                  <td ><?php echo $row['usertype']?></td>
                </tr>
              <!-- </table> -->
              <?php 
                }
              
              ?>
              
              

            </tbody>
            </table>
        </div>
       <script>

       </script> 
    </form>    
    </section>
</body>
</html>