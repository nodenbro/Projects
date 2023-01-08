
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
                if(isset($_POST['shtoProjekte'])){

                    shtoProjekte($_POST['emri'],$_POST['pershkrimi'],$_POST['datafillimit'],$_POST['datambarimit']);
                }
            

        ?>
                <form id="projekte" action="" class="box" method="post">
                <legend>Forma për regjistrimin e projekteve</legend>
                <fieldset>
                    <label>Emri: </label>
                    <input type="text" name="emri" id="emri">
                </fieldset>
                <fieldset id="datafillimit">
                    <label>Data e Fillimit: </label>
                    <input type="date" name="datafillimit" id="datafillimit">
                </fieldset>
                <fieldset id="datambarimit">
                    <label>Data e mbarimit: </label>
                    <input type="date" name="datambarimit" id="datambarimit">
                </fieldset>
                <fieldset>
                    <label>Pershkrimi: </label>
                    <textarea id="pershkrimi" name="pershkrimi" rows="5" cols="120"></textarea>
                </fieldset>
                <input type="submit" name="shtoProjekte" id="shtoProjekte" value="Shto Projekt">
            </form>

            <div>
                <a class="ProjectBack" href="projektet.php">Back</a>
            </div>

        </section>
    </main>

        <!------ End ofContent Part ------>

    <?php  include'inc/footer.php';?>