
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

        <h3 class="title">Lista e Antareve</h3>

            <div id = "message">
                <p><?php if(isset($_SESSION['message'])) echo $_SESSION['message']; ?></p>
            </div>

        <table id="members">    
                <tr>
                    <th>Emri dhe Mbiemri</th>
                    <th>Telefoni</th>
                    <th>Email</th> 
                    <th>Edit</th> 
                    <th>Delete</th>
                </tr>

        <?php
                $antaret = merrAntaret();
                if($antaret)
                {
                    $i = 0;
                    while ($antari = mysqli_fetch_assoc($antaret)) {

                        $aid=$antari['antariid'];
                        if($i%2 == 0)
                        {
                            echo "<tr>";
                        }
                        else
                        {
                            echo "<tr class='alt'>";
                        }
                        $i++;
                        echo "<td>" .$antari['emri'] . " " .$antari['mbiemri'] ."</td>";
                        echo "<td>" .$antari['telefoni'] ."</td>";
                        echo "<td>" .$antari['email'] ."</td>";
                        echo "<td> <a href='modifikoanetar.php?aid={$aid}'>Edit</a> </td>";
                        echo "<td> <a href='fshijanetar.php?aid={$aid}'>Delete</a> </td>";
                        echo "</tr>";
                    }
                }

        ?>
            </table>
                

        </section>
    </main>

        <!------ End ofContent Part ------>

    <?php  include'inc/footer.php';?>