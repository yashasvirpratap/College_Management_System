<?php
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
        
            <div class="sidebar">
            <a href="a_dashboard.php" >Home</a>
            <a href="department.php">Departments</a>
            <a href="add_teacher.php">Add Teacher</a>
            <a class="active" href="view_teacher.php">View Teachers</a>
            <!-- <a href="edit_teacher.php">Edit Teacher</a> -->
            <a href="delete_teacher.php">Delete Teacher</a>
            <a href="addressleave.php">Grant Leave</a>
            <a href="index.php">Logout</a>
              </div>
        
        <div class="content">
            <!----------Search------------>
          <form action="" method="POST"> 
          <h2>Admin Dashboard</h2>
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button name="bsearch" type="submit" class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </button>
          </div>
          <h5>View Teacher</h5>
          <!------------View Teacher Table-------------->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email ID</th>
                <th scope="col">Gender</th>
                <th scope="col">Department</th>
                <th scope="col">Subject</th> 
                <th scope="col">Salary</th>
              </tr>
            </thead>
            <?php
              include 'db_conn.php';

              $sql="select * from teacherlogin";
              $query_run = mysqli_query($con, $sql);

              
                while($row=mysqli_fetch_assoc($query_run)){
                  ?>
              <!-- <table class="table"> -->
                <tr>
                  <th scope="row" ><?php echo $row['ID']?></th>
                  <td ><?php echo $row['First']?></td>
                  <td ><?php echo $row['Last']?></td>
                  <td ><?php echo $row['User']?></td>
                  <td ><?php echo $row['Gender']?></td>
                  <td ><?php echo $row['department']?></td>
                  <td ><?php echo $row['subject']?></td>
                  <td ><?php echo $row['salary']?></td>
                </tr>
              <!-- </table> -->
              <?php 
                }
              
              ?>

            <tbody>
            </tbody>
          </table>
        </div>
        </form>   
    </section>
    
</body>
</html>