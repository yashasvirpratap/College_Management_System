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
    

        
          <form action="" method="post">
          <div class="sidebar">
          <a class="active" href="a_dashboard.php" >Home</a>
          <a href="department.php">Departments</a>
          <a href="add_teacher.php">Add Teacher</a>
          <a href="view_teacher.php">View Teachers</a>
          <!-- <a href="edit_teacher.php">Edit Teacher</a> -->
          <a href="delete_teacher.php">Delete Teacher</a>
          <a href="addressleave.php">Grant Leave</a>
          <a href="index.php">Logout</a>
        </div>
           

            

            <div class="content">
            <!----------Search------------>
            <div class="right_side">
              <br>
            <h2>Admin Dashboard</h2><br>
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button name="bsearch" type="submit" class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </button>
          </div>
</form>
          <br><br><br>
          <h5>Features Of The Project:</h5><br>
          <ul>This project comprises of search by name, department and ID</ul>
          <ul>You can add, delete, search, edit and view data of the teachers via admin dashboard</ul>
          <ul>Teachers can view their data and edit it</ul>
          <ul>Two logins have been provided: one for dean and one for teacher</ul>
          <ul>The teacher details can be viewed in the department panel on clicking view details</ul>
        </div>
        
        
        
        
    </section>
    
</body>
</html>