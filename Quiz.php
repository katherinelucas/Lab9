<?php
  $answer1 = $_POST["question-1-ans"];
  $answer2 = $_POST["question-2-ans"];
  $answer3 = $_POST["question-3-ans"];
  $answer4 = $_POST["question-4-ans"];
  $answer5 = $_POST["question-5-ans"];

  $totalCor = 0;
  if($answer1 == "A")
  {
    $totalCor++;
    echo "Question 1: A cat says...<br>";
    echo "You answered: MEOW<br>";
    echo "Correct answer: MEOW<br>";
  }
  else if($answer1 == "B")
  {
    echo "Question 1: A cat says...<br>";
    echo "You answered: WOOF<br>";
    echo "Correct answer: MEOW<br>";
  }
  else if($answer1 == "C")
  {
    echo "Question 1: A cat says...<br>";
    echo "You answered: MOO<br>";
    echo "Correct answer: MEOW<br>";
  }
  else if($answer1 == "D")
  {
    echo "Question 1: A cat says...<br>";
    echo "You answered: CHIRP<br>";
    echo "Correct answer: MEOW<br>";
  }


  if($answer2 == "B")
  {
    $totalCor++;
    echo "Question 2: A cat has...<br>";
    echo "You answered: whiskers<br>";
    echo "Correct answer: whiskers<br>";
  }
  else if($answer2 == "A")
  {
    echo "Question 2: A cat has...<br>";
    echo "You answered: hooves<br>";
    echo "Correct answer: whiskers<br>";
  }
  else if($answer2 == "C")
  {
    echo "Question 2: A cat has...<br>";
    echo "You answered: wings<br>";
    echo "Correct answer: whiskers<br>";
  }
  else if($answer2 == "D")
  {
    echo "Question 2: A cat has...<br>";
    echo "You answered: fins<br>";
    echo "Correct answer: whiskers<br>";
  }

  if($answer3 == "C")
  {
    $totalCor++;
    echo "Question 3: Can cats see in the dark?<br>";
    echo "You answered: Yes<br>";
    echo "Correct answer: Yes<br>";
  }
  else if($answer3 == "A")
  {
    echo "<div id='results'>Question 3: Can cats see in the dark?<br>";
    echo "<div id='results'>You answered: No<br>";
    echo "<div id='results'>Correct answer: Yes<br>";
  }
  else if($answer3 == "B")
  {
    echo "<div id='results'>Question 3: Can cats see in the dark?<br>";
    echo "<div id='results'>You answered: If they have superpowers<br>";
    echo "<div id='results'>Correct answer: Yes<br>";
  }
  else if($answer3 == "D")
  {
    echo "<div id='results'>Question 3: Can cats see in the dark?<br>";
    echo "<div id='results'>You answered: What is a cat?<br>";
    echo "<div id='results'>Correct answer: Yes<br>";
  }

  if($answer4 == "D")
  {
    $totalCor++;
    echo "Question 4: Can cats drive?<br>";
    echo "You answered: No<br>";
    echo "Correct answer: No<br>";
  }
  else if($answer4 == "A")
  {
    echo "Question 4: Can cats drive?<br>";
    echo "You answered: Absolutely<br>";
    echo "Correct answer: No<br>";
  }
  else if($answer4 == "B")
  {
    echo "Question 4: Can cats drive?<br>";
    echo "You answered: Yes, one cat on the wheel on cat on the pedals<br>";
    echo "Correct answer: No<br>";
  }
  else if($answer4 == "C")
  {
    echo "Question 4: Can cats drive?<br>";
    echo "You answered: Yes, one cat on the wheel on cat on the pedals<br>";
    echo "Correct answer: Cats can only fly planes<br>";
  }

  if($answer5 == "A")
  {
    $totalCor++;
    echo "Question 5: What do pet cats eat?<br>";
    echo "You answered: Cat food<br>";
    echo "Correct answer: Cat food<br>";
  }
  else if($answer5 == "B")
  {
    echo "Question 5: What do pet cats eat?<br>";
    echo "You answered: Frogs<br>";
    echo "Correct answer: Cat food<br>";
  }
  else if($answer5 == "C")
  {
    echo "Question 5: What do pet cats eat?<br>";
    echo "You answered: Rain clouds<br>";
    echo "Correct answer: Cat food<br>";
  }
  else if($answer5 == "D")
  {
    echo "Question 5: What do pet cats eat?<br>";
    echo "You answered: Rain clouds<br>";
    echo "Correct answer: Saddness<br>";
  }

  echo "<div id='results'>You got $totalCor correct out of 5</div>";
  $result = ($totalCor/5)*100;
  echo "<div id='results'>You got $result percent correct</div>";
?>
