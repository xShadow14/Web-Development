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
    <h1>Patient Appointment Database</h1>
    <table>
        <thead>
            <th>Appointment Date</th>
            <th>Appointment Type</th>
            <th>Procedure Date</th>
            <th>Procedure Type</th>
            <th>Doctor Name</th>
        </thead>
        <tbody>
            <?php
                include "project3.php";
                $result = mysqli_query($con, "SELECT * FROM PatientAppointments");
                while ($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<td>" . $row['AppointmentDate'] . "</td>";
                    echo "<td>" . $row['AppointmentType'] . "</td>";
                    echo "<td>" . $row['ProcedureDate'] . "</td>";
                    echo "<td>" . $row['ProcedureType'] . "</td>";
                    echo "<td>" . $row['DoctorName'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <button onclick="Home()">Home</button>
</body> 
</html>