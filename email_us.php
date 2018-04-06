<?php
$name=$_GET['name'];
$email=$_GET['email'];
$subject=$_GET['subject'];
$comment=$_GET['comments'];
$total=$name + $email + $subject + $comment;
mail("purvam98@gmail.com","Got an contact email from movie mania",$total);

?>