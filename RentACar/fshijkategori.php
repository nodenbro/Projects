<?php 
include 'inc/header.php'; 

if(isset($_POST['fshijKategori']))
{
    fshijKategori($_POST['kategoriid']);
}

if($_GET['kid'])
{
    $kategoriid = $_GET['kid'];
    $katefori = merrKategoriId($kategoriid);
    $emri = $katefori['emri'];
    $pershkrimi = $katefori['pershkrimi'];
}
?>

<section class="section-shto-modifiko container">
    <div class="image">
        <img src="img/car8.jpg" alt="">
    </div>
    <div class="forma">
        <br>
        <br>

        <h1>Forma per fshirjen e Kategoris</h1>

        <br>
        <form action="#" method="post">
        <input type="hidden" id="kategoriid" name="kategoriid" 
                value="<?php if(!empty($kategoriid)) echo $kategoriid ?>">  
            <div class="inputAndLabels">
                <label for="emri">Emri</label> <br>
                <input type="text" id="emri" name="emri" disabled
                value="<?php if(!empty($emri)) echo "$emri"?>">
            </div>
            <div class="inputAndLabels">
                <label for="pershkrimi">Pershkrimi</label> <br>
                <input type="text" id="pershkrimi" name="pershkrimi" disabled
                value="<?php if(!empty($pershkrimi)) echo "$pershkrimi" ?>">
            </div>
            <div class="inputAndLabels">
                <div class="butonat">
                    <?php

                            echo "<input id='fshijKategori' type='submit'
                            name='fshijKategori' class='shtoModifiko' value='Fshije Kategorin'>"; 
                        
                    ?>
                </div>
            </div>
        </form>
    </div>
</section>

<?php include 'inc/footer.php'; ?>
