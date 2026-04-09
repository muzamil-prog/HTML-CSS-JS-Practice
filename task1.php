<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <div>
        <form class="bg-info w-50" method="POST">
  <div class="mb-3">
    <label for="numone" class="form-label">Num One</label>
    <input type="text" class="form-control" id="numone"name="num1" >
  </div>
  <div class="mb-3">
    <label for="numtow" class="form-label">Num one</label>
    <input type="text" class="form-control" id="numtow" name="num2">
  </div>
  <button name="getData" type="submit" class="btn btn-primary">Submit</button>
  <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Adtion</a></li>
    <li><a class="dropdown-item" href="#">Subtraction</a></li>
    <li><a class="dropdown-item" href="#">Multiple</a></li>
    <li><a class="dropdown-item" href="#">Divide</a></li>
  </ul>
</div>
</form>
</div>
<?php
if(isset($_POST['getData'])){
     $x=$_POST['num1'];
    $y=$_POST['num2'];
    echo"<h2> value of x is: -></h2>".$x;
    echo"<h2> value of y is: -></h2>".$y;
}
?>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>