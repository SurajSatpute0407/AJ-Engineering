

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Details</title>
</head>
<body>
<div class="container">
  <form method = "post" >
    <div class="row">
      <div class="col-25">
        <label for="cname">Company's Name</label>
      </div>
      <div class="col-75">
        <input type="text" name="comp_name" placeholder="Compan'y name.."  autocomplete="off" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="cmail">Company's Email</label>
      </div>
      <div class="col-75">
        <input type="email"  name="comp_email" placeholder="Company's email. " required >
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
      </div>
      <div class="col-75">
        <select id="country" name="comp_country"  required>
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
          <option value="india" >India</option>
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
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name = "submit">
    </div>
  </form>
</div>
</body>
</html>

<style>


    input[type=text],input[type=email], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  margin-top: 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  width: 80%;
  text-align : center;
  justify-content: center;
  display : center;

}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
    </style>