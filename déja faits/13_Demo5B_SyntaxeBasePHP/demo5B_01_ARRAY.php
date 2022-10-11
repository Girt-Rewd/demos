<!DOCTYPE html>
<!-- 
	Fichier     : Démo 5B 01, les tableaux
	Description : fichier utilise les tableaux
      Auteur      : Dini Ahamada
	Date        : 2021-11-07
-->
<html lang="fr">

<head>
    <title>démo5B_01</title>
    <meta charset="UTF-8" />
    <link rel="stylesheet" type="text/css" href="styleTable.css" />
</head>

<body>
    <!-- ============================= Tableaux indexés =========================== -->
    <h1>Tableaux Indexés</h1>
    <!------------- Défintion des tableaux indexés et calculs ------------>
    <!--Declarez les tableaux suivantes   -->
    <!--	etudiants avec les valeurs : "Al","Bob","Carla","Dan" -->
    <!--	notes    68,70,76,78   -->
    <!--	numeros_da : 1234,2345,3456,4567   -->
    <!------------- Affichez les résultats dans une table ------------>
    
    <!-- 
        Entrées: les données fournies
        Sorties : Les résultats qu’on souhaite
        Traitement: Les actions entreprises pour obtenir souhaités

    -->
    
    <?php
        $etudiants = ["Al", "Bob", "Carla", "Dan"]; 
        $notes = [68, 70, 76, 78];
        $numeros_da = [ 1234, 2345, 3456, 4567];
    ?>
    <h2>Liste des étudiants</h2>
    <table>
        <thead>
            <tr>
                <th>Étudiants</th>
                <th>Numéro DA</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                for ($i=0; $i < count($etudiants); $i++) {
                    echo "<tr>"; 
                    echo "<td>" .  $etudiants[$i] . " </td>";
                    echo  "<td>" .  $notes[$i] . "</td>";
                    echo  "<td>" .  $numeros_da[$i] . "</td>";
                    echo "</tr>";
                }
            ?>

        </tbody>
    </table>
    <p> Nombre étudiants : 
    <?php
        echo count($etudiants) . " "; 
        
        $moyenne = 0;
        for ($i=0; $i < count($etudiants); $i++) { 
            $moyenne += $notes[$i];
        }
        $moyenne /= count($notes);
    ?>    
    . Moyenne du groupe : . <?php echo $moyenne?> </p>



    <!-- ============================= Tableaux associatifs =========================== -->
    <h1>Tableaux Associatifs</h1>
    <!------------- Défintion de tableaux indexé ------------>
    <!-- 
        Capitales : 
        
    "Royaume-Uni"=>"Londres","France"=>"Paris","Portugal"=>"Lisbonne","Espagne"=>"Madrid" -->
    <!-- 
        populations :
        "Royaume-Uni"=>67.5,"France"=>65.1,"Portugal"=>10.2,"Espagne"=>46.7 -->

    <!------------- Affichez les pays dans une liste ------------>
    <?php
        $capitales = ["Royaume-Uni"=>"Londres","France"=>"Paris","Portugal"=>"Lisbonne","Espagne"=>"Madrid"];
        $populations = ["Royaume-Uni"=>67.5,"France"=>65.1,"Portugal"=>10.2,"Espagne"=>46.7];
    ?>
    <h2>Liste de pays</h2>
    <ul>
        <?php
            foreach( $capitales as $pays => $capitale)
            {
                echo "<li>Pays : " . $pays . ". Capitale: ". $capitale. ". Population : ". $populations[$pays] . " millions</li>";
            }
        
        ?>
    </ul>

</body>

</html>