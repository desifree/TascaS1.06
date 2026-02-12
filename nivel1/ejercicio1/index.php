<?php

session_start();
//recoge datos
$username = $_POST['username'] ?? 'No send';
$courseID = $_POST['courseID'] ?? 'No send';

//guarda en la sesión
$_SESSION['username'] = $username;
$_SESSION['courseID'] = $courseID;

echo "<h2> Information received: </h2>";
echo "Username: $username <br>";
echo "Course id: $courseID <br>";

echo "<h3>Information save: </h3>";
echo "User online: " . $_SESSION['username'] . "<br>";
echo "Course activate: " . $_SESSION['courseID'] . "<br>";

?>