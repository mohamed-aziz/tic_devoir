<html>
<style>
</style>
<?php


mysql_connect('localhost', 'root', 'mohamed');
mysql_select_db('BDdevoir1');

echo "<table>";
// Obtenir le numero d'eleves
$q = mysql_query("SELECT COUNT(*) FROM Eleve");
ecoh mysql_fetch_row($q);
echo "</table>";
mysql_close();
?>
</html>