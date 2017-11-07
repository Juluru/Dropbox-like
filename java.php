<?php
$PATH="C:\Program Files\Java\jdk1.8.0_131\bin";
exec("cd C:\xampp\htdocs\colormoonpro");
echo exec("javac FileServer.java && javac FileClient.java");
echo exec("java FileServer ");
echo exec("java FileClient cat.jpg");
?>
