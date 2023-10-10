
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

        <h3 class="title">Lista e Puneve</h3>

            <a class="addProject" href="shtopune.php">Shto Pune</a>   

            <div id = "message">
                <p><?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?></p>
            </div>



        <table id="members">    
                <tr>
                    <th>Emri i Punes</th>
                    <th>Data e fillimit</th>
                    <th>Pershkrimi</th> 
                    <th>Edit</th> 
                    <th>Delete</th>
                </tr>

        <?php
            $punet = merrPunet();
            if($punet)
            {
                $i = 0;
                while ($puna = mysqli_fetch_assoc($punet)) 
                {

                    $pid=$puna['punaid'];

                    if($pid <= 16) 
                    {
                        if($i%2 == 0)
                        {
                            echo "<tr>";
                        }
                        else
                        {
                            echo "<tr class='alt'>";
                        }
                        
                        echo "<td>" .$puna['emri']."</td>";
                        echo "<td>" .$puna['data'] ."</td>";
                        echo "<td>" .$puna['pershkrimi'] ."</td>";
                        echo "<td> <a href='modifikopune.php?pid={$pid}'>Edit</a> </td>";
                        echo "<td> <a href='fshijpune.php?pid={$pid}'>Delete</a> </td>";
                        echo "</tr>";
                        $i++;
                    }
                }
            }
            
        ?>
            </table>
        </section>
    </main>

        <!------ End ofContent Part ------>

    <?php  include'inc/footer.php';?>