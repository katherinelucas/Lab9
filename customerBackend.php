<head>
    <link href="style.css"
    rel="stylesheet"
    type="text/css"/>
</head>
<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
  $answer1 = $_POST["question-1-ans"];
  $username = $_POST["username"];
  $password = $_POST["password"];
  $shirt = $_POST["shirt"];
  $scarves = $_POST["scarves"];
  $beanie = $_POST["beanie"];
  $shipCost = 0;

  if($answer1 == "C")
  {
    $shipCost = 5;
  }
  else if($answer1 == "B")
  {
    $shipCost = 50;
  }
  else
  {
    $shipCost = 0;
  }
  echo "<p>Welcome user $username</p>";
  echo "<p>Your password is $password</p>";
  $shirtCost = $shirt*15;
  $scarfCost = $scarves*10;
  $beanieCost = $beanie*5;
  $total = $shirtCost + $scarfCost + $beanieCost + $shipCost;
  echo "<p>Your receipt for your order:</p>";
  echo"You bought $shirt shirt(s) for a total of $shirtCost dollars</br>";
  echo"You bought $scarves scarf/scarves for a total of $scarfCost dollars</br>";
  echo"You bought $beanie beaie(s) for a total of $beanieCost dollars</br>";
  echo"Your shipping cost is $shipCost dollars</br>";
  echo"<p>Your total cost including shipping is $total dollars</p>";
?>
