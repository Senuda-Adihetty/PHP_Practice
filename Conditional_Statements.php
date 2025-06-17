 <!DOCTYPE html>
 <html>

 <body>
   <?php

    // The if Statement
    $t = date("H");
    if ($t < "20") {
      echo "Have a good day!";
    }

    echo "<br>";

    //  The if...else Statement
    $t = date("H");
    if ($t < "20") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }

     echo "<br>";

    //  The if...elseif...else Statement
    $t = date("H");
    echo "<p>The hour (of the server) is " . $t;
    echo ", and will give the following message:</p>";
    if ($t < "10") {
      echo "Have a good morning!";
    } elseif ($t < "20") {
      echo "Have a good day!";
    } else {
      echo "Have a good night!";
    }

    echo "<br>";

    //  The switch Statement
    $favcolor = "red";
    switch ($favcolor) {
      case "red":
        echo "Your favorite color is red!";
        break;
      case "blue":
        echo "Your favorite color is blue!";
        break;
      case "green":
        echo "Your favorite color is green!";
        break;
      default:
        echo "Your favorite color is neither red, blue, nor green!";
    }

 echo "<br>";

 


    ?>
 </body>

 </html>