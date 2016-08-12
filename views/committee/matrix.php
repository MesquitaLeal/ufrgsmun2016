<article class="container">
    <table class="table">
        <tr>
            <th>Country*</th>
            <th>ADMM+</th>
            <th>WB</th>
            <th>DISEC</th>
            <th>OEA</th>
            <th>AU</th>
            <th>UNEA</th>
            <th>UNSC</th>
            <th>Total</th>
        </tr>

        <?php
            include 'countries.php';
        ?>

        <?php foreach ($countries as $key => $value) {
            echo "<tr>";
            foreach ($value as $a => $b) {
                echo "<td style='text-align:center;'>" . $b . "</td>";
            }
            echo "</tr>";

        } ?>
    </table>
</article>
