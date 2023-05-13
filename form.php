<?php
 include "php/connection.php";

 if(isset($_POST['submit']))
 {
   $cname = $_POST['cname'];
   $cmail = $_POST['cmail'];
   $contactno = $_POST['contactno'];
   $country = $_POST['country'];

   $errors = array();

   $n = "SELECT cname FROM company WHERE cname = '$cname'";
   $nn = mysqli_query($conn, $n);

   $e = "SELECT cmail FROM company WHERE cmail = '$cmail'";
   $ee = mysqli_query($conn, $e);

   $c = "SELECT contactno FROM company WHERE contactno = '$contactno'";
   $cc = mysqli_query($conn, $c);

   if(empty($cname))
   {
     $errors['n'] = "Company's name required";
   }else if(mysqli_num_rows($nn) > 0){
     $errors['n'] = "Company Exists";
   }

   if(empty($cmail))
   {
    $errors['e'] = "Company's email required";
   }else if(mysqli_num_rows($ee) > 0){
     $errors['e'] = "Email Exists";
   }

   if(empty($contactno))
   {
    $errors['c'] = "Company's contactno required";
   }else if(mysqli_num_rows($cc) > 0){
     $errors['c'] = "Number already Exists";
   }

   if(empty($country))
   {
     $errors['o']  = "Company's country required";
   }
   if(count($errors)==0)
   {
     $query = "INSERT INTO company(cname,cmail,contactno,country) VALUES ('$cname' ,'$cmail','$contactno', '$country')";

     $result = mysqli_query($conn, $query);

     if($result)
     {
      //  echo "<script>alert('Details saved successfully')</script>";
              $cname = "";
              $cmail = "";
              $contactno = "";
              $country = "";
              header("Location: cart/cart.php?detailssuccessullysaved");
     }
     else{
       echo "<script>alert('Oops! Failed to save')";
     }
   }
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>
    <link rel="stylesheet" type = "text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

  <div class="container-fluid">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3">
</div>
        <div class="col-md-6 jumbotron my-5">
          <form method = "post" >
            <div class="form-group">
              <label>Company's name </label>
              <input type = "text" name = "cname" placeholder = "Enter Company's Name" class= "form-control" autocomplete = "off">
              <p class = "text-danger"><?php if(isset($errors['n'])) echo $errors['n']; ?></p>
            </div>
            <div class="form-group">
              <label>Company's Email </label>
              <input type = "email" name = "cmail" placeholder = "Enter Company's Email" class= "form-control" autocomplete = "off">
              <p class = "text-danger"><?php if(isset($errors['e'])) echo $errors['e']; ?></p>
            </div>
            <div class="form-group">
              <label>Company's Contact No </label>
              <input type = "tel" name = "contactno" placeholder = "Enter Company's Contact No" class= "form-control" autocomplete = "off">
              <p class = "text-danger"><?php if(isset($errors['c'])) echo $errors['c']; ?></p>
            </div>
            <div class="form-group">
              <label> Country </label>
              <select class= "form-control" name="country">
              
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="india" selected>India</option>
          <option value="spain">Spain</option>
          <option value="austin">Austin</option>
          <option value="london">London</option>
          <option value="germany">Germany</option>
          <option value="france">France</option>
          <option value="cambodia">Cambodia</option>
          <option value="bangladesh">Bangladesh</option>
          <option value="brazil">Brazil</option>
          <option value="west Indies">West Indies</option>
        </select>
        
            </div>

            <input type ="submit" value = "submit" name= "submit" class="btn btn-success">

            
        
      </div>
    </div>


</body>
</html>

 <style>
  body{
     /* min-height : 100vh;  */
    background-image: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url("img/company.jpg");
    background-size : cover;
    justify-content: center;
    align-items: center;
  } 

  
  </style> 