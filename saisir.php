<?php
mysql_connect('localhost', 'root', 'mohamed');
mysql_select_db('BDdevoir1');
$s = "00017";
$q = mysql_query('SELECT * From Eleve WHERE Numero=$s');
if (!(mysql_fetch_array($q))) {
    echo "Eleve Non Inscrit<br>";
}
mysql_close();
?>