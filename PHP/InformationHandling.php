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
    
    $SlotOneQuery = "SELECT * FROM student_info WHERE PresentationDate = '2017-12-03 19:00:00'";
    $SlotOneResult = mysqli_query($conn, $SlotOneQuery);
    $SlotOneNum = 6 - mysqli_num_rows($SlotOneResult);

    $SlotTwoQuery = "SELECT * FROM student_info WHERE PresentationDate = '2017-12-03 20:00:00'";
    $SlotTwoResult = mysqli_query($conn, $SlotTwoQuery);
    $SlotTwoNum = 6 - mysqli_num_rows($SlotTwoResult);

    $SlotThreeQuery = "SELECT * FROM student_info WHERE PresentationDate = '2017-12-10 19:00:00'";
    $SlotThreeResult = mysqli_query($conn, $SlotThreeQuery);
    $SlotThreeNum = 6 - mysqli_num_rows($SlotThreeResult);

    $SlotFourQuery = "SELECT * FROM student_info WHERE PresentationDate = '2017-12-10 20:00:00'";
    $SlotFourResult = mysqli_query($conn, $SlotFourQuery);
    $SlotFourNum = 6 - mysqli_num_rows($SlotFourResult);

    $SlotFiveQuery = "SELECT * FROM student_info WHERE PresentationDate = '2017-12-17 19:00:00'";
    $SlotFiveResult = mysqli_query($conn, $SlotFiveQuery);
    $SlotFiveNum = 6 - mysqli_num_rows($SlotFiveResult);

    $SlotSixQuery = "SELECT * FROM student_info WHERE PresentationDate = '2017-12-17 20:00:00'";
    $SlotSixResult = mysqli_query($conn, $SlotSixQuery);
    $SlotSixNum = 6 - mysqli_num_rows($SlotSixResult);
?>

<!DOCTYPE html>
<html lang = "en">
    
    <meta charset="UTF-8">
    <title>
        Presentation Registration Page
    </title>
    
    <header>
        <h1 id = "Title_Header">Presentation Registration</h1>
        <link rel = "stylesheet" href = "http://localhost/CIS435P3/CSS/Formatting.css">
        <script src = "http://localhost/CIS435P3/JavaScript/DateSelector.js"></script>
    </header>
            
        <main>
            <h2>Select the timeslot that you want to register for, then click register</h2>
            <form method = "POST" action = "InformationInsert.php">
                <input type = "radio" name = "Selector" value = "2017-12-03 19:00:00" id = "SlotOne">
                <label for ="SlotOne">12/03/2017 7:00pm <?php echo $SlotOneNum?> Seats avaliable</label><br>
                <input type = "radio" name = "Selector" value = "2017-12-03 20:00:00" id = "SlotTwo">
                <label for = "SlotTwo">12/03/2017 8:00pm <?php echo $SlotTwoNum?> Seats avaliable</label><br>
                <input type = "radio" name = "Selector" value = "2017-12-10 19:00:00" id = "SlotThree">
                <label for = "SlotThree">12/10/2017 7:00pm <?php echo $SlotThreeNum?> Seats avaliable</label><br>
                <input type = "radio" name = "Selector" value = "2017-12-10 20:00:00" id = "SlotFour">
                <label for = "SlotFour">12/10/2017 8:00pm <?php echo $SlotFourNum?> Seats avaliable</label><br>
                <input type = "radio" name = "Selector" value = "2017-12-17 19:00:00" id = "SlotFive">
                <label for = "SlotFive">12/17/2017 7:00pm <?php echo $SlotFiveNum?> Seats avaliable</label><br>
                <input type = "radio" name = "Selector" value = "2017-12-17 20:00:00" id = "SlotSix">
                <label for = "SlotSix">12/17/2017 8:00pm <?php echo $SlotSixNum?> Seats avaliable</label><br>
                <input type = "button" value = "Test" id = "Test" onclick = "HighlightLowCount()">
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

