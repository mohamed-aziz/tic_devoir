<html>
<style>
</style>
<?php


mysql_connect('localhost', 'root', 'mohamed');
mysql_select_db('BDdevoir1');

echo "<table>";
// Obtenir le numero d'eleves
$q = mysql_query("SELECT COUNT(*) as total FROM Eleve");
echo mysql_fetch_assoc($q)['total'];
echo "</table>";
mysql_close();
?>
</html>