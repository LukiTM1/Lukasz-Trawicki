<!DOCTYPE html>
<html>
<style>
    tr,
    td,
    table {
        border: 1px solid black;
    }
</style>

<body>

    <table>
        <tbody>
            <tr>
                <?php
                $krotka = array("Naglowek1" => "Kolumna1", "Naglowek2" => "Kolumna2", "Naglowek3" => "Kolumna3");

                foreach ($krotka as $key => $val) {
                    echo "<td>$key</td>";
                }
                ?>
            </tr>
            <tr>
                <?php
                $krotka = array("Naglowek1" => "Kolumna1", "Naglowek2" => "Kolumna2", "Naglowek3" => "Kolumna3");

                foreach ($krotka as $key => $val) {
                    echo "<td>" . $val . "</td>";
                }
                $rand1 = rand(1, 10);
                $rand2 = rand(40, 99);
                for ($i = 0; $i < 10; $i++) {

                    echo "<tr><td>" . $rand1 . "</td><td>" . $rand2 . "</td><td>". NULL ."</td></tr>";
                }
                ?>
            </tr>
        </tbody>
    </table>

</body>

</html>
