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
    <h1>Receptionist Database</h1>
    <table>
        <thead>
            <th>Receptionist First Name</th>
            <th>Receptionist Last Name</th>
            <th>Receptionist Password</th>
            <th>Receptionist ID</th>
            <th>Receptionist Phone Number</th>
            <th>Receptionist Email Address</th>
        </thead>
        <tbody>
            <?php
                include "project3.php";
                $result = mysqli_query($con, "SELECT * FROM ReceptionistRecords");
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $row['FirstName'] . "</td>";
                    echo "<td>" . $row['LastName'] . "</td>";
                    echo "<td>" . $row['Password'] . "</td>";
                    echo "<td>" . $row['IDNumber'] . "</td>";
                    echo "<td>" . $row['PhoneNumber'] . "</td>";
                    echo "<td>" . $row['EmailAddress'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <button onclick="Home()">Home</button>
</body> 
</html>