<?php include "nav.php";?> 
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

<body>
  <section class="about">
    <div class="main">
      <img src="img/logo.jpg">
      <div class="about-text">
      <h1>
        About Us
	<div class="border"></div>
      </h1>
      <p class="text">
      We take an opportunity to introduce ourselves, <b>AJ Engineering</b> is a manufacturing service provider in various 
      segments like figs and fixtures, tool room components,precision machined components. Machining 
    heavy castings,heavy fabrication components with machining, precision ball screws machining, 
    EDM etc, under <span id="dots">...</span><span id="more">one rooof. The firm was established 
      in the end of year 2020 by Mr. Santosh Thorat who
has a vast experience in conventional and advance machining. Since the inception
we are continuous growing with objective of customer satisfaction with superior
quality, timely committed deliveries with competitive cost.
 With objective for expansion and meet the customer’s requirement we are
expanding our services to technical support for design and development of jigs
and fixture as per requirement. Engineering design and drafting, prototype
development etc, and for that we have highly experienced team with more than
20 years of experience in machine tool industries, heavy engineering projects,
steel industries automation projects, heavy fabrication projects etc.
 AJ Engineering is the fastest growing company with best machining facility like
Lathe, Milling, cylindrical grinding, surface grinding, horizontal boring machine,
press machine and fabrication facility.
</span></p>
<button onclick="myFunction()" id="myBtn">Read more</button>
      </button>
    </div>
</div>
</section> 
</body>
</html>


<style>
*{
  padding: 0;
  margin: 0;
  font-family: 'Josefin Sans', sans-serif;
  box-sizing: border-box;
}


.about{
  width:100%;
  padding: 78px 0px;
  background-color: #191919;
}



.about img{
  height:auto;
  width: 420px;
}


.about-text{
  width: 550px;
}


.main{
  width:1130px;
  max-width: 95%;
  margin: auto;
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.about-text h1{
  color: white;
  font-size: 80px;
  text-transform: capitalize;
  margin-bottom: 20px;
}



.about-text p{
  color: #fcfc;
  letter-spacing: 1px;
  line-height: 28px;
  font-size: 18px;
  margin-bottom: 45px;
}

button{
    border: none;
    padding: 8px 15px;
    background-color: #F9004d;
    color: #fff;
    transition: 0.4s;
    border: 2px solid transparent;
    padding: 13px 30px;
    border-radius: 30px;
    margin-bottom: 45px;
  }
  
  #more {display: none;}

  button:hover{
    text-decoration: underline;
    background: transparent;
    border: 2px solid #f9004d;
    cursor: pointer;
  }

  /* On screens that are 992px wide or less, go from four columns to two columns */
@media (max-width: 700px) {
  .about{
    min-height : 100vh;
      text-align: center;
      justify-content : center;
      align-items : center;
      
  }
  .main{
    display : inline;
    
  }
  .about img{
       width: 150px;
       margin-bottom : 15px;
  }
  .about-text .text{
    font-size: 14px;
  }
 
}

/* On screens that are 600px wide or less, make the columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .row {
    flex-direction: column;
  }
    }


</style>
<?php include "footer.php";?>