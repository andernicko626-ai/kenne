<?php 
if(isset($_POST['nom']) AND isset($_POST['code']) AND isset($_POST['cycle']) AND isset($_POST['section'])){
    $nom = $_POST['nom'];
    $code = $_POST['code'];
    $cycle = $_POST['cycle'];
    $section = $_POST['section'];

    $conn = new mysqli("localhost","root", "","bdecole");
    if (!$conn) die("Erreur connexion BD");
    else{
        
        $requete = $conn->prepare("insert into classe(codeC, nomc, cycle, section)
                                            values(?, ?, ?, ?);");
        $requete->bind_param("ssss", $nom, $code, $cycle, $section);
        $requete->execute();
        echo "$code,$nom,$cycle,$section";
        header("location: index.php");
    }
}
?>