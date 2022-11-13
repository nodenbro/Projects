<?php


    if(isset($_POST['register'])){
        $dbconn = mysqli_connect('localhost', 'root', '', 'rentacar');
        if(!$dbconn)
        {
            die("Lidhja me db nuk u realizua" . mysqli_error($dbconn));
        }

        $emri = $_POST['emri'];
        $mbiemri = $_POST['mbiemri'];
        $email = $_POST['email'];
        $telefoni = $_POST['telefoni'];
        $fjalekalimi = $_POST['fjalekalimi'];
        $nrpersonal = $_POST['nrpersonal'];
        $adresa = $_POST['adresa'];

        $sql = "INSERT INTO perdoruesit(emri, mbiemri, email, telefoni, fjalekalimi, nrpersonal, adresa) VALUES ";
        $sql .= " ('$emri','$mbiemri','$email','$telefoni','$fjalekalimi','$nrpersonal','$adresa')";
        $res = mysqli_query($dbconn, $sql);
        if($res)
        {
            header("Location: index.php");
        }
        else
        {
            "Perdoruesi deshtoi te regjistrohet " . mysqli_error($dbconn);
        }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Rent a Car</title>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body id="loginPage">

<header class="header">
    <div class="logo">
        <a href="index.php">
            <h3>Rent A Car</h3>
        </a>
    </div>
</header>

<div class="loginForma container">
    <div class="formaLogin">
        <h1>Register</h1>
        <form method="post">
            <div>
                <input type="text" name = "emri" placeholder="Emri"> <br>
                <input type="mbiemri" name = "mbiemri" placeholder="Mbiemri">
            </div>
            <div>
                <input type="email" name = "email" placeholder="Email"> <br>
                <input type="text" name = "telefoni" placeholder="Telefoni">
            </div>
            <div>
                <input type="text" name = "nrpersonal" placeholder="Numri personal"> <br>
                <input type="text" name = "adresa" placeholder="Adresa">
            </div>
            <div>
                <input type="text" name = "fjalekalimi" placeholder="Fjalekalimi">
            </div>
            <div class="loginFormFooter">
            <input type="submit" id="login" name="register" value='Regjistrohu'>
            </div>
        </form>
    </div>
</div>

</body>

</html>
