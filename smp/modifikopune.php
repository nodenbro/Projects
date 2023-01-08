
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
                    $punaid = $_GET['pid'];
                    $pune = merrPuneId($punaid);
                    $projektiid = $pune['projektiid'];
                    $projektiemri = $pune['emri'];
                    $datapune = $pune['data'];
                    $datapune = date("Y-m-d", strtotime($datapune));
                    $pershkrimi = $pune['pershkrimi'];       
          
                }
                if(isset($_POST['modifiko'])){
                    modifikoPune(
                    $_POST['punaid'],
                    $_POST['projekti'],
                    $_POST['datapune'],
                    $_POST['pershkrimi']);
                }
            

        ?>
                <form id="projekte" action="" class="box" method="post">
                <legend>Forma për modifikim te projektit</legend>
                <fieldset>
                <input type="hidden" name="punaid" id="punaid" 
                    value = "<?php if(!empty($punaid)) echo $punaid ?>">
                </fieldset>
                <fieldset>
                <label>Emri: </label>
                <select name = "projekti">
                    <?php
                        echo "<option value='$projektiid'>$projektiemri</option>";
                        $projektet = merrProjektet();
                        while($projekti = mysqli_fetch_assoc($projektet))
                        {
                            $proid = $projekti['projektiid'];
                            $emri = $projekti['emri'];
                            if($projektiid != $proid)
                            {
                                echo "<option value='$proid'>$emri</option>";
                            }
                        }
                    ?>

                </select>
                </fieldset>
                <fieldset>
                <label>Data e Punes: </label>
                <input type="date" name="datapune" id="datapune"
                    value = "<?php if(!empty($datapune)) echo $datapune ?>">
                </fieldset>
                <fieldset>
                <label>Pershkrimi: </label>
                <textarea name = "pershkrimi" id = "pershkrimi" rows="5" cols="130">
                    <?php if(!empty($pershkrimi)) echo $pershkrimi ?>
                </textarea>
                </fieldset>
                <input type="submit" name="modifiko" id="modifiko" value="Modifiko Punen">
            </form>

            <div>
                <a class="addMembers" href="punet.php">Back</a>
            </div>

        </section>
    </main>

        <!------ End ofContent Part ------>

    <?php  include'inc/footer.php';?>