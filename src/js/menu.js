let mennuButton = document.getElementById("menu-button")
let menu = document.getElementById("menu")

mennuButton.addEventListener("click", function() {
    'use strict';
    menu.classList.toggle('show-menu')
})