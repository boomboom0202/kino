<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

    <?php
    $connection=mysqli_connect('bzb1llxryyryfate9vhn-mysql.services.clever-cloud.com','uxnqhbitycyfleu2','qSmf9qur7TjD622zt91v','bzb1llxryyryfate9vhn');
    $login =$connection->real_escape_string($_POST["login"]);
    $password =$connection->real_escape_string($_POST["password"]);
    $sql="Select * From customer where login= '$login' and password='$password'";
        if($result = $connection->query($sql)){
        foreach($result as $row){
                $log= $row["login"];
                $pass=$row["password"] ;
        }
        $result->free();
    }
    
 if(!empty($log)&&!empty($pass)){
        header ('Location: main.php');  // перенаправление на нужную страницу
        exit();
    }else{
        header ('Location: auth.php');  // перенаправление на нужную страницу
        exit();
    }
    mysqli_close($connection);
    ?>
</body>
</html>