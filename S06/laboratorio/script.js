
function init() {

    function onSubmit(evt) {
        var apellidos = document.getElementById("txtApellidos").value
        var nombres = document.getElementById("txtNombres").value

        if (apellidos.trim() === "" || nombres.trim() === "") {
            evt.preventDefault()
            alert("Faltan datos, por favor completar")
            return
        }
    }

    document.getElementById("frmDatos").addEventListener("submit", onSubmit)
}

window.addEventListener("load", init)