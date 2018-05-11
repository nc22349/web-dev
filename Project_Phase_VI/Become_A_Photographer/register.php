<?php
    if (isset($_POST["signup"]))
    {
        $file = fopen("../user_pass.txt", "r");
        $user = $_POST['username'];
        $taken = false;
        while(!feof($file))
        {
            $line = trim(fgets($file));
            $array = explode(':',$line);
            if ($array[0] === "$user")
            {
                $taken = true;
                break;
            }
        }
        if ($taken === true)
        {
            header("Location: index.php");
        }
        else
        {
            $password = $_POST['password'];
            $str = "$user:$password";
            $file = fopen("../user_pass.txt", "a");
            fwrite($file, "$str\n");
            setcookie("success", $user, time() + 86400*1095, "/");
            header("Location: ../");
        }

        extract($_POST);
        if(isset($_POST['language'])){
            $LANGUAGE = implode(", ", $_POST['language']);
        }
        if(isset($_POST['payment'])){
            $PAYMENT = implode(", ", $_POST['payment']);
        }
        $FIRST = $_POST["firstName"];
        $LAST = $_POST["lastName"];
        $PRICERANGE = $_POST["pricerange"];
        $TRANSPORTATION = $_POST["transportation"]
    
    
        $host = "spring-2018.cs.utexas.edu";
        $user = "ncald";
        $pwd = "ra3pNnEmSl";
        $dbs = "cs329e_ncald";
        $port = "3306";

        $connect = mysqli_connect ($host, $user, $pwd, $dbs, $port);

        if (empty($connect)) {
        die("mysqli_connect failed: " . mysqli_connect_error());
        }

        $table = "userinfo";
        $query = mysqli_query($connect, "INSERT INTO $table VALUES ('0','$FIRST','$LAST','$LANGUAGE','$PRICERANGE','$PAYMENT','$TRANSPORTATION')");

        $result->free();
        msqli_close($connect);

    }
?>
