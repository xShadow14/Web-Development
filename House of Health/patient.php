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
    <h1>Patient Database</h1>
    <table>
        <thead>
            <th>Patient First Name</th>
            <th>Patient Last Name</th>
            <th>Patient ID</th>
        </thead>
        <tbody>
            <?php
                include "project3.php";
                $result = mysqli_query($con, "SELECT * FROM Patient");
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $row['PatientFirstName'] . "</td>";
                    echo "<td>" . $row['PatientLastName'] . "</td>";
                    echo "<td>" . $row['PatientID'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <button onclick="Home()">Home</button>
</body> 
</html>