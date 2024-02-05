<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Reception Information</title>
    <link rel="stylesheet" href="project3.css">
    <script>
        function Home() {
            window.location.href = "project3.html";
        }
    </script>
</head>
<body>
    <h1>Medical History</h1>
    <table>
        <thead>
            <th>DOB</th>
            <th>Age</th>
            <th>Patient Address</th>
            <th>Shots Recieved</th>
            <th>Illnesses</th>
        </thead>
        <tbody>
            <?php
                include "project3.php";
                $result = mysqli_query($con, "SELECT * FROM MedicalRecord");
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $row['DateOfBirth'] . "</td>";
                    echo "<td>" . $row['Age'] . "</td>";
                    echo "<td>" . $row["PatientAddress"] . "</td>";
                    echo "<td>" . $row['PatientPhoneNumber'] . "</td>";
                    echo "<td>" . $row['ShotsRecvied'] . "</td>";
                    echo "<td>" . $row['Illnesses'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <button onclick="Home()">Home</button>
</body> 
</html>