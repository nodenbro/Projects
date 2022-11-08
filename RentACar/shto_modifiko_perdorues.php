<?php

include "inc/header.php";
if(isset($_POST['shtoperdorues'])){
    shtoPerdorues($_POST['emri'],$_POST['mbiemri'],$_POST['roli'],
    $_POST['nrpersonal'],$_POST['telefoni'],$_POST['email'],$_POST['fjalekalimi']);
}
if(isset($_POST['modifikoperdorues'])){
    modifikoPerdorues($_POST['perdoruesiid'],$_POST['emri'],$_POST['mbiemri'],$_POST['roli'],
    $_POST['nrpersonal'],$_POST['telefoni'],$_POST['email'],$_POST['fjalekalimi']);
}
if($_GET['pid']){
    $perdoruesiid=$_GET['pid'];
    $perdoruesi=merrPerdoruesId($perdoruesiid);
    $emri=$perdoruesi['emri'];
    $mbiemri=$perdoruesi['mbiemri'];
    $roli=$perdoruesi['roli'];
    $nrpersonal=$perdoruesi['nrpersonal'];
    $telefoni=$perdoruesi['telefoni'];
    $email=$perdoruesi['email'];
    $fjalekalimi=$perdoruesi['fjalekalimi'];
}
?>

<section class="section-shto-modifiko container">
    <div class="image">
        <img src="img/clients.jpg" alt="">
    </div>
    <div class="forma">
        <br>
        <br>
        <h1>Forma per shtimin e Perdorues</h1>
        <br>
        <form method="post">
        <input type="hidden" id="perdoruesiid" name="perdoruesiid" 
                value="<?php if(!empty($perdoruesiid)) echo $perdoruesiid ?>">
            <div class="inputAndLabels">
                <label for="emri">Emri</label> <br>
                <input type="text" id="emri" name="emri" 
                value="<?php if(!empty($emri)) echo $emri ?>">
            </div>
            <div class="inputAndLabels">
                <label for="mbiemri">Mbiemri</label> <br>
                <input type="text" id="mbiemri" name="mbiemri"
                value="<?php if(!empty($mbiemri)) echo $mbiemri ?>">
            </div>
            <div class="inputAndLabels">
                <label for="roli">Roli</label> <br>
                <select id="roli" name="roli">
                    <option value="0">Staf</option>
                    <option value="1">Administrator</option>
                </select>
            </div>
            <div class="inputAndLabels">
                <label for="nrpersonal">Nr personal</label> <br>
                <input type="text" id="nrpersonal" name="nrpersonal"
                value="<?php if(!empty($nrpersonal)) echo $nrpersonal ?>">
            </div>
            <div class="inputAndLabels">
                <label for="telefoni">Nr telefonit</label> <br>
                <input type="text" id="telefoni" name="telefoni"
                value="<?php if(!empty($telefoni)) echo $telefoni ?>">
            </div>
            <div class="inputAndLabels">
                <label for="email">Email</label> <br>
                <input type="email" id="email" name="email"
                value="<?php if(!empty($email)) echo $email ?>">
            </div>
            <div class="inputAndLabels">
                <label for="fjalekalimi">Fjalekalimi</label> <br>
                <input type="password" id="fjalekalimi" name="fjalekalimi"
                value="<?php if(!empty($fjalekalimi)) echo $fjalekalimi ?>">
            </div>
            <div class="inputAndLabels">
                <div class="butonat">
                    <?php
                        if(!isset($_GET['pid'])){
                            echo "<input id='shtoperdorues' type='submit'
                            name='shtoperdorues' class='shtoModifiko' value='Shto Perdorues'>";
                        }else{
                            echo "<input id='modifikoperdorues' type='submit'
                            name='modifikoperdorues' class='shtoModifiko' value='Modifiko Perdorues'>"; 
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'inc/footer.php';?>
