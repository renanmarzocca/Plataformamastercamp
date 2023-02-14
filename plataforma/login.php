<?php
session_start(); 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);

    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index.php?error=User Name is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE user_name='$uname' AND password='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['user_name'] === $uname && $row['password'] === $pass) {

                echo "Logged in!";

                /* Conexoes basicas */

                $_SESSION['id'] = $row['id'];

                $_SESSION['user_name'] = $row['user_name'];

                $_SESSION['name'] = $row['name'];

                $_SESSION['nome_jogo'] = $row['nome_jogo'];

                $_SESSION['id_jogo'] = $row['id_jogo'];

                /* Conexoes Valorant */

                $_SESSION['mira'] = $row['mira'];

                $_SESSION['decisoes'] = $row['decisoes'];

                $_SESSION['movimento'] = $row['movimento'];

                $_SESSION['calll'] = $row['calll'];

                /* Conexoes League of Legends */

                $_SESSION['farm'] = $row['farm'];

                $_SESSION['build'] = $row['build'];

                $_SESSION['skill'] = $row['skill'];

                /* Conexoes Genericas */

                $_SESSION['pi'] = $row['pi'];

                $_SESSION['tp'] = $row['tp'];

                

                header("Location: home.php");

                exit();

            }else{

                header("Location: index.php?error=Incorect User name or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect User name or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}