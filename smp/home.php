
<?php include'inc/header.php'; ?>

<!-- Main Part -->

    <main class="container page">
    <div id="page-container">
        <article class="maininfo">
            <h2 class="title">SMP Projekti - Pershkrimi</h2>
            <p>
                Sistemi për menaxhimin e projekteve mundëson një kompanie menaxhimin e punëve 
                nga punëtorët e saj për projektet që ajo ka. 
                Sistemi ofron menaxhimin e stafit: shtimin, modifikimin fshirjen, paraqitjen e stafit, 
                menaxhimin e projekteve: shtimin, modifikimin fshirjen, paraqitjen e projekteve dhe menaxhimin e 
                punëve ë bën stafi në kuadër të projekteve. 
            </p>
        </article>
       
        <?php include'inc/sidebar.php'; ?>
        <section id="content" class="box">
            <section class="projektet">
                <h3 class="title">Projektet e fundit</h3>
                <div class = "slider">
                <?php
                        $projektet = merrProjektet();
                        $i = 0;
                        while ($projekti = mysqli_fetch_assoc($projektet))
                        {
                            $projektiid = $projekti['projektiid'];
                            $emri  = $projekti['emri'];
                            $pershkrimi = $projekti['pershkrimi'];
                            if(strlen($pershkrimi) > 120)
                            {
                                $pershkrimi = substr($pershkrimi, 0 , 120) . " ... ";
                            } 
                            echo "<div class = 'card-info'>";
                            echo "<div class= 'card-img'>";
                            echo "<img src='images/project{$i}.jpg' alt = 'Projekti {$i}";
                            echo "</div>";
                            echo "<div class = 'card-title'>";
                            echo "<h4>{$emri}</h4>";
                            echo "</div>";
                            echo "<div class = 'card-footer'><p>{$pershkrimi}</p></div>";
                            echo "<a class = 'meShume' href = 'projekti.php?projektii={$projektiid}'> me shume &#8658;</a>";
                            echo "</div>";
                            $i++;
                         if($i == 3) $i = 0;
                        }
                    ?>
            
            </section>
            <table id="members">    
                <tr>
                    <th>Emri dhe Mbiemri</th>
                    <th>Telefoni</th>
                    <th>Email</th> 
                </tr>
               <?php
                        
                        $antaret = merrAntaret();
                        
                        if($antaret)
                        {
                            $i = 0;
                            while ($antari = mysqli_fetch_assoc($antaret)) 
                            {
                                $aid = $antari['antariid'];

                                echo "<tr>";
                                echo "<td>" .$antari['emri']. " " .$antari['mbiemri']. "</td>";
                                echo "<td>" .$antari['telefoni'] . "</td>";
                                echo "<td>" .$antari['email']. "</td>";
                                echo  "</tr>";
                                $i++;
                                if ($i == 6) break;
                            }
                        }           
                ?>
            </table>
                

        </section>
        </div>
    </main>

    <?php  include'inc/footer.php';?>