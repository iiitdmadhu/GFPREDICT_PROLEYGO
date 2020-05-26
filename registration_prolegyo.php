<!DOCTYPE html>
<html>
<head>
	<title> Machine Learning in Genomics
	</title>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">
  

<script type="text/javascript">
    function validateform(){
      var pass1=document.getElementById("userp").value;
      var pass2=document.getElementById("confirmp").value;
      if(pass1==pass2){
        alert("Registration Completed");
        return true;
      }
      else{
        alert("Passwords do not match");
        return false;
      }
    }
  </script>




</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">GFPredict</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home_prolegyo.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="services.php">Services</a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="about_prolegyo.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>

      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<br>
<div class="container">
  <form action="userinfo.php" method="post" onsubmit="return validateform();">
  First Name: <br>
  <input type="varchar" name="first_name" required> <br>
  Last Name: <br>
  <input type="varchar" name="last_name"> <br>
  Email: <br>
  <input type="varchar" name="email" placeholder="abc@gmail.com" required> <br>
  Gender: <br>
  <input type="radio" name="gender" value="male"> Male <br>
  <input type="radio" name="gender" value="female"> Female <br>
  <input type="radio" name="gender" value="others"> Others <br>
  Date of Birth: <br>
  <input type="date" name="dob"> <br>
  Contact: <br>
  <input type="varchar" name="contact"> <br>
  User password: <br>
  <input type="text" id="userp" min="6" max="15"> <br>
  Confirm passsword: <br>
  <input type="text" id="confirmp" min="6" max="15"> 

  <input type="submit" value="submit">
</div>

</form>
</div>

<br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<footer> <p class="p-2 bg-dark text-white text-left padding=1px"> Designed by Aditya Mittal and Omkar Chandra </p> </footer>





</body>
</html>