<?php
    $conn = new mysqli("localhost" , "root", "Easelm93$", "registration");

    if(!$conn)
    {
        die("Connection failed " . mysqli_connect_error());
    }
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
    $First = htmlspecialchars($_POST['FName']);

    if($First == $na['FName'])
    {
        echo $First;
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
        <link rel = "stylesheet" href = "Formatting.css">
        <script src = "JavaScript/scriptOne.js"></script>
        
    </header>
            
        <main>
            <h2>Select the timeslot that you want to register for, then click register</h2>
            <form>
                <input type = "radio" name = "Selector"> <br> 
                <input type = "radio" name = "Selector"> <br>
                <input type = "radio" name = "Selector"> <br>
                <input type = "radio" name = "Selector"> <br>
                <input type = "radio" name = "Selector"> <br>
                <input type = "radio" name = "Selector"> <br>
                <input type = "submit" id = "Register" value = "Register">
            </form>
        </main>

    
    
</html>

