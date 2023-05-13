const form = document.querySelector(".signup form"),
continueBtn  = form.querySelector(".button input"),
errorText  = form.querySelector(".error-txt");

form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    // lets start AJAX
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = ()=>{
     if(xhr.readyState === XMLHttpRequest.DONE){
         if(xhr.status === 200){
             let data = xhr.response;
             if(data == "success"){
               location.href = 'product.php';
             }else{
             errorText.textContent = data;
             errorText.style.display = "block";
             }
         }
     }
    }
    // we have to send form data through ajax to php
    let formData = new FormData(form);
    xhr.send(formData);
}