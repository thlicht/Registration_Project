<?php
    $db = require 'dbConnect.php';

    if(isset($_POST['StudentFname']) && isset($_POST['StudentID']) && isset($_POST['StudentLname']) && isset($_POST['StudentProject']) && isset($_POST['StudentEmail']) && isset($_POST['StudentPhone']))
    { //check that there are variables coming into this php, if they are all there then set the variables to then be written to DB
        $SNo = htmlspecialchars($_POST['StudentID']);
        $Fname = htmlspecialchars($_POST['StudentFname']);
        $Lname = htmlspecialchars($_POST['StudentLname']);
        $Project = htmlspecialchars($_POST['StudentProject']);
        $email = htmlspecialchars($_POST['StudentEmail']);
        $phone = htmlspecialchars($_POST['StudentPhone']);

        $Insert  = "INSERT INTO student_info (StudentNum , FName, LName, Project, Email, Phone) VALUES ('$SNo', '$Fname', '$Lname', '$Project', '$email', '$phone')";

        if(mysqli_query($db, $Insert) === TRUE)
        {
            echo "New record";
        }
        else
        {
            echo "Error";
        }
    } 

?>