<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "lab04");
// Check connection
if($link === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Escape user inputs for security
$First_Name = mysqli_real_escape_string($link, $_REQUEST['First_Name']);
$Last_Name = mysqli_real_escape_string($link, $_REQUEST['Last_Name']);
$cgpa = mysqli_real_escape_string($link, $_REQUEST['cgpa']);
$semester = mysqli_real_escape_string($link, $_REQUEST['semester']);
// attempt insert query execution
$sql = "INSERT INTO student (First_Name, Last_Name, cgpa, semester) VALUES ('$First_Name',
'$Last_Name', '$cgpa','$semester')";
if(mysqli_query($link, $sql)){
echo "Records added successfully.";
} else{
echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// close connection
mysqli_close($link);
?>