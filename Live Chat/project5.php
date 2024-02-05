<?php    
    $servername = "sql1.njit.edu";
    $username = "jft8";
    $password = "ForcaBarca14!!";
    $dbname = "jft8";
    $con = mysqli_connect($servername,$username,$password,$dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }  
    $query = "SELECT Name From ChatApplication";
    $result = mysqli_query($con, $query);
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Live Chat</title>
        <link href="project5.css" rel="stylesheet" type="text/css">
        <script src="project5.js"></script>
    </head>
    <body>
        <div>
            <div>
                <?php
                    echo '<table border="1">';
                    echo '<tr><th>Names</th></tr>';                   
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "</tr>";
                    }    
                    echo "</table>";
                ?>
            </div>
            <form>   
                <div>
                    <label for="name">Enter Name:</label>
                    <input type="text" id="name" name="name">
                    <br>
                    <label for="password">Enter Password:</label>
                    <input type="text" id="password" name="password">
                    <br>
                    <textarea name="input" id="input" onKeyUp="textChecker()" ></textarea>
                    <p id="result"></p>
                </div>   
                <div>
                    <label for="name_1">Enter Name:</label>
                    <input type="text" id="name_1" name="name_1">
                    <br>
                    <textarea name="input_2" id="input_2"></textarea>
                </div>
            </form>   
        </div>
    <body>
</html>
