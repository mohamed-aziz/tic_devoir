<?php
mysql_connect('localhost', 'root', 'mohamed');
mysql_select_db('BDdevoir1');
if (isset($_POST['num']) && isset($_POST['dc']) && isset($_POST['ds'])) {
    $s = $_POST['num'];
    $c = $_POST['matiere'];
    $dc = $_POST['dc'];
    $ds = $_POST['ds'];
    $q = mysql_query("SELECT * FROM Eleve WHERE Numero=$s;");
    echo "SELECT * FROM Eleve WHERE Numero=$s;";
    $data = mysql_fetch_array($q);
    if (!($data)) {
        echo "<javascript>alert('Eleve non Inscrit');</javascript>";
    }
    else {
        
        // Verifier si les notes sont deja saisie
        $q = mysql_query("SELECT * FROM Note WHERE NumEleve=$s;");
        $notes = mysql_fetch_array($q);
        if ($notes) {
            // le cas ou les notes sont deja saisie
            var_dump($notes);
        }
        else {
            
            // Inserer Un nouvelle ligne
            if (mysql_query("INSERT INTO Note VALUES( $s , $c , $dc , $ds ) ;")) {
                echo "<javascript>Valeurs inserer avec succees</javascript>";
                    
            }
            else {
                echo "<javascript>Notes non Inserer</javascript>";
            }
                
    
        }
    }
    
    mysql_close();
}
?>