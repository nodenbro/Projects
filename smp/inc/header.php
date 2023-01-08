<?php include 'functions.php';?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>SMP Project</title>
    <link rel="stylesheet" href="SMPStyle.css">
</head>
<body>
    <!-- Header Part-->
    <header class="header">
        <nav class="container">
            <a id="logo" href="home.php">
                <img src="images/smp_logo.png" alt="SMP Logo" title="SMP Logo">
            </a>
            <ul id="navbar">
                <li><a href="home.php">Ballina</a></li>
                <?php
                        
                        if(isset($_SESSION['antari']))
                        {
                            
                            echo '<li><a href="punet.php">Punet</a></li>';

                            if($_SESSION['antari']['roli'] == 1)
                            {
                                echo '<li><a href="antaret.php">Antaret</a></li>';
                                echo '<li><a href="projektet.php">Projektet</a></li>';
                            }

                            echo '<li><a href="logout.php">Logout</a></li>';

                        }
                        else
                        {
                            echo '<li><a href="shtoanetar.php">Regjistrohu</a></li>';
                        }
                        
                        
                    
                ?>
                
            </ul>
        </nav>
        <section id="banner">
            <img src="images/banner1.png" alt="Banner Image" title="Banner Image">
            <h1>Sistemi per menaxhimin e projekteve - SMP</h1>
        </section>
    </header>
    <!-- End of Header Part -->