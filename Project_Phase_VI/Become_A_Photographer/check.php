<?php

    $host = "spring-2018.cs.utexas.edu";
    $user = "ncald";
    $pwd = "ra3pNnEmSl"; // Note: PW is clear text!!
    $dbs = "cs329e_ncald";
    $port = "3306";
    
    $taken = false;
    $connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);
    $result = mysqli_query($connect, "select * from credentials where email = '{$_POST['username']}'");
    
    if ($result) {
    $taken = true;
    }

    if ($taken === true)
    {
        echo "Taken";
    }
?>
