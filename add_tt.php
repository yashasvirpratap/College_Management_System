<?php
session_start();

include 'db_conn.php';

if(isset($_POST['save'])){


  $id = $_POST['c_id'];
  $cname = $_POST['c_name'];
  $timing = $_POST['timing'];
  $day = $_POST['dayz'];
  $subject = $_POST['subject'];
  $rno = $_POST['r_no'];

  $sql = "INSERT INTO timetable (ID, class_name, timing, day, subject, room_no, usertype) VALUES ('$id', '$cname', '$timing', '$day', '$subject', '$rno', '$_SESSION[User]')";

  if(mysqli_query($con, $sql)){
    echo '<script type ="text/javascript">
    alert("Data added successfully");
    </script>';
  }
  else{
    echo '<script type ="text/javascript">
    alert("Failed to add data");
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
    <title>Create Time Table</title>
    
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

<body>
<div class="card">
  
                <div class="card-body">
                <center><h3>Create Time Table</h3></center>
                <a style = "color: black" href="timetable.php"><i class="fa fa-times" aria-hidden="true"></i></a><br><br>
                <form action="" method="POST">
                <input name="c_id" type="text" placeholder="Class ID" class="form-control" id="exampleInputEmail1"><br>
                <input name="c_name" type="text" placeholder="Class Name" class="form-control" id="exampleInputEmail1"><br>
                <div class="input-group mb-3">
                <select class="form-select" name="timing" id="">
                  <option value="">Enter Timing</option>
                  <option value="9:30">9:30</option>
                  <option value="10:30">10:30</option>
                  <option value="11:30">11:30</option>
                  <option value="12:30">12:30</option>
                  <option value="13:30">13:30</option>
                  <option value="14:30">14:30</option>
                  <option value="14:30">15:30</option>
                  <option value="14:30">16:30</option>

                </select>
              </div>
              <div class="input-group mb-3">
                <select class="form-select" name="dayz" id="">
                  <option value="">Enter Day</option>
                  <option value="Monday">Monday</option>
                  <option value="Tuesday">Tuesday</option>
                  <option value="Wednesday">Wednesday</option>
                  <option value="Thursday">Thursday</option>
                  <option value="Friday">Friday</option>
                  <option value="Saturday">Saturday</option>

                </select>
              </div>
                <input name="subject" type="text" placeholder="Subject" class="form-control" id="exampleInputEmail1"><br>
                <input name="r_no" type="number" placeholder="Room Number" class="form-control" id="exampleInputEmail1"><br>
              <!------button------->
              <button name="save" class="btn btn-primary" type="submit">
                Save
              </button> 
              </form>               
            </div>
              </div>
</body>
</html>