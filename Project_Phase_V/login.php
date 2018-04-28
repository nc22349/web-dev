<?php
    if(isset($_POST['login']))
    {
        echo "IT'S SET!!!";
        /*$file = fopen("./user_pass.txt", "r"); 
        $user = $_POST['user'];
        $password = $_POST['password'];
        $match = false;
        while (!feof($file))
        {
            $line = trim(fgets($file));
            if ($line === "$user:$password")
            {
            $match = true;
            setcookie("success", $value, time() + 86400*1095, "/");
            break;
            }   
        }*/
    }

        /*if($match === false)
        {
            echo '<script language="javascript">';
            echo 'alert("Invalid username or password. Please try again.")';
            echo '</script>';
        }
        header("Location: ./");*/
?>