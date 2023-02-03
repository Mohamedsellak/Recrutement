<?php
    include_once 'Methods/Methods.php';

    if(isset($_POST['Btnlogin'])){

        $login = $_POST['login'];
        $pass  = $_POST['pass'];
        echo $login." ".$pass;

        $res = Login($login,$pass);
        if ($res != -1) {

            // store the data in the session 
            session_start();
            $_SESSION['login'] = $login;
            $_SESSION['pass'] = $pass;
            $_SESSION['type_user'] = $res->type_user;

            $res->type_user == "candidate" 
            ?header('location: Candidate/index.php')// home condidate
            :header('location: Recrutement/index.php');// home recruteur
            
        }else {
            echo 'nope';
        }

        
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>login</h1>
    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <label>login<input type="text" name="login"></label><br/>
        <label>pass<input type="text" name="pass"></label><br/>
        <input type="submit" value="login" name="Btnlogin">
    </form>
</body>
</html>