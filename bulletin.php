
<?php

mysql_connect('localhost', 'root', 'mohamed');
mysql_select_db('BDdevoir1');
$q = mysql_query("SELECT * FROM Eleve WHERE Numero=\"$s\";");
$data = mysql_fetch_array($q);
if (!($data)) {
    echo "<script>alert('Vous n etes pas Inscrit');</script>";
}

function est_saisie($num, $mat) {
return !(is_null(mysql_fetch_assoc(mysql_query("SELECT * FROM Note Where NumEleve='$num' AND CodeMatiere='$mat'"))));
}

    function ret($num, $mat)
    {
return mysql_fetch_assoc(mysql_query("SELECT * FROM Note WHERE NumEleve='$num'"));
}

    function coeff($mat) {
return mysql_fetch_assoc(mysql_query("SELECT * FROM Matiere WHERE Code='$mat'"));
}

    function nom_p($num) {
return mysql_fetch_assoc(mysql_query("SELECT * FROM Eleve WHERE Numero='$num' "));
}
    if (est_saisie($s, 'Algo') && est_saisie($s, 'BD') && est_saisie('TIC')) {

$pr = coeff('Algo');
$ti = coeff('TIC');
$bd = coeff('BD');

echo "<table align='center'>";
echo "<tr> <td>Bulletin de notes de l \'eleve</td>  <td>Nom Prenom</td> </tr>";
echo "<tr> <td> </tr>"
echo "</table>";
}
    else {
echo "<script>alert('saisie Incomplete des notes')</script>";
}
?>