<!DOCTYPE html>
<html>
<head>
	<title> Machine Learning in Genomics</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style1.css">
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

<section>
	<article>


<?php
	echo 'Classifier is: ';
	//echo $_GET["Classifiers"];
	//echo '<br><br>';
	//echo 'Function is: ';
	//echo $_GET["function"];
	

	$model = $_POST["Classifiers"];
	echo $model ;
	$Qfunc = $_POST["function"];
	$randNum = rand(10,100);
	
	
	echo "<br>";
	echo 'Function is: ';
	//echo '<br>';
	echo $Qfunc;
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
	
	echo shell_exec("F:\\xampp\htdocs\Proleygo\R-3.6.0\bin\Rscript.exe copy.R $model $Qfunc $randNum 2>&1");
	
	//echo '<br>';
	//echo '<br>';
	//echo '<br>';
	//$myfile = fopen("hello.txt", "r") or die("Unable to open file!");
	//echo fread($myfile,filesize("hello.txt"));
	//fclose($myfile);
	//echo '<br>';
	echo '<br>';
	echo '<br>';
	$source = "plotsOut/ROC-";
	$jpeg = ".jpeg";
	$source = $source.$randNum.$jpeg;
	echo 'Change classifier:';
	echo '<br>';
	echo '<form name = "funcAndClassi" action = "function_prolegyo.php" method = "post" onsubmit = "return validateForm()" >
	
	<input list="Classifiers" placeholder="Search..." name="Classifiers">
		<datalist id="Classifiers">
			<option value=1>GLMnet</option>
			<option value=2>Laaso</option>
			<option value=3>Random Forest</option>
			<option value=4>SVM</option>
			<option value=5>XGBoost</option>
		</datalist>
		<br>
		<input name = "function" value = '.$Qfunc.' readonly>
		<br>
	<input type="submit">
	</form>';				

	//echo $source;
	echo '<h3> ROC for your selection is</h3>';
	echo '<br>';
	
	echo '<br>';
	echo "<img src=$source>";
	
echo '<br>';

echo 'Known set of genes associated with the selected functions are :';
echo '<br>';
$geneFile = "F:\\xampp\\htdocs\\Proleygo\\genesOut\\genes".$randNum.".txt";
$genesToPrint = file($geneFile , FILE_IGNORE_NEW_LINES);
echo readfile($geneFile);

echo '<br>';
echo '<br>';
echo 'Predicted set of genes are:';
echo '<br>';
$topPred = "F:\\xampp\\htdocs\\Proleygo\\topPred\\topPred".$randNum.".txt";
$predToPrint = file($topPred , FILE_IGNORE_NEW_LINES);
echo readfile($topPred);

echo '<br>';
echo '<br>';
echo 'Top TFs are: ';
$topTFs = "F:\\xampp\\htdocs\\Proleygo\\topTFs\\TF".$randNum.".txt";
echo '<br>';
$TFsToPrint = file($topTFs, FILE_IGNORE_NEW_LINES);
echo readfile($topTFs);


?>

<br>

</article>
</section>

<footer> <p class="p-2 bg-dark text-white text-center"> <!Designed by Aditya Mittal and Omkar Chandra> </p> </footer>
</body>
</html>