<?php 
include 'inc/header.php'; 

if(isset($_POST['shtoAutomjet']))
{
    shtoAutomjete($_POST['emri'], $_POST['kategoriid'], $_POST['nrregjistrimi'], $_POST['vitiprodhimit'], $_POST['cmimi']);
}
if(isset($_POST['modifikoAutomjet']))
{
    modifikoAutomjete($_POST['automjetiid'], $_POST['emri'], $_POST['kategoriid'], $_POST['nrregjistrimi'], $_POST['vitiprodhimit'], $_POST['cmimi']);
}

    if($_GET['autoid'])
{
    $automjetiid = $_GET['autoid'];
    $automjeti = merrAutomjetId($automjetiid);
    $emri = $automjeti['emri'];
    $kategoriid = $automjeti['kategoriid'];
    $pershkrimi = $automjeti['pershkrimi'];
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

        <?php
            if(!isset($_GET['autoid']))
            {
                echo  "<h1>Forma per shtimin e Automjetit</h1>";
            }
            else 
            {
                echo "<h1>Forma per editimin e Automjetit</h1>";
            }
        ?>

        <br>
        <form action="#" method="post">
        <input type="hidden" id="automjetiid" name="automjetiid" 
                value="<?php if(!empty($automjetiid)) echo $automjetiid ?>">  
            <div class="inputAndLabels">
                <label for="emri">Emri</label> <br>
                <input type="text" id="emri" name="emri"
                value="<?php if(!empty($emri)) echo "$emri"?>">
            </div>
            <div class="inputAndLabels">
                <label for="kategoriid">Kategoria</label> <br>
                <select id="kategoriid" name="kategoriid">

                    <?php               
                     if(!isset($_GET['autoid']))
                     {
                        echo "<option value=''>Kategoria</option>";    
                        $kategori = merrKategori();
                        while ($kategorit = mysqli_fetch_assoc($kategori)) 
                        {
                            $kategoriid=$kategorit['kategoriid'];
                            $pershkrimi=$kategorit['pershkrimi'];
                            echo "<option value='{$kategoriid}'>$pershkrimi</option>";
                        }
                     }
                    else
                    {
                        echo "<option value='{$kategoriid}'>$pershkrimi</option>";
                        $kategorit = merrKategori();
                        while ($kategoria = mysqli_fetch_assoc($kategorit)) 
                        {
                            $kid = $kategoria['kategoriid'];
                            $persh = $kategoria['pershkrimi'];
                            if ($kategoriid != $kid) 
                            {
                                echo "<option value='{$kid}'>$persh</option>";
                            }
                        }
                    }
                    ?>
                </select>
            </div>
            <div class="inputAndLabels">
                <label for="nrRegjistrimit">Numri i regjistrimit</label> <br>
                <input type="text" id="nrregjistrimi" name="nrregjistrimi"
                value="<?php if(!empty($nrregjistrimi)) echo "$nrregjistrimi" ?>">
            </div>
            <div class="inputAndLabels">
                <label for="pershkrimi">Viti i Prodhimit</label> <br>
                <input type="text" id="vitiprodhimit" name="vitiprodhimit"
                value="<?php if(!empty($vitiprodhimit)) echo "$vitiprodhimit" ?>">
            </div>
            <div class="inputAndLabels">
                <label for="kostoja">Kostoja</label> <br>
                <input type="text" id="cmimi" name="cmimi"
                value="<?php if(!empty($cmimi)) echo "$cmimi" ?>">
            </div>
            <div class="inputAndLabels">
                <div class="butonat">
                    <?php
                        if(!isset($_GET['autoid'])){
                            echo "<input id='shtokategori' type='submit'
                            name='shtoAutomjet' class='shtoModifiko' value='Shto Automjetin'>";
                        }
                        else{
                            echo "<input id='modifikokategori' type='submit'
                            name='modifikoAutomjet' class='shtoModifiko' value='Modifiko Automjetin'>"; 
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
