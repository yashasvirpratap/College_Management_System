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
    <title>Admin Dashboard</title>


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
        <form action="" method="POST">
        <div class="sidebar">
          <a href="t_dashboard.php">Home</a>
          <a class="active" href="tdepartment.php">Departments</a>
          <a href="tdetails.php">View Details</a>
          <!-- <a href="attendance.php">Mark Attendance</a> -->
          <a href="timetable.php">Generate Time Table</a>
          <a href="viewleave.php">View Leave</a>
          <a href="applyleave.php">Apply Leave</a>
          <a href="index.php">Logout</a>
        </div>
        
        <div class="content">
            <!----------Search------------>
            <form action="" method="POST">  
          <h2>Teacher Dashboard</h2>
          <p><strong> User: </strong><u><?php echo $_SESSION["User"];?></p></u>
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button name="bsearch" type="submit" class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
</button>
          </div></form> 
          <h5>Departments</h5>

          <!------------CSE-------------->
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Computer Science</h5>
                  <button name="cs" type="submit" class="btn btn-primary">View Details</button>
                  <?php
                  if(isset($_POST['cs'])){

                    $query="SELECT * from teacherlogin where department= 'Computer Science'";
                    $query_run=mysqli_query($con, $query);
                  
                    while($row = mysqli_fetch_array($query_run))
                    {
                      ?>
                      <tr>
                      <td><?php echo $row['First']?></td>
                      <td><?php echo $row['Last']?></td>
                      </tr>
                      <?php
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
            <!------------ISE----------->
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Information Science</h5>
                  <button name="is" type="submit" class="btn btn-primary">View Details</button>
                  <?php
                  if(isset($_POST['is'])){
                    $query="SELECT * from teacherlogin where department= 'Information Science'";
                    $query_run=mysqli_query($con, $query);
                  
                    while($row = mysqli_fetch_array($query_run))
                    {
                      ?>
                      <tr>
                      <td><?php echo $row['First']?></td>
                      <td><?php echo $row['Last']?></td>
                      </tr>
                      <?php
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div><br>
          <!----------ECE----------->
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Electrical and Communicaton</h5>
                  <button name="ece" type="submit" class="btn btn-primary">View Details</button>
                  <?php
                  if(isset($_POST['ece'])){
                    $query="SELECT * from teacherlogin where department= 'Electrical and Communication'";
                    $query_run=mysqli_query($con, $query);
                  
                    while($row = mysqli_fetch_array($query_run))
                    {
                      ?>
                      <tr>
                      <td><?php echo $row['First']?></td>
                      <td><?php echo $row['Last']?></td>
                      </tr>
                      <?php
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
            <!------------EEE----------->
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Electrical and Electronics</h5>
                  <button name="eee" type="submit" class="btn btn-primary">View Details</button>
                  <?php
                  if(isset($_POST['eee'])){
                    $query="SELECT * from teacherlogin where department= 'Electrical and Electronics'";
                    $query_run=mysqli_query($con, $query);
                  
                    while($row = mysqli_fetch_array($query_run))
                    {
                      ?>
                      <tr>
                      <td><?php echo $row['First']?></td>
                      <td><?php echo $row['Last']?></td>
                      </tr>
                      <?php
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div><br>
          <!---------------Mech------------>
          <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Mechanical Engineering</h5>
                  <button name="mech" type="submit" class="btn btn-primary">View Details</button>
                  <?php
                  if(isset($_POST['mech'])){
                    $query="SELECT * from teacherlogin where department= 'Mechanical Engineering'";
                    $query_run=mysqli_query($con, $query);
                  
                    while($row = mysqli_fetch_array($query_run))
                    {
                      ?>
                      <tr>
                      <td><?php echo $row['First']?></td>
                      <td><?php echo $row['Last']?></td>
                      </tr>
                      <?php
                    }
                  }
                  ?>
                </div>
              </div>
            </div>
            <!------------Civ----------->
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Civil Engineering</h5>
                  <button name="civ" type="submit" class="btn btn-primary">View Details</button>
                  <?php
                    if(isset($_POST['civ'])){
                      $query="SELECT * from teacherlogin where department= 'Civil Engineering'";
                      $query_run=mysqli_query($con, $query);

                      while($row = mysqli_fetch_array($query_run))
                      {
                        ?>
                        <tr>
                        <td><?php echo $row['First']?></td>
                        <td><?php echo $row['Last']?></td>
                        </tr>
                        <?php
                      }
                    }
                  ?>
                </div>
              </div>
            </div>
          </div>
        
        </div>
        </form> 
        
    </section>
    
</body>
</html>