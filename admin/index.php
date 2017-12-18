<?php
// Single line
/* Multi
 line*/


// Error reporting for MAMP '& WAMP'
ini_set('display_errors', 1);
error_reporting(E_ALL);

$text = "Just some text.";
// echo $text;

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Movie Reviews</title>
</head>
<body>
  <style media="screen">
    .colour{
      color:green;
    }
  </style>
  <h1>Best movie review</h1>
  <!-- <p style="color:red"><?php echo $text; ?></p> -->
<!-- <?php echo "<p>".$text."</p>"; ?> -->
<?php echo "<p>{$text}</p>";
include("includes/footer.html");
// include "includes/footer.html";
 ?>


</body>
</html>
