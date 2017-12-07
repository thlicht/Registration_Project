<?php
    $db = require 'dbConnect.php';
    $query = "SELECT * FROM student_info ORDER BY PresentationDate ASC";
    $info = mysqli_query($db, $query);

?>

<!DOCTYPE html>
<html lang = "en">

    <meta charset = "UTF-8">
    <title>Student Masterlist </title>
    <header> 
        <link rel = "stylesheet" href = "http://localhost/CIS435P3/CSS/DisplayAll.css">
    </header>
        
        <main>
            <table>
                <tr>
                    <th>Student #</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Project Title</th>
                    <th>Email</th>
                    <th>Phone #</th>
                    <td><strong>Presentation Date</strong></th>
                </tr>
                <?php
                    while($row = mysqli_fetch_assoc($info))
                    {
                        $Date2 = date_create($row['PresentationDate']);
                        $FormattedDate = date_format($Date2, 'm/d/Y g:iA');
                        echo "<tr>
                        <td>{$row['StudentNum']}</td>
                        <td>{$row['FName']}</td>
                        <td>{$row['LName']}</td>
                        <td>{$row['Project']}</td>
                        <td>{$row['Email']}</td>
                        <td>{$row['Phone']}</td>
                        <td>{$FormattedDate}</td>
                            </tr>\n";
                    } 
                ?>
            </table>
        </main>

    </html>
