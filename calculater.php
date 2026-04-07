<!DOCTYPE html>
<html lang="en">
<head>
    <title>Single File Calculator</title>

    <style>
        body {
            font-family: Arial;
            background: #222;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator {
            background: #333;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        #display {
            width: 100%;
            height: 40px;
            margin-bottom: 10px;
            font-size: 18px;
            text-align: right;
            padding: 5px;
        }

        button {
            width: 50px;
            height: 50px;
            margin: 5px;
            font-size: 18px;
            cursor: pointer;
        }
    </style>

    <script>
        function addValue(val) {
            document.getElementById("display").value += val;
        }

        function clearDisplay() {
            document.getElementById("display").value = "";
        }
    </script>
</head>
<body>

<div class="calculator">
    <h2>Calculator</h2>

    <form method="POST">
        <input type="text" id="display" name="expression" readonly>

        <br>

        <button type="button" onclick="addValue('7')">7</button>
        <button type="button" onclick="addValue('8')">8</button>
        <button type="button" onclick="addValue('9')">9</button>
        <button type="button" onclick="addValue('/')">/</button>

        <br>

        <button type="button" onclick="addValue('4')">4</button>
        <button type="button" onclick="addValue('5')">5</button>
        <button type="button" onclick="addValue('6')">6</button>
        <button type="button" onclick="addValue('*')">*</button>

        <br>

        <button type="button" onclick="addValue('1')">1</button>
        <button type="button" onclick="addValue('2')">2</button>
        <button type="button" onclick="addValue('3')">3</button>
        <button type="button" onclick="addValue('-')">-</button>

        <br>

        <button type="button" onclick="addValue('0')">0</button>
        <button type="button" onclick="clearDisplay()">C</button>
        <button type="submit">=</button>
        <button type="button" onclick="addValue('+')">+</button>
    </form>

    <?php
if (isset($_POST['expression'])) {
    $exp = $_POST['expression'];

    $exp = str_replace(' ', '', $exp);

    if (!preg_match('#^[0-9+\-*/.]+$#', $exp)) {
        echo "<h3>Invalid Input</h3>";
    }
    elseif (preg_match('#[+\-*/]$#', $exp)) {
        echo "<h3>Incomplete Expression</h3>";
    }
    else {
        try {
            $result = eval("return $exp;");
            echo "<h3>Result: $result</h3>";
        } catch (Throwable $e) {
            echo "<h3>Error in calculation</h3>";
        }
    }
}
?>
</div>

</body>
</html>