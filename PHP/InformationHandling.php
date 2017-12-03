<?php
    $conn = require 'dbConnect.php';
    include 'InformationInsert.php';

    $query = "SELECT * FROM student_info";
    if($name = mysqli_query($conn , $query))
    {
        $na = mysqli_fetch_assoc($name);
        $Fname = $na['StudentNum'];
    }
    else
    {
        echo "fail";
    }
    
    
?>

<!DOCTYPE html>
<html lang = "en">
    
    <meta charset="UTF-8">
    <title>
        Presentation Registration Page
    </title>
    
    <header>
        <h1 id = "Title_Header">Presentation Registration</h1>
        <link rel = "stylesheet" href = "CSS/Formatting.css">
        <script src = "JavaScript/scriptOne.js"></script>
        
    </header>
            
        <main>
            <h2>Select the timeslot that you want to register for, then click register</h2>
            <form method = "POST" action = "InformationInsert.php">
                <input type = "radio" name = "Selector"> <br> 
                <input type = "radio" name = "Selector"> <br>
                <input type = "radio" name = "Selector"> <br>
                <input type = "radio" name = "Selector"> <br>
                <input type = "radio" name = "Selector"> <br>
                <input type = "radio" name = "Selector"> <br>
                <input type = "hidden" name = "StudentID" value = "<?php echo htmlspecialchars($_POST['StudentNum'])?>">
                <input type = "hidden" name = "StudentFname" value = "<?php echo htmlspecialchars($_POST['FName']) ?>">
                <input type = "hidden" name = "StudentLname" value = "<?php echo htmlspecialchars($_POST['LName'])?>" >
                <input type = "hidden" name = "StudentProject" value = "<?php echo htmlspecialchars($_POST['Title'])?>" >
                <input type = "hidden" name = "StudentEmail" value = "<?php echo htmlspecialchars($_POST['mail'])?>" >
                <input type = "hidden" name = "StudentPhone" value = "<?php echo htmlspecialchars($_POST['phone'])?>">
                <input type = "submit" id = "Register" value = "Register">
            </form>
        </main>

    
    
</html>

