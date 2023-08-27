<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary Report</title>


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
          <a href="view_teacher.php">View Teachers</a>
          <!-- <a href="edit_teacher.php">Edit Teacher</a> -->
          <a href="delete_teacher.php">Delete Teacher</a>
          <a class="active" href="salary.php">Salary Report</a>
          <a href="index.php">Logout</a>
        </div>
        
        <div class="content">
            <!----------Search------------>
            
          <h2>All Teachers Salary Report</h2>
          <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <span class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search"></i>
            </span>
          </div>
          <!------------table of salary-------------->
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Basic Salary</th>
      <th scope="col">Medical Allowance</th>
      <th scope="col">HR Allowance</th>
      <th scope="col">Pay Scale</th>
      <th scope="col">Paid Date</th>
      <th scope="col">Total Amount</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
        </div>
        
    </section>

</body>
</html>