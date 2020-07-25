
function onClickValidarDNI(evt) {

    // validacion de nro. DNI con expresion regular
    var dni = document.getElementById("txtDNI").value.trim()
    var regexNum = /^[0-9]+$/;
    if (regexNum.test(dni)) { 
        if (dni.length === 8) {
            // peticion AJAX para validar si DNI existe
            const params = new URLSearchParams()
            params.append('accion', "valida_dni")
            params.append('dni', dni)
            fetch("./include/funciones.php", {
                method: 'POST',
                body: params
            })
            .then(function (resp){
                if (resp.ok)
                    return resp.text()
                else
                    throw "Error al validar"
            })
            .then(function (val){
                if (val === "ok") {
                     // mostrar candidatos para votar y desahbilitar boton e input
                    document.getElementById("sectCandidatos").style.visibility = 'visible'
                    document.getElementById("txtDNI").disabled = true
                    document.getElementById("btnValidaDNI").disabled = true
                }
                else {
                    // mostrar error y limpiar
                    alert(val)
                    document.getElementById("txtDNI").value = ""
                    document.getElementById("txtDNI").focus()
                    document.getElementById("sectCandidatos").style.visibility = 'hidden'  
                }
            })
            .catch(function (err) {
                if (err) return console.log(err)
            })
        }
        else {
            alert("El Nro. de DNI no debe contenener 8 caracteres, por favor corregir.")
            document.getElementById("txtDNI").value = ""
            document.getElementById("txtDNI").focus()
        }
    }
    else {
        alert("El Nro. de DNI no es correcto, por favor corregir.")
        document.getElementById("txtDNI").value = ""
        document.getElementById("txtDNI").focus()
    }
}

function onClickCanditatoItem (evt) {
    evt.preventDefault()
    evt.stopPropagation()
    var dataItem = evt.target.dataset
    var dni = document.getElementById("txtDNI").value.trim()

    if (confirm("¿Confirma su voto para el candidato: " + dataItem.candidato + ", grupo:" + dataItem.grupo + "?" )) {
        // peticion AJAX realizar voto
        const params = new URLSearchParams()
        params.append('accion', "votar")
        params.append('dni', dni)
        params.append('voto', dataItem.candidato)
        fetch("./include/funciones.php", {
            method: 'POST',
            body: params
        })
        .then(function (resp){
            if (resp.ok)
                return resp.text()
            else
                throw "Error al emitir voto"
        })
        .then(function (val){
            if (val === "ok") {
            //      // mostrar candidatos para votar y desahbilitar boton e input
            //     document.getElementById("sectCandidatos").style.visibility = 'visible'
            //     document.getElementById("txtDNI").disabled = true
            //     document.getElementById("btnValidaDNI").disabled = true
            }
            else {
            //     // mostrar error y limpiar
                alert(val)
            //     document.getElementById("txtDNI").value = ""
            //     document.getElementById("txtDNI").focus()
            //     document.getElementById("sectCandidatos").style.visibility = 'hidden'  
            }
        })
        .catch(function (err) {
            if (err) return console.log(err)
        })
    }
}

function init() {


    // inicializar eventos
    document.getElementById("btnValidaDNI").addEventListener("click", onClickValidarDNI)
    var candidatosItems = document.querySelectorAll(".candidato-item")
    candidatosItems.forEach(function (item) {
        item.addEventListener("click", onClickCanditatoItem)
    })
}

window.addEventListener("load", init)