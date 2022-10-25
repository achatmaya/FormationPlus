<h2> Gestion des etudiants </h2>

<?php
    $unControleur->setTable ("etudiant");
    $unEtudiant = null; 
    if (isset($_GET['action']) and isset($_GET['idEtudiant']))
    {
        $action = $_GET['action']; 
        $idEtudiant = $_GET['idEtudiant']; 
        switch ($action)
        {
            case "sup" : 
                $where = array("idEtudiant"=>$idEtudiant); 
                $unControleur->delete ($where); 
                break; 
            case "edit" : 
                $where = array("idEtudiant"=>$idEtudiant);
                $unEtudiant = $unControleur->selectWhere ($where); 

                break;
        }

    require_once("vue/vue_insert_etudiant.php"); 
    if(isset($_POST["Modifier"]))
    {
        $tab =array("nom"=>$_POST['nom'], 
                    "prenom"=>$_POST['prenom'],
                    "mail"=>$_POST['mail'],
                    "convention"=>$_POST['convention']);
        $where = array("idEtudiant"=>$_GET['idEtudiant']);

        $unControleur->update ($tab, $where); 
        header("Location: index.php?page=2");
    }

    if(isset($_POST["Valider"]))
    {
        $tab =array("nom"=>$_POST['nom'], 
        "prenom"=>$_POST['prenom'],
        "mail"=>$_POST['mail'],
        "convention"=>$_POST['convention']);
        $unControleur->insert ($tab); 
    }
} //fin if isset 

$unControleur->setTable ("etudiant");
if (isset($_POST['Rechercher']))
{
    $mot = $_POST['mot']; 
    $like = array("nom", "prenom");
    $lesConvetions = $unControleur->selectSearch($like, $mot); 
}
else {
    $lesConvetions = $unControleur->selectAll (); 
}

require_once ("vue/vue_les_etudiants.php"); 
?>
