const password = document.querySelector("#password")
const check_btn = document.querySelector("#check_btn")

check_btn.addEventListener("click", () => {
    if(check_btn.checked){
        password.type = "text"
    }else{
        password.type = "password"
    } 
})