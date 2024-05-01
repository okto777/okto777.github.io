<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $comment = $_POST["comment"];
  
  // Save the comment to a file or database
  // Example: saving to a file
  $file = 'comments.txt';
  $current = file_get_contents($file);
  $current .= "Name: $name\nComment: $comment\n\n";
  file_put_contents($file, $current);
  
  echo "Thank you for your comment!";
}
?>