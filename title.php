

<!DOCTYPE html>
<html>
<head>
  <title>Title</title>
  
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<body>

<div class="wrap">
		<h1 contenteditable data-heading="Welcome to AJ Engineering">Welcome to AJ Engineering</h1>
	<span>
  <button class="button" name ="submit" onClick="document.location.href='login.php'">Order Now</button>
  </span>
</div>

</body>
</html>
 <style>
   @import url('https://fonts.googleapis.com/css2?family=Balsamiq+Sans:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;500&family=Roboto:wght@300;400;500;700&display=swap');
body{
     min-height : 100vh; 
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.9)),url("img/in.jpg");
    background-size : cover;

    justify-content: center;
    align-items: center;
  } 

  .wrap{
  height: 100%;
  display: flex;
  flex-direction : column;
  align-items: center; 
  justify-content: center; 
}

h1 {
  font-family: 'Poppins', 'sans-serif';
  text-transform: uppercase;
  font-size: 45px;
  font-weight : 500;
  /* line-height :1; */
  text-align: center;
  font-weight: normal;
  margin: 0;
  top: 45%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
          transform: translate(-50%, -50%);
  position: absolute;
  color: #91d4ff;

  color: transparent;
   outline :none;
  
  /* &:focus {
    outline: none;
  } */
  
}

h1::before, h1::after {
  content: attr(data-heading);
  position: absolute;
  top: 0;
  left: 0;  
}


h1::before {
  color: cyan;
  clip-path: polygon(0% 100%, 100% 100%, 100% 40%, 0 60%)
}

h1::after {
  color: white;
  clip-path: polygon(0 0, 100% 0%, 100% 36%, 0 56%);
  animation: slide 5s infinite;
}



@keyframes slide {
  0% {
    transform: translateX(0);
  }
  50% {
    transform: translate(-20px, 2%);
  }
}


.button {
  min-width: 300px;
  min-height: 60px;
  font-family: 'Nunito', sans-serif;
  font-size: 22px;
  text-transform: uppercase;
  letter-spacing: 1.3px;
  font-weight: 700;
  color: #313133;
  background: #4FD1C5;
  background: linear-gradient(90deg, rgba(129,230,217,1) 0%, rgba(79,209,197,1) 100%);
  border: none;
  border-radius: 1000px;
  box-shadow: 12px 12px 24px rgba(79,209,197,.64);
  transition: all 0.3s ease-in-out 0s;
  cursor: pointer;
  outline: none;
  position: relative;
  padding: 10px;
  }

button::before {
content: '';
  border-radius: 1000px;
  min-width: calc(300px + 12px);
  min-height: calc(60px + 12px);
  border: 6px solid #00FFCB;
  box-shadow: 0 0 60px rgba(0,255,203,.64);
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  opacity: 0;
  transition: all .3s ease-in-out 0s;
}

.button:hover, .button:focus {
  color: #313133;
  transform: translateY(-6px);
}

button:hover::before, button:focus::before {
  opacity: 1;
}

  </style>


<script>
   var h1 = document.querySelector("h1");

h1.addEventListener("input", function() {
    this.setAttribute("data-heading", this.innerText);
});
        </script>
