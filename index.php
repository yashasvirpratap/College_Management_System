<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login page</title>
    <link rel="stylesheet" href="style.css" />

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  </head>


  <!--Body-->
  <body>
    <div class="login">
      <button id="dean">Dean Login
        <script>
            document.getElementById("dean").addEventListener("click", myFunction);
            function myFunction() {
              window.location.href = "admin_login.php";
            }
          </script>
      </button>
      <button id="teacher">Teacher Login
          <script>
              document.getElementById("teacher").addEventListener("click", myFunction);
            function myFunction() {
              window.location.href = "teacher_login.php";
            }
          </script>
      </button>
    </div>

    <!-------------Scripts--------------------->

    
  </body>
</html>
