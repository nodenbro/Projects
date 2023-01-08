
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


        <!------ Content ------->

        <section id="content" class="box">


        <!----- Database connection ----->
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
                        $pershkrimi = $projekti['pershkrimi'];
                        $datafillimit = $projekti['datafillimit'];
                        $datambarimit = $projekti['datambarimit'];
                    }

                    
                }
                if (isset($_POST['modifikoProjekte']))
                {                
                    modifikoProjekt($_POST['projektiid'], $_POST['emri'], $_POST['pershkrimi'], $_POST['datafillimit'], $_POST['datambarimit']);               
                }

        ?>
        <!----- Database connection ----->


                <!----- Form for modification ----->

                <form id="projekte" action="" class="box" method="post">
                <legend>Forma për modifikimin e projekteve</legend>
                <input type="hidden" name="projektiid" id="projektiid"
                    value="<?php if(!empty($projektiid)) echo $projektiid ?>">
                <fieldset>
                    <label>Emri: </label>
                    <input type="text" name="emri" id="emri"
                        value="<?php if(!empty($emri)) echo $emri ?>">
                </fieldset>
                <fieldset id="datafillimit">
                    <label>Data e Fillimit: </label>
                    <input type="date" name="datafillimit" id="datafillimit"
                        value="<?php if(!empty($datafillimit)) echo $datafillimit ?>">
                </fieldset>
                <fieldset id="datambarimit">
                    <label>Data e mbarimit: </label>
                    <input type="date" name="datambarimit" id="datambarimit"
                        value="<?php if(!empty($datambarimit)) echo $datambarimit ?>">
                </fieldset>
                <fieldset>
                    <label>Pershkrimi: </label>
                    <textarea id="pershkrimi" name="pershkrimi" rows="5" cols="120"><?php if(!empty($pershkrimi)) echo $pershkrimi ?></textarea>
                </fieldset>
                <input type="submit" name="modifikoProjekte" id="modifikoProjekte" value="Modifiko Projektin">
            </form>

            <!----- Form for modification ----->


            <!----- Back Button ----->
            <div>
                <a class="ProjectBack" href="projektet.php">Back</a>
            </div>
            <!-- Back Button -->

        </section>

        <!----- Content ----->
    </main>

        <!------ End ofContent Part ------>

    <?php  include'inc/footer.php';?>