
<?php include "nav.php";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-header">
                    <h2>Our Services</h2>
                     <p>Some of our recent works</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="single-service">
                    <div class="service-bg service-bg-1">
                        <h2>Machining</h2>
                    </div>
                    <div class="service-text">
                        <p>Machining is a prototyping and manufacturing process that creates a desired shape by removing unwanted material from a larger piece of material. Since a part is built by taking away material, this process is also known as subtractive manufacturing.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-service">
                    <div class="service-bg service-bg-2">
                        <h2>fabrication</h2>
                    </div>
                    <div class="service-text">
                        <p>Fabrication is the process of constructing products by combining typically standardised parts using one or more individual processes. For example, steel fabrication is the production of metal structures using a range of processes such as cutting, bending and assembling.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-service">
                    <div class="service-bg service-bg-3">
                        <h2>Press-components</h2>
                    </div>
                    <div class="service-text">
                        <p>Press tools are commonly used in hydraulic, pneumatic, and mechanical presses to produce the sheet metal components in large volumes. Generally press tools are categorized by the types of operation performed using the tool, such as blanking, piercing, bending</p>
                       
                    </div>
                </div>
            </div>
</div>
            <div class="row">
            <div class="col-md-4">
                <div class="single-service">
                    <div class="service-bg service-bg-4">
                        <h2>Precision ball screw Machining</h2>
                    </div>
                    <div class="service-text">
                        <p>Machining is a prototyping and manufacturing process that creates a desired shape by removing unwanted material from a larger piece of material. Since a part is built by taking away material, this process is also known as subtractive manufacturing.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-service">
                    <div class="service-bg service-bg-5">
                        <h2>Sheet Metal fabrication</h2>
                    </div>
                    <div class="service-text">
                        <p>Machining is a prototyping and manufacturing process that creates a desired shape by removing unwanted material from a larger piece of material. Since a part is built by taking away material, this process is also known as subtractive manufacturing.</p>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-service">
                    <div class="service-bg service-bg-6">
                        <h2>Prototype Manufacturing</h2>
                    </div>
                    <div class="service-text">
                        <p>Machining is a prototyping and manufacturing process that creates a desired shape by removing unwanted material from a larger piece of material. Since a part is built by taking away material, this process is also known as subtractive manufacturing.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

<style>
    *
    {
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
    a:focus { outline: 0 solid}
    img {
        max-width: 100%;
        height: auto;
    }
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0 0 15px;
        font-weight: 700;
    }
  

    body {
           background: #ddd;
           font-family: poppins;
           
          
    }
    a{
        -o-transition: 0.3s;
        -webkit-transition:0.3s;
        transition: 0.3s;
        color: #333;
    }
    a:hover { text-decoration: none}

    .section-header{
        text-align:center;
        margin-bottom: 30px;
        margin-top: 15px;
        align-items : center;

    }
    .section-header h2{
        color :#fff ;
        /* position :center; */
    }
    .section-header p{
        font-size: 18px;
        color : #fff;
    }

    .single-service{
        border: 1px solid #ebebeb;
        text-align: center;
        background: #fff;
    }
    .service-bg{
        height: 200px;
        position: relative;
    }

    .service-bg-1{
        background: url("img/machining.jpg");
        background-size: cover;
        background-position: center;

    }
    .service-bg-2{
        background: url("img/fabrication.jpg");
        background-size: cover;
        background-position: center;


    }
    .service-bg-3{
        background: url("img/press-components.jpg");
        background-size: cover;
        background-position: center;
    }
    .service-bg-4{
        background: url("img/Ballscrew.jpg");
        background-size: cover;
        background-position: center;

    }
    .service-bg-5{
        background: url("img/Sheet_metal.jpg");
        background-size: cover;
        background-position: center;

    }
    .service-bg-6{
        background: url("img/prototype.jpg");
        background-size: cover;
        background-position: center;

    }
     .service-bg h2{
         color: #fff;
         background: tomato;
         border: 1px solid tomato;
         font-size: 17px;
         text-align: center;
         font-weight: 700;
         padding: 15px;
         position:absolute;
         left: 8%;
         width: 84%;
         margin: 0;
         bottom: -25px;
         border-radius: 50px;
         letter-spacing:2px;
     }
     .single-service:hover .service-bg h2{
         background: #fff;
         transition: .9s;
         color: tomato;
     }
     .service-text{
         padding: 50px 30px 20px;
         font-size: 15px;
         font-weight: 400;

     }

     .service-text p:last-child{
         margin: 0;
         line-height: 1.8;
     }

     .btn-area{
         display: inline-block;
         color: #333;
         font-size: 17px;
         font-weight: 700;
         margin-top: 30px;
         text-transform: capitalize;
     }
     .container .row{
         margin-bottom: 30px;
     }
     
      @media screen and(max-width: 767px){
      .single-service{
          margin-top: 30px;
      }
      .service-bg h2{
          font-size: 13px;
      }
    }
    </style>
    <?php include "footer.php";?>
   