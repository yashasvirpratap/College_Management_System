<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>

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
    

<?php
    include 'db_conn.php';

    if(isset($_POST['bsearch'])){

        $str = $_POST['search'];

        $sql = "SELECT * from teacherlogin WHERE CONCAT(ID, User, First, Last, department, subject, salary) LIKE '%$str%' ";
        //execute the query
        $res = mysqli_query($con, $sql);
        //count rows
        $count = mysqli_num_rows($res);
        //check data present or not
        if($count > 0){
            while($row = mysqli_fetch_assoc($res)){
                ?>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">User</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Department</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Salary</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $row['ID']?></th>
                    <td><?php echo $row['User'];?></td>
                    <td><?php echo $row['First'];?></td>
                    <td><?php echo $row['Last'];?></td>
                    <td><?php echo $row['department'];?></td>
                    <td><?php echo $row['subject'];?></td>
                    <td><?php echo $row['salary'];?></td>
                    </tr>
                </tbody>
                </table>
                <?php
            }
        }else{
            echo "<div class = 'alert alert-danger'>
            NO DATA MATCH!</div> 
            ";
        }
    }
    
?>
</body>
</html>