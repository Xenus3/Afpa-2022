<?php 
$numeroDeMois = intval(date("m"));
$moisFrancais = array(1=>'Janvier','Février','Mars','Avril','Mai','Juin',
                      'Juillet','Aout','Septembre','Octobre','Novembre','Décembre');
$cellColor = array(1=>'blue','white','red','yellow','grey','lime',
                      'lightblue','fuchsia', 'lightgrey','olive','pink','purple');
echo "<table border=1> ";
for($i=1;$i<=12;$i++)
{
    echo "<td bgcolor=$cellColor[$i]>".$i."</td><td>".$moisFrancais[$i]."</td>" ;
    ($i%3==0) ? print ("</tr><tr>") : print ("");
}
echo "</table>";
?>