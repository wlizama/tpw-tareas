


function init () {
    var menuElms = document.querySelectorAll("[data-submenu-id]")
    menuElms.forEach(function (elm) {
        elm.addEventListener("mouseenter", function(evt) {
            var submenuId = evt.target.dataset.submenuId
            document.querySelector(submenuId).style.display = "block"
        })
        elm.addEventListener("mouseleave", function(evt) {
            var submenuId = evt.target.dataset.submenuId
            document.querySelector(submenuId).style.display = "none"
        })
    })
}

window.addEventListener("load", init)