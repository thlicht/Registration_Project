<?php
    $conn = require 'dbConnect.php';
    include 'InformationInsert.php';

    $StudentNumber = $_POST['StudentNum'];
    $query = "SELECT * FROM student_info WHERE StudentNum = '$StudentNumber'";
    if($StudentNumber != "")
    {
        if($name = mysqli_query($conn , $query))
        {
            $na = mysqli_fetch_assoc($name);
            if($StudentNumber == $na['StudentNum'])
            {
                $FirstName = $na['FName'];
                $Date = date_create($na['PresentationDate']);
                $DateTwo = date_format($Date, 'm/d/Y g:iA');
                echo "Hello, $FirstName our records indicated that you have already registered for a presentation on $DateTwo <br>";
                echo "You may change your presentation date, but you will lose your current day.";
            }
            
        }
        else
        {
            echo "fail";
        }
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
        Date Selection Page
    </title>
    
    <header>
        <h1 id = "Title_Header">Date Selection: Step 2/2</h1>
        <link rel = "stylesheet" href = "http://localhost/CIS435P3/CSS/DateSelectionFormatting.css">
        <script src = "http://localhost/CIS435P3/JavaScript/DateSelector.js"></script>
    </header>
            
        <main>
            <h2 id = "info_header">Select the timeslot that you want to register for, then click register</h2>
            <form method = "POST" action = "InformationInsert.php" id ="DateSelector">
                <input type = "radio" name = "Selector" value = "2017-12-03 19:00:00" id = "SlotOne">
                <label for ="SlotOne">12/03/2017 7:00PM <?php echo $SlotOneNum?> Seats avaliable</label><br>
                <input type = "radio" name = "Selector" value = "2017-12-03 20:00:00" id = "SlotTwo">
                <label for = "SlotTwo">12/03/2017 8:00PM <?php echo $SlotTwoNum?> Seats avaliable</label><br>
                <input type = "radio" name = "Selector" value = "2017-12-10 19:00:00" id = "SlotThree">
                <label for = "SlotThree">12/10/2017 7:00PM <?php echo $SlotThreeNum?> Seats avaliable</label><br>
                <input type = "radio" name = "Selector" value = "2017-12-10 20:00:00" id = "SlotFour">
                <label for = "SlotFour">12/10/2017 8:00PM <?php echo $SlotFourNum?> Seats avaliable</label><br>
                <input type = "radio" name = "Selector" value = "2017-12-17 19:00:00" id = "SlotFive">
                <label for = "SlotFive">12/17/2017 7:00PM <?php echo $SlotFiveNum?> Seats avaliable</label><br>
                <input type = "radio" name = "Selector" value = "2017-12-17 20:00:00" id = "SlotSix">
                <label for = "SlotSix">12/17/2017 8:00PM <?php echo $SlotSixNum?> Seats avaliable</label><br>
                <input type = "hidden" name = "StudentID" value = "<?php echo htmlspecialchars($_POST['StudentNum'])?>">
                <input type = "hidden" name = "StudentFname" value = "<?php echo htmlspecialchars($_POST['FName']) ?>">
                <input type = "hidden" name = "StudentLname" value = "<?php echo htmlspecialchars($_POST['LName'])?>" >
                <input type = "hidden" name = "StudentProject" value = "<?php echo htmlspecialchars($_POST['Title'])?>" >
                <input type = "hidden" name = "StudentEmail" value = "<?php echo htmlspecialchars($_POST['mail'])?>" >
                <input type = "hidden" name = "StudentPhone" value = "<?php echo htmlspecialchars($_POST['phone'])?>">
                <input type = "hidden" name = "Present" value = "<?php echo $na['PresentationDate']?>" id = "PresentDate">
                <input type = "submit" id = "Register" value = "Register">
            </form>
            <br>
            <br>
            <br>
            <footer>
                <section id = "Warning">
                    <h2 id = "MasterHeadline"><span>To view a master list of students registered to present, click on the button below:</span></h2>
                        <form action = "http://localhost/CIS435P3/PHP/DisplayStudents.php" method = "POST" id = "Master">
                            <div class = "wrapper"><input type = "submit" id = "DisplayAll" name = "Display" value = "Display Master List"></div>
                            
                        </form>
                </section>
            </footer>
        </main>

    
    
</html>

