<?php
session_start();

include 'db_conn.php';
include 'search.php';

if(isset($_POST['approve'])){
    $sql = "UPDATE leaves SET status = 'Approved' WHERE usertype ='$_SESSION[User]'";
    if(mysqli_query($con, $sql)){
        echo '<script type ="text/javascript">
        alert("Data updated successfully");
        </script>';
      }
      else{
        echo '<script type ="text/javascript">
        alert("Failed to update data");
        </script>';
        
      }
}
if(isset($_POST['reject'])){
    $sql = "UPDATE leaves SET status = 'Rejected' WHERE usertype='$_SESSION[User]'";
    if(mysqli_query($con, $sql)){
        echo '<script type ="text/javascript">
        alert("Data updated successfully");
        </script>';
      }
      else{
        echo '<script type ="text/javascript">
        alert("Failed to update data");
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
          <a href="a_dashboard.php" >Home</a>
          <a href="department.php">Departments</a>
          <a href="add_teacher.php">Add Teacher</a>
          <a href="view_teacher.php">View Teachers</a>
          <!-- <a href="edit_teacher.php">Edit Teacher</a> -->
          <a href="delete_teacher.php">Delete Teacher</a>
          <a class="active" href="addressleave.php">Grant Leave</a>
          <a href="index.php">Logout</a>
        </div>
           
            </form>
            

            <div class="content">
            <!----------Search------------>
            <form action="" method="POST">
            <div class="right_side">
              <br>
            <h2>Admin Dashboard</h2><br>
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button name="bsearch" type="submit" class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </button>
          </div>
          
          <br><br><br>
          
          <table class="table">
            <thead>
                <tr>
                <th scope="col">Leave Date</th>
                <th scope="col">Duration</th>
                <th scope="col">Reason</th>
                <th scope="col">Status</th>
                <th scope="col">Teacher</th>
                <th scope="col">Approve</th>
                <th scope="col">Reject</th>
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
                    <td ><?php echo $row['usertype']?></td>
                    <td><button name="approve" type="submit" class="btn btn-success">Approve</button></td>
                    <td><button name="reject" type="submit" class="btn btn-danger">Reject</button></td>
                    </tr>
                <!-- </table> -->
              <?php 
                }
              
              ?>
  </tbody>
</table></form>
        </div>
        
        
        
        
    </section>
    
</body>
</html>