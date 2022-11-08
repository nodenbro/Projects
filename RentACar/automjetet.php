<?php include 'inc/header.php'; ?>

<section class="list-entity container">
    <div class="image">
        <img src="img/car7.jpg" alt="">
    </div>
    <table class="styled-table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Kategoria</th>
            <th>Numri i regjistrimit</th>
            <th>Viti i Prodhimit</th>
            <th>Kostoja</th>
            <th>Modifiko</th>
            <th>Fshiej</th>
        </tr>
        </thead>
        <tbody>
        <?php
            $automjeti = merrAutomjetet();
            while($automjetet = mysqli_fetch_assoc($automjeti))
            {
                $autoid = $automjetet['automjetiid'];
                echo "<tr class='active-row'>";
                echo "<td>" . $automjetet['emri'] . "</td>";
                echo "<td>" . $automjetet['pershkrimi'] . "</td>";
                echo "<td>" . $automjetet['nrregjistrimi'] . "</td>";
                echo "<td>" . $automjetet['vitiprodhimit'] . "</td>";
                echo "<td>" . $automjetet['cmimi'] . "</td>";
                echo "<td><a href='shto_modifiko_automjete.php?autoid={$autoid}'>
                <i class='fas fa-edit'></i></a></td>";
                echo "<td><a href='fshijautomjete.php?autoid={$autoid}'>
                <i class='far fa-trash-alt'></i></a></td>";
                echo "</tr>";
            }
        ?>
        
        </tbody>
    </table>
    <a href="shto_modifiko_automjete.php" id="add_entity"><i class="fas fa-plus"></i> Shto Automjet</a>
</section>

<?php include 'inc/footer.php'; ?>
