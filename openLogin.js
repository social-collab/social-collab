const openLogin = document.querySelector("#openLogin")
openLogin.addEventListener("click", function() {
    const loginForm = document.querySelector("#loginForm")
    loginForm.classList.toggle("uk-hidden")
    if(openLogin.textContent === "Login") {
        openLogin.textContent = "Close"
        openLogin.classList.add("uk-button-danger")
    } else {
        openLogin.textContent = "Login"
        openLogin.classList.remove("uk-button-danger")
    }
})