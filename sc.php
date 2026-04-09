<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Scientific Calculator</title>

<style>
    body {
        margin: 0;
        font-family: Arial;
        background: linear-gradient(135deg, #1e1e2f, #2c2c54);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .calculator {
        background: #1f1f2e;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 0 25px rgba(0,0,0,0.5);
        animation: fadeIn 1s ease;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: scale(0.8); }
        to { opacity: 1; transform: scale(1); }
    }

    #display {
        width: 100%;
        height: 60px;
        font-size: 24px;
        text-align: right;
        padding: 10px;
        border-radius: 10px;
        border: none;
        margin-bottom: 15px;
        background: #111;
        color: #0f0;
    }

    .buttons {
        display: grid;
        grid-template-columns: repeat(5, 60px);
        gap: 10px;
    }

    button {
        height: 50px;
        border: none;
        border-radius: 10px;
        font-size: 16px;
        cursor: pointer;
        background: #2f2f4f;
        color: white;
        transition: 0.2s;
    }

    button:hover {
        background: #4e4eff;
        transform: scale(1.1);
    }

    .equal {
        background: #00c853;
    }

    .clear {
        background: #d50000;
    }
</style>

</head>
<body>

<div class="calculator">
    <input type="text" id="display" readonly>

    <div class="buttons">
        <button onclick="clearDisplay()" class="clear">C</button>
        <button onclick="del()">DEL</button>
        <button onclick="add('(')">(</button>
        <button onclick="add(')')">)</button>
        <button onclick="add('/')">/</button>

        <button onclick="add('7')">7</button>
        <button onclick="add('8')">8</button>
        <button onclick="add('9')">9</button>
        <button onclick="add('*')">*</button>
        <button onclick="add('Math.sqrt(')">√</button>

        <button onclick="add('4')">4</button>
        <button onclick="add('5')">5</button>
        <button onclick="add('6')">6</button>
        <button onclick="add('-')">-</button>
        <button onclick="add('Math.pow(')">xʸ</button>

        <button onclick="add('1')">1</button>
        <button onclick="add('2')">2</button>
        <button onclick="add('3')">3</button>
        <button onclick="add('+')">+</button>
        <button onclick="add('Math.log10(')">log</button>

        <button onclick="add('0')">0</button>
        <button onclick="add('.')">.</button>
        <button onclick="add('Math.sin(')">sin</button>
        <button onclick="add('Math.cos(')">cos</button>
        <button onclick="add('Math.tan(')">tan</button>

        <button onclick="add('Math.PI')">π</button>
        <button onclick="add('Math.E')">e</button>
        <button onclick="add('Math.exp(')">exp</button>
        <button onclick="add('Math.abs(')">|x|</button>
        <button onclick="calculate()" class="equal">=</button>
    </div>
</div>

<script>
function add(val) {
    document.getElementById("display").value += val;
}

function clearDisplay() {
    document.getElementById("display").value = "";
}

function del() {
    let d = document.getElementById("display");
    d.value = d.value.slice(0, -1);
}

function calculate() {
    let exp = document.getElementById("display").value;

    try {
        let result = eval(exp);
        document.getElementById("display").value = result;
    } catch {
        alert("Invalid Expression");
    }
}
</script>

</body>
</html>