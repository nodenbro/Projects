
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
                if(isset($_POST['regjistrohu']))
                {
                    shtoAntar($_POST['emri'], $_POST['mbiemri'], $_POST['telefoni'], $_POST['email'], $_POST['fjalekalimi']);
                }

            

        ?>
            <form id="antari" action="" class="box" method="post">
                <legend>Forma për regjistrim</legend>
                <label>Emri: </label>
                <input type="text" name="emri" id="emri">
                <label>Mbiemri: </label>
                <input type="text" name="mbiemri" id="mbiemri">
                <label>Telefoni: </label>
                <input type="text" name="telefoni" id="telefoni">
                <label>Email: </label>
                <input type="email" name="email" id="email">
                <label>Fjalekalimi: </label>
                <input type="password" name="fjalekalimi" id="fjalekalimi">
                <input type="submit" name="regjistrohu" id="regjistrohu" value="Regjistrohu">
            </form>

            <div>
                <a class="addMembers" href="home.php">Back</a>
            </div>

        </section>
    </main>

        <!------ End ofContent Part ------>

    <?php  include'inc/footer.php';?>