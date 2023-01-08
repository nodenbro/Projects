
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

        <h3 class="title">
            Antaret e Ekipit
        </h3>


        <?php
                if(isset($_GET['aid'])){
                    $aid=$_GET['aid'];
                    $antari = merrAntarId($aid);
                    if($antari){
                        $antari = mysqli_fetch_assoc($antari);
                        $antariid = $antari['antariid'];
                        $emri = $antari['emri'];
                        $mbiemri = $antari['mbiemri'];
                        $telefoni = $antari['telefoni'];
                        $email = $antari['email'];
                        $fjalekalimi = $antari['fjalekalimi'];
                    }
                }
                if(isset($_POST['modifiko'])){
                    modifikoAntar($_POST['antariid'], $_POST['emri'], $_POST['mbiemri'], $_POST['telefoni'], $_POST['email'], $_POST['fjalekalimi']);
                }
            

        ?>
                <form id="antari" action="" class="box" method="post">
                <legend>Forma për modifikimin e antarve</legend>
                <input type="hidden" name="antariid" id="antariid" 
                    value = "<?php if(!empty($antariid)) echo $antariid ?>">
                <label>Emri: </label>
                <input type="text" name="emri" id="emri"
                    value = "<?php if(!empty($emri)) echo $emri ?>">
                <label>Mbiemri: </label>
                <input type="text" name="mbiemri" id="mbiemri"
                    value = "<?php if(!empty($mbiemri)) echo $mbiemri ?>">
                <label>Telefoni: </label>
                <input type="text" name="telefoni" id="telefoni"
                    value = "<?php if(!empty($telefoni)) echo $telefoni ?>">
                <label>Email: </label>
                <input type="email" name="email" id="email"
                    value = "<?php if(!empty($email)) echo $email ?>">
                <label>Fjalekalimi: </label>
                <input type="password" name="fjalekalimi" id="fjalekalimi"
                    value = "<?php if(!empty($fjalekalimi)) echo $fjalekalimi ?>">
                <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
            </form>

            <div>
                <a class="addMembers" href="antaret.php">Back</a>
            </div>
        </section>
    </main>

        <!------ End ofContent Part ------>

    <?php  include'inc/footer.php';?>