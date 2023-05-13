<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  </head>
  <body>
    <nav>
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
      <i class="bi bi-list"></i>
      </label>
      <label class="logo"><i class="fas fa-wrench"></i>&nbsp;&nbsp;AJ Engineering</label>
       
      <ul>
      
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="aboutus.php">About Us</a></li>
        <li><a href="services.php">Serives</a></li>
        <li><a href="contactus.php">Contact Us</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>

    </nav>
  </body>
</html>

<style>
  *{
    padding: 0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
  }

  body{
    font-family: montserrat;
  }

  nav{
    background: black;
    height: 80px;
    width: 100%;
  }

  label.logo{
    color: white;
    font-size: 35px;
    line-height: 80px;
    padding: 0 100px;
    font-weight: bold;
    background : url("img/builder.png") no-repeat scroll 0 0 transparent;
  }
  

  nav ul{
    float: right;
    line-height: 75px;
    margin-right: 40px;
  }

  nav ul li{
    display: inline-block;
    line-height; 80px;
    margin: 0 5px;
  }

  nav ul li a{
    color: white;
    font-size: 17px;
    padding: 7px 13px;
    border-radius: 3px;
    text-transform: uppercase;
  }


  a.active,a:hover{
    background: #1b9bff;
    transition: .2s;
  }

  .checkbtn{
    font-size:30px;
    color: white;
    float: right;
    line-height: 80px;
    margin-right: 40px;
    cursor: pointer;
    display: none;
  }


  #check{
    display: none;
  }
  
  .image .img-logo{
    height : 30px;
    width : 30px;
    filter: invert(1);
    
    
  }

  @media (max-width: 952px){
    label.logo{
      font-size: 30px;
      padding-left: 50px;
    }
    nav ul li a{
      font-size: 16px;
    }
  }

  @media (max-width: 858px){
    .checkbtn{
      display: block;
      padding-right: 15px;
      margin-top: 20px;
    }
    ul{
      position: fixed;
      width: 100%;
      height: 100vh;
      background: #2c3e50;
      top: 80px;
      left: -100%;
      text-align: center;
      transition: all .2s;
    }
    nav ul li{
      display: block;
      margin: 50px 0;
      line-height: 30px;
    }
    nav ul li a{
      font-size: 20px;
    }
    a:hover,a.active{
      background: none;
      color: red;
    }
    #check:checked ~ ul{
      left: 0;
    }
  }
  @media (max-width : 470px){
    label.logo{
      font-size : 20px;
    }
    .checkbtn{
      margin-top: 10px;
    }
  }
  </style>