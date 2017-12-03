<?php
    $db = require 'dbConnect.php';
    $query = "SELECT * FROM student_info";
    $info = mysqli_query($db, $query);

?>

<!DOCTYPE html>
<html lang = "en">

    <meta charset = "UTF-8">
    <title>Student Masterlist </title>
    <header> 
        <link rel = "stylesheet" href = "../CSS/DisplayAll.css">
    </header>
        
        <main>
            <table>
                <tr>
                    <th>Student Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Project Title</th>
                    <th>Email</th>
                    <th>Phone #</th>
                </tr>
                <?php
                    while($row = mysqli_fetch_assoc($info))
                    {
                        echo "<tr>
                        <td>{$row['StudentNum']}</td>
                        <td>{$row['FName']}</td>
                        <td>{$row['LName']}</td>
                        <td>{$row['Project']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['Phone']}</td>
                            </tr>\n";
                    } 
                ?>
            </table>
        </main>

    </html>
