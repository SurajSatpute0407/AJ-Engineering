
<?php include "nav.php";?>










<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
  </head>
  <body>
    <section>
      <div class="container">
        <div class="contactInfo">
          <div>
            <h2>Contact Info</h2>
            <ul class="info">
              <li>
                <span>
                  <img src="img/Location.png">
                </span>
                <span>
                  Shivajinagar<br>
                  pune<br>
                  05
                </span>
              </li>
              <li>
                <span>
                  <img src="img/mail.png">
                </span>
                <span>
                  ajengineering@gmail.com
                </span>
              </li>
              <li>
                <span>
                  <img src="img/call.png">
                </span>
                <span>
                  +91-9503392651
                </span>
              </li>
            </ul>
          </div>
          <ul class="sci">
            <li><a href="#"><img src="img/.png"></a></li>
            <li><a href="#"><img src="img/2.png"></a></li>
            <li><a href="#"><img src="img/3.png"></a></li>
            <li><a href="#"><img src="img/5.png"></a></li>
          </ul>
        </div>
        <form class="contactForm" >
          <h2>Send a Messege</h2>
          <div class="formBox">
            <div class="inputBox w50">
              <input type="text" class= "form-control" name="firstname"required>
              <span>First Name</span>
            </div>
            <div class="inputBox w50">
              <input type="text" class="form-control" name="lastname" required>
              <span>Last Name</span>
            </div>
            <div class="inputBox w50">
              <input type="email" class="email" name="email" required>
              <span>Email Address</span>
            </div>
            <div class="inputBox w50">
              <input type="text" class="mobile" name="mobile" required>
              <span>Mobile Number</span>
            </div>
            <div class="inputBox w100">
              <textarea name="comment" required></textarea>
              <span>Write your message here...</span>
            </div>
            <div class="inputBox w100">
              <input type="submit" value="send" name="submit">
            </div>
          </div>
</form>
      </div>
</section>
  </body>
</html>

<script>
  if(window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
  }

  </script>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family:'poppins',sans-serif;
  }

section
{ 
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #095a55;
}
section::before
{ 
    content:'';
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 100%;
    background: #fff38e;
}

.container{
  position: relative;
  min-width: 1100px;
  min-height: 550px;
  display: flex;
  z-index: 1000;
}

.container .contactInfo{
  position: absolute;
  top: 40px;
  width: 350px;
  height: calc(100% - 80px);
  background: #095a55;
  z-index: 1;
  padding: 40px;
  display: flex;
  justify-content: center;
  flex-direction: column;
  justify-content: space-between;
  box-shadow: 0 20px 25px black;
}


.container .contactInfo h2{
  color:#fff;
  font-size: 24px;
  font-weight: 500;
}

.container .contactInfo ul.info{
  position: relative;
  margin: 20px 0;
}


.container .contactInfo ul.info li{
  position: relative;
  list-style: none;
  display: flex;
  margin: 20px 0;
  cursor: pointer;
  align-items: flex-start;
}


.container .contactInfo ul.info li span:nth-child(1){
  width: 30px;
  min-width: 30px;
}


.container .contactInfo ul.info li span:nth-child(1) img{
  max-width: 100%;
  filter: invert(1);
}


.container .contactInfo ul.info li span:nth-child(2){
  color: #fff;
  margin-left: 10px;
  font-weight: 300;
}


.container .contactInfo ul.sci{
  position: relative;
  display: flex;
}


.container .contactInfo ul.sci li{
  list-style: none;
  margin-right: 15px;
}


.container .contactInfo ul.sci li a{
  text-decoration: none;
}


.container .contactInfo ul.sci li a img{
  filter: invert(1);
}


.container .contactForm{
  position: absolute;
  padding: 70px 50px;
  padding-left: 250px;
  margin-left: 150px;
  width: calc(100% - 150px);
  height: 100%;
  background: #fff;
}

.container .contactForm h2{
  color: #0f3959;
  font-size: 24px;
  font-weight: 500;
}

.container .contactForm .formBox{
  position: relative;
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  padding-top: 30px;
}

.container .contactForm .formBox .inputBox{
  position:relative;
  margin-bottom: 35px;
}

.container .contactForm .formBox .inputBox.w50{
  width: 47%;
}


.container .contactForm .formBox .inputBox.w100{
  width: 100%;
}


.container .contactForm .formBox .inputBox input,
.container .contactForm .formBox .inputBox textarea{
  width:100%;
  resize: none;
  padding: 5px 0;
  font-size: 18px;
  font-weight: 300;
  color:#333;
  border: none;
  outline:none;
  border-bottom: 1px solid #777;
}


.container .contactForm .formBox .inputBox textarea{
  height: 120px;
}


.container .contactForm .formBox .inputBox span{
  position: absolute;
  left: 0;
  padding: 5px 0;
  pointer-events: none;
  font-size: 18px;
  font-weight: 300;
  transition: 0.3s;
}


.container .contactForm .formBox .inputBox input:focus ~ span,
.container .contactForm .formBox .inputBox input:valid ~ span,
.container .contactForm .formBox .inputBox textarea:focus ~ span,
.container .contactForm .formBox .inputBox textarea:valid ~ span{
  transform: translateY(-20px);
  font-size: 12px;
  font-weight: 400;
  letter-spacing: 1px;
  color: #095a55;
  font-weight: 500;
}


.container .contactForm .formBox .inputBox input[type="submit"]{
  position: relative;
  cursor: pointer;
  background: #095a55;
  color:#fff;
  border: none;
  max-width: 150px;
  padding: 12px;
}


.container .contactForm .formBox .inputBox input[type="submit"]:hover{
  background: #0d948b;
}

@media (max-width : 991px)
{
  section{
    background : #fff38e
  }
  section : before
  {
    display: none;
  }
  .container
  {
    display : flex;
    flex-direction : column-reverse;
  }
}






</style>
<?php include "footer.php";?> 