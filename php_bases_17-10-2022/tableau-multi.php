<?php
echo "<h1 style='text-align:center; font-size:80px'>Table de Multiplication</h1>";
echo "<table border=1 style='background:blue;width:80%;margin:0 auto;font-weight:bold;text-align:center;font-size:40px;color:white'>";

        for ($i =1; $i <= 5; $i++){

            echo'<tr style="height:100px">';

            for ($j = 1; $j <= 5; $j++)
                echo '<td style="width:100px">' .$i*$j.'</td>';
           echo '</tr>'; // close tr tag here

        }

  echo"</table>";