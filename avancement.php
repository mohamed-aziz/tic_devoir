<html>
<style>
</style>
<?php

function nb($s) {
return (intval(mysql_fetch_assoc(mysql_query("SELECT COUNT(*) as total FROM eleve where CodeMatiere=\"$s\""))['total']) / $nbeleves)* 100;
}

mysql_connect('localhost', 'root', 'mohamed');
mysql_select_db('BDdevoir1');

echo "<table>";
// Obtenir le numero d'eleves
$q = mysql_query("SELECT COUNT(*) as total FROM Eleve");
$nbeleves = mysql_fetch_assoc($q)['total'];
$nbAlgo =nb('Algo');
$nbTic = nb('TIC');
$nbBD = nb('BD');
echo "<tr><td>Algorithmique</td><td>BD</td><td>TIC</td></tr>";
echo "<tr><td>$nbAlgo</td> <td>$nbBD</td> <td>$nbTic</td> </tr>"
echo "</table>";
mysql_close();
?>
</html>