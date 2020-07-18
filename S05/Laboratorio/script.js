
var mainForm
var btnReset

function onclickButtonOperator(evt) {
    var elm = evt.target

    var operator = elm.value

    var num1 = document.getElementById("txtNumb1").value
    var num2 = document.getElementById("txtNumb2").value

    const params = new URLSearchParams()
    params.append('num1', num1)
    params.append('num2', num2)
    params.append('operador', operator)

    fetch("./calculadora.php", {
        method: 'POST',
        body: params
    })
    .then(function (resp){
        if (resp.ok)
            return resp.text()
        else
            throw "Error al calcular"
    })
    .then(function (val){
        document.getElementById("txtResult").value = val
    })
    .catch(function (err) {
        if (err) return console.log(err)
    })
}

function init() {
    // inicializar variables globales
    mainForm = document.getElementById("mainForm")
    btnReset = document.getElementById("btnReset")

    // inicilizar eventos
    var buttonsOperator = document.querySelectorAll(".button-operator")
    buttonsOperator.forEach(function (button) {
        button.addEventListener("click", onclickButtonOperator)
    })
}




window.addEventListener("load", init)