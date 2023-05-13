const pwrdField = document.querySelector(".form .field input[type = 'password']"),
toggleBtn = document.querySelector(".form .field i");

toggleBtn.onclick = ()=>{
    if(pwrdField.type == "password"){
        pwrdField.type = "text";
        toggleBtn.classList.add("active");
    }else{
        pwrdField.type = "password";
        toggleBtn.classList.remove("active");
    }
}