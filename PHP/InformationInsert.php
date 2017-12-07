<?php
    $db = require 'dbConnect.php';
    if(isset($_POST['Present']))
    { //check if the previous page is a resubmission of a current DB entry, in this case we just update the PresentationDate column of the proper entry
        if(htmlspecialchars($_POST['Present']) != "")
        {
            $Snum = $_POST['StudentID'];
            $NewDate = $_POST['Selector'];
            $Update = "UPDATE student_info SET PresentationDate = '$NewDate' WHERE StudentNum = '$Snum'";
            if(mysqli_query($db, $Update))
            {
                $Date2 = date_create($NewDate);
                $FormattedDate = date_format($Date2, 'm/d/Y g:iA');
                $Name = htmlspecialchars($_POST['StudentFname']);
                echo "Congratulations $Name, you have updated your registered presentation date to $FormattedDate";
                return;
            }
            else
            {
                echo "No update";
                return;
            }
        }
    }
    if(isset($_POST['StudentFname']) && isset($_POST['StudentID']) && isset($_POST['StudentLname']) && isset($_POST['StudentProject']) && isset($_POST['StudentEmail']) && isset($_POST['StudentPhone']))
    { //check that there are variables coming into this php, if they are all there then set the variables to then be written to DB
        $SNo = htmlspecialchars($_POST['StudentID']);
        $Fname = htmlspecialchars($_POST['StudentFname']);
        $Lname = htmlspecialchars($_POST['StudentLname']);
        $Project = htmlspecialchars($_POST['StudentProject']);
        $email = htmlspecialchars($_POST['StudentEmail']);
        $phone = htmlspecialchars($_POST['StudentPhone']);
        $Date = $_POST['Selector'];

        $Insert  = "INSERT INTO student_info (StudentNum , FName, LName, Project, Email, Phone, PresentationDate) VALUES ('$SNo', '$Fname', '$Lname', '$Project', '$email', '$phone', '$Date')";
        
        if(mysqli_query($db, $Insert) === TRUE)
        {
            echo "Congratulations $Fname, you have registered to present your project on $Date";
        }
        else
        {
            echo "Error" .$Insert . "<br>" . mysqli_error($db);
        }
    } 

?>