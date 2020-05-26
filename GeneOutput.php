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
  
<h1 class="text-center"> Gene Name </h1>

</div>

<article>
    <h1>Prediction by Gene Name</h1>


<?php
  echo 'Classifier is: ';
  //echo $_GET["Classifiers"];
  //echo '<br><br>';
  //echo 'Function is: ';
  //echo $_GET["function"];
  
//echo $_POST["GeneName"];
  $Gname = $_POST["GeneName"];
  $randNum = rand(10,100);
  
  
  echo "<br>";
  echo 'Gene name is: ';
  //echo '<br>';
  echo $Gname;
  echo '<br>';
  echo 'Random Number is: ';
  //echo '<br>';
  echo $randNum;
  echo '<br>';
  //echo "C:\Program` Files\R\R-3.6.0\bin\Rscript.exe --vanilla displayfunc.R $model $Qfunc 2>&1";
  //echo '<br>';
  //echo "C:\\xampp\htdocs\Proleygo\Rscript_1.exe --vanilla displayfunc.R $model $Qfunc $randNum 2>&1";
  //echo shell_exec('C:\xampp\htdocs\Proleygo\Rscript_1.exe --vanilla displayfunc.R $model $Qfunc 2>&1');
  //echo '<br>';
  
  $returnMessage = shell_exec("F:\\xampp\htdocs\Proleygo\R-3.6.0\bin\Rscript.exe displayfuncGenes.R $Gname $randNum 2>&1");
  echo $returnMessage;

  if($returnMessage == "OK")
  {
    echo 'hellodcefef';
    echo '<script> alert("Gene Name Does not exists"); </script>';
  } else{
    echo '<br>';
    echo '<br>';
    echo 'Functions associated with the selected gene are :';
    echo '<br>';
    echo '<br>';
    $geneFile = "F:\\xampp\\htdocs\\Proleygo\\GeneFunction\\GeneFunction-".$randNum.".txt";
    $genesToPrint = file($geneFile , FILE_IGNORE_NEW_LINES);
    echo readfile($geneFile);
  }

?><br>


</article>
    
      



<footer> <p class="p-2 bg-dark text-white text-center"> Designed by Aditya Mittal and Omkar Chandra </p> </footer>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</body>

 </html> 

