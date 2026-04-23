<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is Dashboard</title>
    <style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    nav{
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 60px;
        background-color:goldenrod;
        color: white;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        z-index: 1000;
padding-inline: 20px;
    backdrop-filter: blur(8px);
    }
    .logo{
        font: size 24px;
        font-weight: bold;
    }
    nav ul{
        display:flex;
        list-style:none;
        
        
    }
   nav ul li{
        margin: 20px;
    }
    nav li a{
        
        text-decoration: none;
        color: white;

    }
     nav li:hover{
        background-color:palevioletred;
    }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Welcome Muzammil</div>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Content</a></li>
            </ul>
        </nav>
        <h1>Welcome to My dashboard</h1>
    </header>
<main>
    <?php
require 'db.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-info text-center ">Student Management System</h1>
    <form  class="bg-info p-4 w-50 m-auto" method="POST" action ="code2.php" >

    <div class="mb-3">
      <label class="form-label">Name</label>
      <input type="tex  t" class="form-control" name="name" >
    </div>

    <div class="mb-3">
      <label class="form-label">Course</label>
      <input type="text" class="form-control" name="course">
    </div>
    
    <div class="mb-3">
      <label class="form-label">Fee</label>
      <input type="text" class="form-control" name="fees" >
    </div>
    
    <div class="mb-3">
      <label class="form-label">City</label>
      <input type="text" class="form-control" name="city" >
     </div>
  <button name="reguser" type="submit" class="btn btn-primary">Submit</button>
</form>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
</main>
</body>
</html>