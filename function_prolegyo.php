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

  <script>
      function validateForm() {
        var x = document.forms["funcAndClassi"]["function"].value;
        var y = document.forms["funcAndClassi"]["Classifiers"].value;
        if (x == "") {
          alert("Function name must be filled out");
          return false;
        }
        if (y == "") {
          alert("Classifier name must be filled out");
          return false;
        }
      }
    </script>
  

</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"> Gene Function Prediction</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home_prolegyo.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact1.php">Services</a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="about_prolegyo.php">About</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="registration_prolegyo.php">Contact</a>
      </li>

      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="jumbotron jumbotron-fluid">
  <div class="container py-0">
    <h1>GFPredict</h1>
    <p>Predicting Ontology Based Gene Functions</p>
  </div>
</div>

<section class="my-1">
  
<div class="py-1">
  
<h1 class="text-center"> Function </h1>

</div>

<article>
    <h1>Prediction by Function</h1>
    
        <br />
        Select Function
          
          <form action="test23.php" method="post" name = "funcAndClassi" onsubmit = "return validateForm()" >
          <!-- <input list ="function" placeholder="Search..." name="function"> -->
             <!-- <datalist id="function"> -->
             <select class="function" name="function" id="function">
          <?php
          // error_reporting(E_ALL);
          // ini_set('display_errors',1);
          $filename = 'list_function_sorted.txt';
          $eachlines = file($filename, FILE_IGNORE_NEW_LINES);//create an array
          echo count($eachlines);

          //echo '<select name="value" id="value">';
          
          // for($i =0 ; $i<5000; $i++){
          //  echo "<option>{$eachlines}</option>";
          // }
          // echo '</select>';
        
          foreach($eachlines as $lines){
            echo "<option>{$lines}</option>";
          }
          //echo '</select>';

          //echo 'count($eachlines)';

          ?>
          </select> 
        <!-- </datalist> -->
          <br>
          <br>
          Select Classifier
          <br>
          <input list="Classifiers" placeholder="Search..." name="Classifiers">
            <datalist id="Classifiers">
            <option value=1>GLMnet</option>
            <option value=2>Laaso</option>
            <option value=3>Random Forest</option>
            <option value=4>SVM</option>
            <option value=5>XGBoost</option>
            </datalist>
            <br>
            
          <br>
          <br>
          
            <input type="submit">
          </form>
          
          

 
        
  </article>
    



<footer> <p class="p-2 bg-dark text-white text-center"> Designed by Aditya Mittal and Omkar Chandra </p> </footer>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

 </html> 

