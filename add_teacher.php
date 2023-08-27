<?php

include 'db_conn.php';
include 'search.php';



if(isset($_POST['save'])){


  $id = $_POST['id'];
  $user = $_POST['username'];
  $first = $_POST['first'];
  $last = $_POST['last'];
  $pass = $_POST['password'];
  $gender = $_POST['gender'];
  $department = $_POST['department'];
  $subject = $_POST['subject'];
  $salary = $_POST['salary'];

  $sql = "INSERT INTO teacherlogin (ID, User, First, Last, Pass, Gender, department, subject, salary) VALUES ('$id', '$user', '$first', '$last', '$gender', '$department', '$subject', '$salary')";

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
          <a class="active" href="add_teacher.php">Add Teacher</a>
          <a href="view_teacher.php">View Teachers</a>
          <!-- <a href="edit_teacher.php">Edit Teacher</a> -->
          <a href="delete_teacher.php">Delete Teacher</a>
          <a href="addressleave.php">Grant Leave</a>
          <a href="index.php">Logout</a>
          </div>
        
        <div class="content">
            <!----------Search------------>
            <form method="POST" action="#"> 
          <h2>Admin Dashboard</h2>
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button name="bsearch" type="submit" class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </button>
          </div>
          <h5>Add Teacher</h5><br>




          <!--Id-->
          
            <div class="id"><input name="id"
              type="number"
              class="form-control"
              placeholder="ID"
              aria-label="ID"
              aria-describedby="basic-addon2"
            /></div><br>
            <!--Name-->
            <div class="input-group">
              <span class="input-group-text">First and Last name</span>
              <input type="text" name="first" aria-label="First name" class="form-control" required />
              <input type="text" name="last" aria-label="Last name" class="form-control" required />
            </div><br>
            <!--Password-->
            <div class="input-group mb-3">
              <input
                name="password"
                type="text"
                class="form-control"
                placeholder="Password"
                aria-label="Password"
                aria-describedby="basic-addon2"
                required
              />
              
            </div><br>
            <!--Gender-->
            <div class="input-group mb-3">
              <!-- <input
                name="gender"
                type="text"
                class="form-control"
                placeholder="Gender"
                aria-label="Gender"
                aria-describedby="basic-addon2"
              /> -->
              <!-- <input type="radio" name="inlineRadioOptions" name="gender" value="Male"/>Male
              <input type="radio" name="inlineRadioOptions" name="gender" value="Female"/>Female
              <input type="radio" name="inlineRadioOptions" name="gender" value="Others"/>Others -->

              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male">
                <label class="form-check-label" for="inlineRadio1">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Female">
                <label class="form-check-label" for="inlineRadio1">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Others">
                <label class="form-check-label" for="inlineRadio1">Others</label>
              </div>
              <!-- <select name="gender" class="form-select" aria-label="Gender">
                <option selected>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
              </select> -->
              
            </div><br>
            <!--Email-id-->
            <div class="input-group mb-3">
              <input
                name="username"
                type="text"
                class="form-control"
                placeholder="Username"
                aria-label="Username"
                aria-describedby="basic-addon2"
                required
              />
              
            </div><br>
            <!--Department-->
            <!-- <div class="input-group mb-3"> -->
              <!-- <input
                name="department"
                type="text"
                class="form-control"
                placeholder="Department"
                aria-label="Department"
                aria-describedby="basic-addon2"
              /> -->
              <div class="input-group mb-3">
                <select class="form-select" name="department" id="">
                  <option value="">Enter Department</option>
                  <option value="Computer Science">Computer Science</option>
                  <option value="Information Science">Information Science</option>
                  <option value="Electrical and Communication">Electrical and Communication</option>
                  <option value="Electrical and Electronics">Electrical and Electronics</option>
                  <option value="Mechanical Engineering">Mechanical Engineering</option>
                  <option value="Civil Engineering">Civil Engineering</option>

                </select>
              </div>
              <br>
            <!--Subject-->
            <div class="input-group mb-3">
              <input
                name="subject"
                type="text"
                class="form-control"
                placeholder="Subject"
                aria-label="Subject"
                aria-describedby="basic-addon2"
                required
              />
              
            </div><br>
            <!--Salary-->
            <div class="salary"><input
              type="number"
              class="form-control"
              placeholder="Salary"
              aria-label="Salary"
              name="salary"
              aria-describedby="basic-addon2"
              required
            /></div>
            <br>
            
            <!------button------->
            <button name="save" class="btn btn-primary" type="submit">
              Submit
            </button>
        </form>    
    </section>
    <!-- <script>
      const btn = document.querySelector('#btn');        
      const radioButtons = document.querySelectorAll('input[name="size"]');
      btn.addEventListener("click", () => {
          let selectedSize;
          for (const radioButton of radioButtons) {
              if (radioButton.checked) {
                  selectedSize = radioButton.value;
                  break;
              }
          }
          // show the output:
          output.innerText = selectedSize ? `You selected ${selectedSize}` : `You haven't selected any size`;
      });
  </script>     -->
</body>
</html>
