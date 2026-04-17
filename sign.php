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