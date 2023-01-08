
<?php include'inc/header.php'; ?>

<!-- Main Part -->
    <main class="container page">
        <article class="maininfo">
            <p>
                Sistemi për menaxhimin e projekteve mundëson një kompanie menaxhimin e punëve 
                nga punëtorët e saj për projektet që ajo ka. 
                Sistemi ofron menaxhimin e stafit: shtimin, modifikimin fshirjen, paraqitjen e stafit, 
                menaxhimin e projekteve: shtimin, modifikimin fshirjen, paraqitjen e projekteve dhe menaxhimin e 
                punëve ë bën stafi në kuadër të projekteve. 
            </p>
        </article>


        
        <?php      
                if(isset($_GET['pid']))
                {
                    $punaid=$_GET['pid'];
                    $puna = merrPuneId($punaid);
                    $projektiid = $puna['projektiid'];
                    $projektiEmri = $puna['emri'];
                    $datapune = $puna['data'];
                    $datapune = date("Y-m-d", strtotime($datapune));
                    $pershkrimi = $puna['pershkrimi'];     
                }
                if(isset($_POST['fshije']))
                {      
                    fshijPune($_POST['punaid']);
                }
            

        ?>
       
        <?php include'inc/sidebar.php'; ?>


        <!------ Content Part ------->

        <section id="content" class="box">


                <form id="projekte" action="" class="box" method="post">
                <legend>Forma për fshirje</legend>
                <fieldset>
                <input type="hidden" name="punaid" id="punaid" 
                    value = "<?php if(!empty($punaid)) echo $punaid ?>">
                </fieldset>
                <fieldset>
                <label>Emri: </label>
                <select name="projekti" disabled>
                   <?php
                        echo  "<option value='projektiid'>$projektiEmri</option>"
                    ?>
                </fieldset>
                <fieldset>
                <label>Data e Punes: </label>
                <input type="date" name="datapune" id="datapune" readonly
                    value = "<?php if(!empty($datapune)) echo $datapune ?>">
                </fieldset>
                <fieldset>
                <label>Pershkrimi: </label>
                <textarea readonly name="telefoni" rows="5" cols="130">
                    <?php if(!empty($pershkrimi)) echo $pershkrimi ?>
                </textarea>
                </fieldset>
                <input type="submit" name="fshije" id="fshije" value="Fshije">
            </form>

            <div>
                <a class="addMembers" href="punet.php">Back</a>
            </div>
            
        </section>
    </main>

        <!------ End ofContent Part ------>

    <?php  include'inc/footer.php';?>