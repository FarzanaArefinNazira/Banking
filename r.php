<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: Loginn.php');
    exit;
}
//include('authenticate.php');
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = '';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$stmt= $con->prepare('SELECT Amount FROM account_detalis WHERE Customer_Id = ?');


$stmt->bind_param('i', $_SESSION['Customer_Id']);
$stmt->execute();
$stmt->bind_result($Amount);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Profile Page</title>
        <link href="loginstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    </head>
    <body class="loggedin">
        <nav class="navtop">
            <div>
                <h1>Your personal information is secure and safe</h1>
                <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="mainhome.php"><i class="fas fa-home"></i>Home</a>
            </div>
        </nav>
        <div class="content">
            <h2></h2>
            <div>
                <p>Your total Balance :</p>
                <table>

                    <tr>
                        <td>Amount:</td>
                    <td><?=$Amount?></td>
                    </tr>
                    
                    
                    
    
                </table>
            </div>
        </div>
        <style>
            .btn-full{

    background-color:green;
    color : white;
    margin-left: 600px;
    border:1.5px solid #FFA500



}
</style>
    </body>
</html>