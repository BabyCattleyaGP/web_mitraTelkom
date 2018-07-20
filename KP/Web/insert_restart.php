<?php
//insert.php
include"config.php";

$name = mysqli_real_escape_string($conn, $_POST["name"]);

 $subject = mysqli_real_escape_string($conn, $_POST["subject"]);
 $comment = mysqli_real_escape_string($conn, $_POST["comment"]);

 $query = "
 INSERT INTO comments (comment_subject, comment_text, name)
 VALUES ('$subject', '$comment','$name')
 ";
 mysqli_query($conn, $query);

?>