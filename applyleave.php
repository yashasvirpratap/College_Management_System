<?php
session_start();

include 'db_conn.php';
include 'search.php';

if(isset($_POST['save'])){

    $ldate = $_POST['ldate'];
    $dur = $_POST['adate'];
    $rea = $_POST['reason'];

    $sql="INSERT INTO leaves (ldate, adate, reason, usertype) values ('$ldate', '$dur', '$rea', '$_SESSION[User]')";

    if(mysqli_query($con, $sql)){
        echo '<script type ="text/javascript">
        alert("Leave applied successfully");
        </script>';
      }
      else{
        echo '<script type ="text/javascript">
        alert("Failed to apply leave");
        </script>';
      }
}
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
          <a href="viewleave.php">View Leave</a>
          <a class="active" href="applyleave.php">Apply Leave</a>
          <a href="index.php">Logout</a>
        </div>
        
        <div class="content">
            <!----------Search------------>
            <form action="" method="POST"> 
          <h2>Teacher Dashboard </h2>
          <p><strong> User: </strong><u><?php echo $_SESSION["User"];?></p></u>
          <div class="input-group rounded">
            <input name="search" type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button name="bsearch" type="submit" class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </button>
          </div>
          
              <h5>Apply Leave</h5><br>
          <label for="">Leave Date: </label><br><input name="ldate" class="form-control" type="date"  aria-label="default input example"><br>
          <label for="">Duration of Leave: </label><br><input name="adate" class="form-control" type="number" aria-label="default input example"><br>
          <label for="">Reason for Leave: </label><br><input name="reason" class="form-control" type="text"  aria-label="default input example"><br>
          <button name="save" type="submit" class="btn btn-success">Apply</button>
          </form>
        </div>
        
    </section>
    
</body>
</html>