<?php
include 'inc/header.php';
if(isset($_POST['shtoKategori']))
{
    shtoKategori($_POST['emri'],$_POST['pershkrimi']);
}
if(isset($_POST['modifikoKategori']))
{
    modifikoKategori($_POST['kategoriid'],$_POST['emri'], $_POST['pershkrimi']);
}

if($_GET['kid'])
{
    $kategoriid = $_GET['kid'];
    $kategori = merrKategoriId($kategoriid);
    $emri  = $kategori['emri'];
    $pershkrimi = $kategori['pershkrimi'];
}
    
?>

<section class="section-shto-modifiko container">
    <div class="image">
        <img src="img/car9.jpg" alt="">
    </div>
    <div class="forma">
        <br>
        <br>
        <?php
        if(!isset($_GET['kid'])){
           echo " <h1>Forma per shtimin e Kategorisë</h1> ";
        }
        else 
        {
            echo "<h1>Forma per editimin e Kategorisë</h1>";
        }
        ?>
        <br>
        <form action="#" method="post">
        <input type="hidden" id="kategoriiid" name="kategoriid" 
                value="<?php if(!empty($kategoriid)) echo $kategoriid ?>">
            <div class="inputAndLabels">
                <label for="emri">Emri</label> <br>
                <input type="text" id="emri" name="emri"
                value="<?php if(!empty($emri)) echo "$emri"?>">
            </div>
            <div class="inputAndLabels">
                <label for="pershkrimi">Pershkrimi</label> <br>
                <textarea id="pershkrimi" name="pershkrimi" rows="10"><?php if(!empty($pershkrimi)) echo "$pershkrimi" ?></textarea>
            </div>
            <div class="inputAndLabels">
                <div class="butonat">
                <?php
                        if(!isset($_GET['kid'])){
                            echo "<input id='shtoKategori' type='submit'
                            name='shtoKategori' class='shtoModifiko' value='Shto Kategorin'>";
                        }else{
                            echo "<input id='modifikoKategori' type='submit'
                            name='modifikoKategori' class='shtoModifiko' value='Modifiko Kategorin'>"; 
                        }
                    ?>
                </div>
            </div>
        </form>
    </div>
</section>

<footer class="main-footer">
    <div class="main-footer-content container">
        <div>
            <p>&copy; Rent a Car 2021. All rights reserved.</p>
        </div>
        <div class="social-media">
            <div>
                <a href="#"><i class="fab fa-facebook"></i></a>
            </div>
            <div>
                <a href="#"><i class="fab fa-twitter"></i></a>
            </div>
            <div>
                <a href="#"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
