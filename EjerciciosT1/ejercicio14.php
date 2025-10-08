<!DOCTYPE html>
<html>
    <body>
        <table>
            <?php

            for ($i=1;$i<=6;$i++) {
                echo "<tr>";
                for ($x=1;$x<=5;$x++) {
                    echo "<td>$i * $x = " . $i * $x . "</td>";
                }

                echo "</tr>";
            }



            ?>
        </table>
    </body>
</html>



