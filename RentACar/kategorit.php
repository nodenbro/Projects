<?php include 'inc/header.php'; ?>


<section class="list-entity container">
    <div class="image">
        <img src="img/car9.jpg" alt="">
    </div>

    <table class="styled-table">
        <thead>
        <tr>
            <th>Emri</th>
            <th>Pershkrimi</th>
            <th>Modifiko</th>
            <th>Fshiej</th>
        </tr>
        </thead>
        <tbody>
            <?php
                $kategori = merrKategori();
                while($kategorit = mysqli_fetch_assoc($kategori))
                {
                    $kid  = $kategorit['kategoriid'];
                    echo "<tr class='active-row'>";
                    echo "<td>". $kategorit['emri'] . "</td>";
                    echo "<td>". $kategorit['pershkrimi'] . "</td>";
                    echo "<td><a href='shto_modifiko_kategori.php?kid={$kid}'>
                    <i class='fas fa-edit'></i></a></td>";
                    echo "<td><a href='fshijkategori.php?kid={$kid}'>
                    <i class='far fa-trash-alt'></i></a></td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    <a href="shto_modifiko_kategori.php" id="add_entity"><i class="add_entity fas fa-plus"></i> Shto Kategori</a>
</section>

<?php include 'inc/footer.php' ?>
