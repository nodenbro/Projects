<?php 
include 'inc/header.php'; 

if(isset($_POST['fshijPerdorues']))
{
    fshijPerdorues($_POST['perdoruesiid']);
}

if($_GET['pid'])
{
    $perdoruesiid = $_GET['pid'];
    $perdoruesi = merrPerdoruesId($perdoruesiid);
    $emri = $perdoruesi['emri'];
    $mbiemri = $perdoruesi['mbiemri'];
    $nrpersonal = $perdoruesi['nrpersonal'];
    $roli = $perdoruesi['roli'];
    $telefoni = $perdoruesi['telefoni'];
    $email = $perdoruesi['email'];
    $fjalekalimi = $perdoruesi['fjalekalimi'];
}
?>

<section class="section-shto-modifiko container">
    <div class="image">
        <img src="img/car8.jpg" alt="">
    </div>
    <div class="forma">
        <br>
        <br>

        <h1>Forma per fshirjen e Perdoruesit</h1>

        <br>
        <form action="#" method="post">
        <input type="hidden" id="perdoruesiid" name="perdoruesiid" 
                value="<?php if(!empty($perdoruesiid)) echo $perdoruesiid ?>">  
            <div class="inputAndLabels">
                <label for="emri">Emri</label> <br>
                <input type="text" id="emri" name="emri" disabled
                value="<?php if(!empty($emri)) echo "$emri"?>">
            </div>
            <div class="inputAndLabels">
                <label for="mbiemri">Mbiemri</label> <br>
                <input type="text" id="mbiemri" name="mbiemri" disabled
                value="<?php if(!empty($mbiemri)) echo "$mbiemri" ?>">
            </div>
            <div class="inputAndLabels">
                <label for="roli">Roli</label> <br>
                <select id="roli" name="roli" disabled>
                    <option value="0">Staf</option>
                    <option value="1">Administrator</option>
                </select>
            </div>
            <div class="inputAndLabels">
                <label for="nrpersonal">Nr personal</label> <br>
                <input type="text" id="nrpersonal" name="nrpersonal" disabled
                value="<?php if(!empty($nrpersonal)) echo $nrpersonal ?>">
            </div>
            <div class="inputAndLabels">
                <label for="telefoni">Telefoni</label> <br>
                <input type="text" id="telefoni" name="telefoni" disabled
                value="<?php if(!empty($telefoni)) echo "$telefoni" ?>">
            </div>
            <div class="inputAndLabels">
                <label for="email">Email</label> <br>
                <input type="text" id="email" name="email" disabled
                value="<?php if(!empty($email)) echo "$email" ?>">
            </div>
            <div class="inputAndLabels">
                <label for="fjalekalimi">Fjalekalimi</label> <br>
                <input type="password" id="fjalekalimi" name="fjalekalimi" disabled
                value="<?php if(!empty($fjalekalimi)) echo "$fjalekalimi" ?>">
            </div>
            <div class="inputAndLabels">
                <div class="butonat">
                    <?php

                            echo "<input id='fshijPerdorues' type='submit'
                            name='fshijPerdorues' class='shtoModifiko' value='Fshije Automjetin'>"; 
                        
                    ?>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
