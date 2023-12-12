<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        #backroungd {
            text-align: center;
            margin: 50px auto;
            padding: 20px;
            width: 300px;
            background-color: rgb(83, 65, 241);
            border-radius: 10px;
        }

        form {
            margin-top: 20px;
        }

        h1 {
            color: #ffff;
        }

        hr {
            border: 1px solid #ccc;
        }

        .radio {
            background-color: #000;
        }

        .submit {
            background-color: rgb(255, 208, 0);
            color: #000;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        b {
            display: block;
            margin-top: 20px;
            color: #ffff;
        }

        a {
            text-decoration: none;
            color: #000;
        }
    </style>
</head>
<body>
    <div id="backroungd">
        <form method="post">
            <h1>Join AS User or Artist: </h1><hr>
            
            <input type="radio" class="radio" name="UserRole" value="User">User
            <input type="radio" class="radio" name="UserRole" value="Artist">Artist <br><br>
            <input type="submit" class="submit" name="Submit" value="Submit" ><br><br>

            <b>Already have an account <a href='../views/Login.php'>Login</a> </b><hr>
        </form>
    </div>

    <?php

    if (isset($_REQUEST['Submit'])) 
    {
        if (isset($_POST['UserRole'])) 
        {
            $selectedRole = $_POST['UserRole'];
        
            if ($selectedRole === 'User') {
                header('Location:../views/userreg.php');
                exit;
            } 
            elseif ($selectedRole === 'Artist') {
                header('Location:../views/artistreg.php');
                exit;
            }
        }
    }
    ?>

</body>
</html>

<?php

include_once('../views/Footer.html');

?>
