<?php    
    $servername = "sql1.njit.edu";
    $username = "jft8";
    $password = "ForcaBarca14!!";
    $dbname = "jft8";
    $con = mysqli_connect($servername,$username,$password,$dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
        $Collection = $_GET["collection"];
        $Collection_1 = explode(".", $Collection);
        $Name = $Collection_1[0];
        $Password = $Collection_1[1];
        $Name_1 = $Collection_1[2];
        if($Name !== "" && $Password !== "") {
            $query = "SELECT Name From ChatApplication WHERE Name = '$Name' AND Password = '$Password'";
            $Verify = $con->query($query);
            $count = mysqli_num_rows($Verify);
            $query_1 = "SELECT Name From ChatApplication WHERE Name = '$Name_1'";            
            $Verify_1 = $con->query($query_1);
            $count_1 = mysqli_num_rows($Verify_1);
            if($count_1 > 0 && $count > 0) {
                $Text_1 = "SELECT Messages From ChatApplication WHERE Name = '$Name_1'";
                $Search = $con->query($Text_1);
                while ($row = $Search->fetch_row()) {
                    echo "$row[0]";
                }
            }
        }
        else {
            echo "The Password or Username is Incorrect. Please re-enter.";
        }
?>
