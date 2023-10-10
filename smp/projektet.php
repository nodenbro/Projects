
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
                Lista e projekteve
            </h3>


                <a class="addProject" href="shtoprojekte.php">Shto Projekte</a>
                
                <div id = "message">
                    <p><?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?></p>
                </div>

            <table id="members">    
                <tr>
                    <th>Emri</th>
                    <th>Data e Fillimit</th>
                    <th>Data e Mbarimit</th> 
                    <th>Pershkrimi</th> 
                    <th>Edit</th> 
                    <th>Delete</th>
                </tr>

            <?php

                $projektet = merrProjektet();
                if($projektet)
                {
                    $i = 0;
                    while ($projekti = mysqli_fetch_assoc($projektet)) 
                    {
                        $pid = $projekti['projektiid'];
                        if($pid <= 16)
                        {
                            if ($i%2 == 0)
                            {
                                echo "<tr>";
                            }
                            else
                            {
                                echo "<tr class='alt'>";
                            }

                                echo "<td>" . $projekti['emri'] . "</td>";
                                echo "<td>" . $projekti['datafillimit'] . "</td>";
                                echo "<td>" . $projekti['datambarimit'] .  "</td>";
                                echo "<td>" . $projekti['pershkrimi'] . "</td>";
                                echo "<td> <a href = 'modifikoprojekte.php?pid={$pid}'>Edit </a>";
                                echo "<td> <a href = 'fshijprojekte.php?pid={$pid}'>Delete </a>";
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