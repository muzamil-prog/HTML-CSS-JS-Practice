<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calculator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">
  <form method="POST" class="bg-info p-4 w-50 m-auto">

    <div class="mb-3">
      <label class="form-label">Num One</label>
      <input type="number" class="form-control" name="num1" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Num Two</label>
      <input type="number" class="form-control" name="num2" required>
    </div>

    
    <div class="mb-3">
      <label class="form-label">Select Operation</label>
      <select class="form-control" name="operation" required>
        <option value="">-- selectt --</option>
        <option value="addtion">Addition</option>
        <option value="subb">Subtraction</option>
        <option value="mull">Multiplication</option>
        <option value="divsion">Division</option>
      </select>
    </div>

    <button type="submit" name="getData">Submit</button>

  </form>

  
  <?php
  if(isset($_POST['getData'])){

      $x = $_POST['num1'];
      $y = $_POST['num2'];
      $op = $_POST['operation'];

      echo "<div class='mt-4 text-center'>";
      echo "<h4>Value of X: $x</h4>";
      echo "<h4>Value of Y: $y</h4>";

      if($op == "addtion"){
          $result = $x + $y;
          echo "<h3>Addition Result: $result</h3>";
      }
      elseif($op == "subb"){
          $result = $x - $y;
          echo "<h3>Subtraction Result: $result</h3>";
      }
      elseif($op == "mull"){
          $result = $x * $y;
          echo "<h3>Multiplication Result: $result</h3>";
      }
      elseif($op == "divsion"){
          if($y != 0){
              $result = $x / $y;
              echo "<h3>Division Result: $result</h3>";
          } else {
              echo "<h3>Cannot divide by zero</h3>";
          }
      } else {
          echo "<h3>you select invalid option</h3>";
      }

    
  }
  ?>

</div>

</body>
</html>