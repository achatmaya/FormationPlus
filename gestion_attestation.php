<h2> Gestion des attestations </h2>

<?php
    $unControleur->setTable ("attestation");
    $uneAttestation = null; 
    if (isset($_GET['action']) and isset($_GET['idAttestation']))
    {
        $action = $_GET['action']; 
        $idAttestation = $_GET['idAttstation']; 
        switch ($action)
        { 
            case "edit" : 
                $where = array("idAttestation"=>$idAttestation);
                $uneAttestation = $unControleur->selectWhere ($where); 

                break;
        }

    require_once("vue/vue_insert_attestation.php"); 
    if(isset($_POST["Modifier"]))
    {
        $tab =array("idConvention"=>$_POST['idConvention'], 
                    "idEtudiant"=>$_POST['idEtudiant'],
                    "message"=>$_POST['message']);
        $where = array("idAttestation"=>$_GET['idAttestation']);

        $unControleur->update ($tab, $where); 
        header("Location: index.php?page=3");
    }

    if(isset($_POST["Valider"]))
    {
        $tab =array("idConvention"=>$_POST['idConvetion'], 
        "idEtudiant"=>$_POST['idEtudiant'],
        "message"=>$_POST['message']);
        $unControleur->insert ($tab); 
    }
} //fin if isset 

$unControleur->setTable ("attestation");
if (isset($_POST['Rechercher']))
{
    $mot = $_POST['mot']; 
    $like = array("idConvention", "idAttestation");
    $lesAttestations = $unControleur->selectSearch($like, $mot); 
}
else {
    $lesAttestations = $unControleur->selectAll (); 
}

require_once ("vue/vue_les_attestations.php"); 
?>
