<?php    
    $servername = "sql1.njit.edu";
    $username = "jft8";
    $password = "ForcaBarca14!!";
    $dbname = "jft8";
    $con = mysqli_connect($servername,$username,$password,$dbname);
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
        $Collection_1 = $_GET["collection"];
        $Collection_3 = explode(".", $Collection_1);
        $Name = $Collection_3[1];
        $Password = $Collection_3[2];
        $Message = $Collection_3[0];
        $Name_3 = $Collection_3[3]; 
        if($Name !== "" && $Password !== "") {
            $query = "SELECT Name From ChatApplication WHERE Name = '$Name' AND Password = '$Password'";
            $Verify = $con->query($query);
            $count = mysqli_num_rows($Verify);
            if($count > 0) {
                echo "The Account Was Found. YAY!!";
                $query_3 = "UPDATE ChatApplication SET Messages = '$Message' WHERE Password = '$Password'";
                $result_3 = $con->query($query_3);
            }
        }
        else {
            echo "The Password or Username is Incorrect. Please re-enter.";
        }
?>