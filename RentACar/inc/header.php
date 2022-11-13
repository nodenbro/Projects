<?php
include "functions.php";
?>
<!doctype html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    
    <title>Rent A Car</title>

    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">

</head>
<body>
<header>
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="index.php">
                    <h3>Rent A Car</h3>
                </a>
            </div>
            <div class="navbar">
                <ul class="nav-items">
                    <li><a class="active" href="index.php">Home</a></li>
                    <li><a href="automjetet.php">Automjetet</a></li>
                    <li><a href="kategorit.php">Kategorit</a></li>
                    <li><a href="perdoruesit.php">Perdoruesit</a></li>
                    
                    <?php
                    if(!isset($_SESSION['user']))
                    {
                        echo  '<li><a href="login.php">Login</a></li>';
                    }else
                    {
                        echo '<li><a href="rezervimet.php">Rezervimet</a></li>';
                        echo  '<li><a href="logout.php">Logout</a></li>';
                    }
                       
                    ?>
                    
                </ul>
            </div>
        </div>
    </div>
</header>