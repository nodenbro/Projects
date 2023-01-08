
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
                if(isset($_POST['shtoPune']))
                {
                    shtoPune($_POST['projekti'], $_POST['datapunes'], $_POST['pershkrimi']);
                }

            

        ?>
            <form id="projekte" action="" class="box" method="post">
                <legend>Forma për regjistrim</legend>
                <fieldset>
                    <label>Emri i projektit: </label>
                    <select name = "projekti" id = "projekti">
                        <option value=''>Zgjedh Projektin</option>;
                        <?php
                            $projektet = merrProjektet();
                            while ($projekti = mysqli_fetch_assoc($projektet)) {
                                $projektiid = $projekti['projektiid'];
                                $emri = $projekti['emri'];
                                echo "<option value='{$projektiid}'>$emri</option>";
                            }
                        ?>
                    </select>
                </fieldset>
                <fieldset>
                    <label>Data e Punes: </label>
                    <input type="date" name="datapunes" id="datapunes">
                </fieldset>
                <fieldset>
                    <label>Pershkrimi: </label>
                    <textarea name = "pershkrimi" rows="5" cols="130"></textarea>
                </fieldset>
                <input type="submit" name="shtoPune" id="shtoPune" value="Shto Pune">
            </form>

            <div>
                <a class="addMembers" href="punet.php">Back</a>
            </div>

        </section>
    </main>

        <!------ End ofContent Part ------>

    <?php  include'inc/footer.php';?>