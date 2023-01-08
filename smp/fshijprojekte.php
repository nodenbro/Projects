
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
       
        <?php include'inc/sidebar.php'; ?>


        <!------ Content Part ------->

        <section id="content" class="box">


        <?php

                if(isset($_GET['pid']))
                {
                    $pid = $_GET['pid'];
                    $projekti = merrProjektId($pid);
                    if($projekti)
                    {
                        $projekti = mysqli_fetch_assoc($projekti);
                        $projektiid = $projekti['projektiid'];
                        $emri = $projekti['emri'];
                        $datafillimit = $projekti['datafillimit'];
                        $datambarimit = $projekti['datambarimit'];
                        $pershkrimi = $projekti['pershkrimi'];
                    }
                }

                if(isset($_POST['fshije'])){
                    $projektiid = $_POST['projektiid'];
                    fshijProjekt($projektiid);
                }

        ?>
                <form id="projekte" action="" class="box" method="post">
                <legend>Forma për fshirje</legend>
                <input type="hidden" name="projektiid" id="projektiid" 
                    value = "<?php if(!empty($projektiid)) echo $projektiid ?>">
                <fieldset>
                    <label>Emri: </label>
                    <input type="text" name="emri" id="emri" disabled
                        value = "<?php if(!empty($emri)) echo $emri ?>">
                </fieldset>
                <fieldset>
                    <label>Data e fillimit: </label>
                    <input type="date" name="datafillimit" id="datafillimit" disabled
                        value = "<?php if(!empty($datafillimit)) echo $datafillimit ?>">
                </fieldset>
                <fieldset>
                    <label>Data e mbarimit: </label>
                    <input type="date" name="datambarimit" id="datambarimit" disabled
                        value = "<?php if(!empty($datambarimit)) echo $datambarimit ?>">
                </fieldset>
                <fieldset>
                    <label>Pershkrimi: </label>
                    <textarea name="pershkrimi" id="pershkrimi" rows="5" cols=" 100" disabled><?php if(!empty($pershkrimi)) echo $pershkrimi ?></textarea>
                </fieldset>
                <input type="submit" name="fshije" id="fshije" value="Fshije">
            </form>
            
            <div>
                <a  class="ProjectBack"href="projektet.php">Back</a>
            </div>

        </section>
    </main>

        <!------ End ofContent Part ------>

    <?php  include'inc/footer.php';?>