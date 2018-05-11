<?php
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
            header("Location: ./");
        }
        else
        {
	echo"its going into the else statement";
            $password = $_POST['password'];
            $str = "$user:$password";
            $file = fopen("../user_pass.txt", "a");
           // fwrite($file, "$str\n");
           // setcookie("success", $user, time() + 86400*1095, "/");
		echo"cookie has been set";
        if(isset($_POST['languages'])){
		echo"language is set";
            $LANGUAGE = implode(", ", $_POST['languages']);
		print_r($LANGUAGE);
        }
        if(isset($_POST['payments'])){
            $PAYMENT = implode(", ", $_POST['payments']);
		echo"$PAYMENT WORKS FUCK YEAH";
        }
        $FIRST = $_POST["firstName"];
        $LAST = $_POST["lastName"];
        $PRICERANGE = $_POST["pricerange"];
        $TRANSPORTATION = $_POST["transportation"];
    	echo"$FIRST,$LAST,$PRICERANGE,$TRANSPORTATION";
    
        $host = "spring-2018.cs.utexas.edu";
        $user = "ncald";
        $pwd = "ra3pNnEmSl";
        $dbs = "cs329e_ncald";
        $port = "3306";
	echo"$host,$user,$pwd,$dbs,$port";

        $connect = mysql_connect ($host, $user, $pwd, $dbs, $port) or die("fuck you!!!");
	echo"$connect is working";

        if (empty($connect)) {
        die("mysqli_connect failed: " . mysqli_connect_error());
        }

        $table = "userinfo";
        $query = mysqli_query($connect, "INSERT INTO $table VALUES ('0','$FIRST','$LAST','$LANGUAGE','$PRICERANGE','$PAYMENT','$TRANSPORTATION')");
        if($query){
        echo '<script language="javascript">';
        echo 'alert("Displaying New Table")';
        echo '</script>';
        }
        else 
        {
        echo"it failed";
        }

        $result->free();
        msqli_close($connect);

        header("Location: ../");
        }

        
?>
