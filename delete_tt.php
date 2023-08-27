<?php

session_start();

include 'db_conn.php';
include 'search.php';

if(isset($_POST['delete'])){
  

		$query = "DELETE FROM timetable where ID = $_POST[id]";
		
   
    if(mysqli_query($con, $query)){
      echo '<script type ="text/javascript">
      alert("Time Table deleted successfully");
      </script>';
    }
    else{
      echo '<script type ="text/javascript">
      alert("Failed to delete Time Table");
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
          <a class="active" href="timetable.php">Generate Time Table</a>
          <a href="viewleave.php">View Leave</a>
          <a href="applyleave.php">Apply Leave</a>
          <a href="index.php">Logout</a>
        </div>
        
        <div class="content">
            <!----------Search------------>
            <form method="POST" action="#">  
          <h2>Teacher Dashboard </h2>
          <p><strong> User: </strong><u><?php echo $_SESSION["User"];?></p></u>
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button name="bsearch" type="submit" class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </button>
          </div>
          
            <div class="id">
              <input name="id"
              type="number"
              class="form-control"
              placeholder="Class ID"
              aria-label="Class ID"
              aria-describedby="basic-addon2"
            /></div><br>
          <button type="submit" name="delete" class="btn btn-danger">Delete</button>
          <br><br><a href="timetable.php">Go Back</a>
        </form>
        </div>
        
    </section>
    
</body>
</html>