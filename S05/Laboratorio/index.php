<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <h1>Calculadora operaciones básicas</h1>
    <form action="./calculadora.php" method="post" class='calc'>
        <input name="num1" type="hidden" value="15">
        <input name="operador" type="hidden" value="+">
        <input name="num2" type="hidden" value="18">

        <div class="operation">
            <input disabled type="text" value="0">
        </div>
        <div class="buttons">
            <div class="calc-row">
                <button type="button">mod</button>
                <button type="button">++</button>
                <button type="button">--</button>
                <button type="button">/</button>
            </div>
            <div class='calc-row'>
                <button type="button" class="number">1</button>
                <button type="button" class="number">2</button>
                <button type="button" class="number">3</button>
                <button type="button">*</button>
            </div>
            <div class='calc-row'>
                <button type="button" class="number">4</button>
                <button type="button" class="number">5</button>
                <button type="button" class="number">6</button>
                <button type="button">+</button>
            </div>
            <div class='calc-row'>
                <button type="button" class="number">7</button>
                <button type="button" class="number">8</button>
                <button type="button" class="number">9</button>
                <button type="button">-</button>
            </div>
            <div class='calc-row'>
                <button type="button" class="number">0</button>
                <button type="button" class="number">.</button>
                <button type="button">C</button>
                <button type="submit">=</button>
            </div>
        </div>
    </form>
</body>
</html>