<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <footer class="footer">
    <div class="New">
      <div class="row">
        <div class="footer-col">
          <h4>Company</h4>
          <ul>
            <li><a href="aboutus.php">About us</a></li>
            <li><a href="services.php">Our Services</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Get Help</h4>
          <ul>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">returns</a></li>
            <li><a href="#">Order Status</a></li>
            <li><a href="#">Payment Options</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Follow Us</h4>
          <a href="#" class="fa fa-facebook"></a>
          <a href="https://www.instagram.com/suraj_satpute_0407/" class="fa fa-instagram"></a>
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-linkedin"></a>
        </div>
      </div>
      <p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"><?php echo date('Y');?> Tourism Management System.|<a href="#"></a> Designed by: Sanket Aher </p>
    </div>
  </footer>
</body>
</html>

<style>

@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

body {
  line-height: 1.0;
  font-family: 'Poppins', sans-serif;
}


* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  .New{
    max-width: 1170px;
    background-color:#24262b;
    margin: auto;
  }


  .row{
    display: flex;
    flex-wrap: wrap;
  }


  ul{
    list-style: none;
  }


  .footer{
    background-color: #24262b;
    padding: 50px 0;
  }


  .footer-col {
    width: 25%;
    padding: 0 15px;
  }


  .footer-col h4{
    font-size: 18px;
    color: #ffffff;
    text-transform: capitalize;
    margin-bottom: 30px;
    font-weight: 500;
    position: relative;
  }


  .footer-col h4::before{
    content:'';
    position: absolute;
    left: 0;
    bottom: -10px;
    background-color: #e91e63;
    height: 2px;
    box-sizing: border-box;
    width: 50px;
  }


  .footer-col ul li:not(:last-child){
    margin-bottom: 10px;
  }


  .footer-col ul li a{
    font-size: 16px;
    text-transform: capitalize;
    color: #ffffff;
    text-decoration: none;
    font-weight: 300;
    color:#bbbbbb;
    display: black;
    transition: all 0.3s ease;
  }



.footer-col ul li a:hover{
  color: #ff0000;
  padding-left: 8px;
}

.fa {
  display: inline-block;
  font-size: 20px;
  height: 40px;
  width: 40px;
  background-color: #ffffff;
  margin:0 10px 10px 0;
  text-align: center;
  line-height: 40px;
  border-radius: 50%;
  color:#ff0000;
  transition: all 0.5s ease;
  text-decoration: none;
}

.fa:hover {
    opacity: 0.2;
    color: #24262b;
    background-color:#ffffff;
}

.fa-facebook {
  {
    background: #ffffff;
    opacity: 0.2;
}

.fa-twitter {
  background: #ff0000;
  color: white;
}

.fa-linkedin {
  background: #ff0000;
  color: #ffffff;
}

.fa-instagram {
  background: #ffffff;
  color: #ffffff;
}

/responsive/

@media(max-width:767px){
    .footer-col {
      width: 50%;
      margin-bottom: 30px;
    }
  } 

  @media(max-width:574px){
    .footer-col {
      width: 100%;
      
    }
  } 



  </style>