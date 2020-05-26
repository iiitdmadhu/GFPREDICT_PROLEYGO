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
        <a class="nav-link" href="about_prolegyo.php">About</a>
      </li>

<li class="nav-item">
        <a class="nav-link" href="contact1.php">Services</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="registration_prolegyo.php">Contact</a>
      </li>

      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>



<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image1.jpg" alt="Life Science" width="500" height="300">
      <div class="carousel-caption">
        <h1> <font color="black"> <strong> Gene Function Prediction </strong> </font> </h1>
        <h2><font color="black"> <strong> Predicting Ontology Based Gene Functions </strong> </font> </h2>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image2.jpg" alt="Data Science" width="500" height="300">
      <div class="carousel-caption">
        <h1> <font color="black"> <strong> Gene Function Prediction </strong> </font> </h1>
        <h2><font color="black"> <strong> Predicting Ontology Based Gene Functions </strong> </font> </h2>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image3.jpg" alt="Technology" width="500" height="300">
      <div class="carousel-caption">
        <h1> <font color="black"> <strong> Gene Function Prediction </strong> </font> </h1>
        <h2><font color="black"> <strong> Predicting Ontology Based Gene Functions </strong> </font> </h2>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<section class="my-3">
	
<div class="py-3">
	
<h2 class="text-center"> HOME </h2>

</div>

<div class="container-fluid">
<div class="row">

	<div class="col-lg-6 col-md-6 col-12">
  <img src="image_5.jpg" class="img-fluid aboutimg" width="50" height="50">		
	</div>
	
	<div class="col-lg-6 col-md-6 col-12">
  <h2 class="display-6"> Welcome to GFPredict</h2>

<p class="py-2"> Machine learning algorithms can be used to analyze large sets of genomic 
    sequencing data. Supervised learning methods for gene identification requires
    the input of labeled DNA sequences which specify the start and end locations 
    of the gene.</p>


<a href="about_prolegyo.php" class="btn btn-success"> Click to know more </a>

</div> </div>    

</div>

<section class="my-3">
	<div class="py-3">
	<h2 class="text-center"> Search By </h2>
</div>

<div class="container fluid">
	<div class="row">
	<div class="col-lg-3 col-md-3 col-12"> 
	<div class="card" >
  	<img class="card-img-top" src="image4.jpg" alt="Card image" width="900" height="200">
		<div class="card-body">
		 <h4 class="card-title">Function</h4>
		    <p class="card-text">A software system used to maintain relational databases in RDBMS.</p>
		    	<a href="function_prolegyo.php" class="btn btn-primary">Search</a>
  </div>
</div>


</div>

<div class="col-lg-3 col-md-3 col-12"> 
	<div class="card">
  	<img class="card-img-top" src="image4.jpg" alt="Card image"width="900" height="200">
		<div class="card-body">
		 <h4 class="card-title">Gene Name</h4>
		    <p class="card-text">Structural databases are essential tools for all crystallographic work.</p>
		    	<a href="GenePage.php" class="btn btn-primary">Search</a>
  </div>
</div>


</div>
<div class="col-lg-3 col-md-3 col-12"> 
	<div class="card" >
  	<img class="card-img-top" src="image4.jpg" alt="Card image" width="900" height="200">
		<div class="card-body">
		 <h4 class="card-title">Location</h4>
		    <p class="card-text">The functional database is used to support analytics applications.</p>
		    	<a href="location.php" class="btn btn-primary">Search</a>
  </div>
</div>
</div>

<div class="col-lg-3 col-md-3 col-12"> 
  <div class="card" >
    <img class="card-img-top" src="image4.jpg" alt="Card image" width="900" height="200">
    <div class="card-body">
     <h4 class="card-title">TFs</h4>
        <p class="card-text">The functional database is used to support analytics applications.</p>
          <a href="Tfactor.php" class="btn btn-primary">Search</a>
  </div>
</div>
</div>

	 </div>
</div>
</section>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


</body>
</html>