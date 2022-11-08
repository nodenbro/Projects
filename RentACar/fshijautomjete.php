<?php 
include 'inc/header.php'; 

if(isset($_POST['fshijAutomjete']))
{
    fshijAutomjete($_POST['automjetiid']);
}

if($_GET['autoid'])
{
    $automjetiid = $_GET['autoid'];
    $automjeti = merrAutomjetId($automjetiid);
    $emri = $automjeti['emri'];
    $kategoria = $automjeti['kategoria'];
    $nrregjistrimi = $automjeti['nrregjistrimi'];
    $vitiprodhimit = $automjeti['vitiprodhimit'];
    $cmimi = $automjeti['cmimi'];
}
?>

<section class="section-shto-modifiko container">
    <div class="image">
        <img src="img/car8.jpg" alt="">
    </div>
    <div class="forma">
        <br>
        <br>

        <h1>Forma per fshirjen e Automjetit</h1>

        <br>
        <form action="#" method="post">
        <input type="hidden" id="automjetiid" name="automjetiid" 
                value="<?php if(!empty($automjetiid)) echo $automjetiid ?>">  
            <div class="inputAndLabels">
                <label for="emri">Emri</label> <br>
                <input type="text" id="emri" name="emri" disabled
                value="<?php if(!empty($emri)) echo "$emri"?>">
            </div>
            <div class="inputAndLabels">
                <label for="kategoria">Kategoria</label> <br>
                <select id="kategoria" name="kategoria" disabled>
                    <?php
                        echo "<option value='{$automjetiid}'>$kategoria</option>";
                        $automjetet = merrAutomjetet();
                        while ($automjeti = mysqli_fetch_assoc($automjetet)) 
                        {
                            $aid = $automjeti['automjetiid'];
                            $kat = $automjeti['kategoria'];
                            if ($aid != $automjetiid) 
                            {
                                echo "<option value='{$aid}'>$kat</option>";
                            }
                        }
                    
                    ?>
                </select>
            </div>
            <div class="inputAndLabels">
                <label for="nrRegjistrimit">Numri i regjistrimit</label> <br>
                <input type="text" id="nrregjistrimi" name="nrregjistrimi" disabled
                value="<?php if(!empty($nrregjistrimi)) echo "$nrregjistrimi" ?>">
            </div>
            <div class="inputAndLabels">
                <label for="pershkrimi">Viti i Prodhimit</label> <br>
                <input type="text" id="vitiprodhimit" name="vitiprodhimit" disabled
                value="<?php if(!empty($vitiprodhimit)) echo "$vitiprodhimit" ?>">
            </div>
            <div class="inputAndLabels">
                <label for="kostoja">Kostoja</label> <br>
                <input type="text" id="cmimi" name="cmimi" disabled
                value="<?php if(!empty($cmimi)) echo "$cmimi" ?>">
            </div>
            <div class="inputAndLabels">
                <div class="butonat">
                    <?php

                            echo "<input id='fshijAutomjete' type='submit'
                            name='fshijAutomjete' class='shtoModifiko' value='Fshije Automjetin'>"; 
                        
                    ?>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
