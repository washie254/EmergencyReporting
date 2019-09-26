<?php

// connect to the database
include('connect-db.php');

// confirm that the 'id' variable has been set
if (isset($_GET['id']) && is_numeric($_GET['id']))
{
// get the 'id' variable from the URL
$id = $_GET['id'];

// delete record from database
if ($stmt = $mysqli->prepare("UPDATE  salonist SET status='APPROVED' WHERE id= ? LIMIT 1"))
{
    $stmt->bind_param("i",$id);
    $stmt->execute();
    $stmt->close();
}

// IF  DELETION FAILS 
else {
    echo "ERROR: could not prepare SQL statement.";
}
$mysqli->close();
// redirect user after delete is successful
header("Location: saloonists.php");
}
else
// if the 'id' variable isn't set, redirect the user
{
header("Location: saloonists.php");
}
?>