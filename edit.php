<?php
require 'db2.php';
$id=$_GET['id'];
$query="SELECT *FROM thedata WHERE id='$id'";

    $result = mysqli_query($conn, $query);
    $row=mysqli_fetch_assoc($result)
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
    <div class="container mt-5> 
      <h2>Edit Student</h2>
        <form method="POST" action="update.php">
  <div class="mb-3">
  
    <input type="hidden" name="id" value ="<?php echo $row['id']; ?>">
    <input type="text" name="name" value ="<?php echo $row['name']; ?>">
    <input type="text" name="course" value ="<?php echo $row['course']; ?>">
    <input type="text" name="fees" value ="<?php echo $row['fees']; ?>">
    
    <input type="text" name="city" value ="<?php echo $row['city']; ?>">

    
  <button name="update" type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>