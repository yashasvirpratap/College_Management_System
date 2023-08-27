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
          <a class="active" href="tdetails.php">View Details</a>
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

          <!------------details of the teacher (one)------------>
          <!-- <ul class="list-group list-group-flush">
            <li class="list-group-item">First Name: </li>
            <li class="list-group-item">Last Name: </li>
            <li class="list-group-item">Username: </li>
            <li class="list-group-item">Password:</li>
            <li class="list-group-item">Gender: </li>
            <li class="list-group-item">Subject: </li>
            <li class="list-group-item">Department: </li>
            <li class="list-group-item">Salary: </li>
          </ul> -->
            <?php
            $query = "SELECT * from teacherlogin where User ='$_SESSION[User]'";
            $query_run = mysqli_query($con,$query);
            while ($row = mysqli_fetch_assoc($query_run)) 
				{
			?><center>
				<table>
					<tr>
						<td>
							<b>Teacher Id:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['ID']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>First Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['First']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Last Name:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Last']?>" disabled>
						</td>
					</tr>
					<!-- <tr>
						<td>
							<b>Class:</b>
						</td> 
						<td>
							<input type="text" value="" disabled>
						</td>
					</tr> -->
					<tr>
						<td>
							<b>Gender:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['Gender']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Email:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['User']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Password:</b>
						</td> 
						<td>
							<input type="password" value="<?php echo $row['Pass']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Salary:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['salary']?>" disabled>
						</td>
					</tr>
					<tr>
						<td>
							<b>Department:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['department']?>" disabled>
							</td>
						</tr>	
					<tr>
						<td>
							<b>Subject:</b>
						</td> 
						<td>
							<input type="text" value="<?php echo $row['subject']?>" disabled>
							</td>
						</tr>	
				</table></center>
				<?php
                }
            
            ?>

          
        </div>
        
    </section>
    
</body>
</html>