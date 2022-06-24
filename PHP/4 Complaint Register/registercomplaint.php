<?php
include_once 'db.inc.php';
$title = $_POST['title'];
$description = $_POST['complaint'];

$sql = "INSERT INTO complaint (title, complaint) VALUES ('$title','$description')";
mysqli_query($conn, $sql);

header('Location: showid.php');
