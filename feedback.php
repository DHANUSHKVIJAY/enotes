<!DOCTYPE html>

<?php
$user='root';
$password='';

$database="enotes";

$servername='localhost:3306';
$mysqli=new mysqli($servername,$user,$password,$database);

if($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
if(isset($_POST['submit'])) {
    if(empty($_POST['email']) || empty($_POST['feedback']))
    {
        echo '<script>alert("Please fill out all the fields")</script>';
    }else{
        $email=$_POST['email'];
        $feedback=$_POST['feedback'];
        
        $sql="INSERT INTO feedback(email,feedback) VALUES('$email','$feedback')";
        
        if($mysqli->query($sql)===TRUE) {
            echo '<script>alert("Thanks for your valuable feedback. Feedback sent successfully!!")</script>';
            header("location:about.php");
        }else{
            echo '<script>alert("Sorry. There was and error while posting your feedback")</script>';
        }
    }
}
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>NotoP</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">

  </head>

  <body>
     
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
          <a class="navbar-brand" href="index.php"><img src="images/notoplogo.png" alt="" width=70px" height="70px"/></a>
          <a class="navbar-brand" href="index.php"><center>NotoP<br><h6>Notes at one place</h6></center></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Page Content -->
    <div class="container">
   

	<style>
		form{
			border:solid 5pt black;
			padding:20pt;
			background-color:blue;
		}
		label{
			background-color:black;
			border:2pt black;
			color:blue;

		}
		input:hover{
			transition:750ms;
			background-color:lightblue;
		}
	</style>
</head>
<body>
	<form action="" method="POST" >		
            <label>E-MAIL:</label>
            <input type="email" name="email" id="email"></input><br><br><br>
            <label>FEEDBACK: </label>
	    <input type="text" name="feedback" id="feedback"></input><br><br><br>
            <input type="submit" name="submit" value="SUBMIT feedback"></input>
	</form>

      <!-- Page Features -->
      <center>
      <div class="row text-center">

        
    </div>
    <!-- /.container -->

    
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>