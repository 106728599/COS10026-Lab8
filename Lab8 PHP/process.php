<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Process</title>
</head>

<body>
    <?php
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'Soo Kian Meng' && $password == '106728599'){
            $_SESSION['user'] = $username;
            header('Location: welcome.php');
        } else {
            echo "Invalid login. <a href='login.php'>Try again</a>";
        }
    ?>
</body>
</html>