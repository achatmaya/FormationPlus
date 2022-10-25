<h2> Gestion des conventions </h2>

<?php
    $unControleur->setTable ("convention");
    $laConvetion = null; 
    if (isset($_GET['action']) and isset($_GET['idConvetion']))
    {
        $action = $_GET['action']; 
        $idConvention = $_GET['idConvetion']; 
        switch ($action)
        {
            case "sup" : 
                $where = array("idConvention"=>$idConvention); 
                $unControleur->delete ($where); 
                break; 
            case "edit" : 
                $where = array("idConvetion"=>$idConvention);
                $laConvetion = $unControleur->selectWhere ($where); 

                break;
        }

    require_once("vue/vue_insert_convetion.php"); 
    if(isset($_POST["Modifier"]))
    {
        $tab =array("nomConvention"=>$_POST['nomConvention'], 
                    "nbHeures"=>$_POST['nbHeures']);
        $where = array("idConvetion"=>$_GET['idConvetion']);

        $unControleur->update ($tab, $where); 
        header("Location: index.php?page=1");
    }

    if(isset($_POST["Valider"]))
    {
        $tab =array("nomConvetion"=>$_POST['nomConvention'], 
                    "nbHeures"=>$_POST['nbHeures']);
        $unControleur->insert ($tab); 
    }
} //fin if isset 

$unControleur->setTable ("convention");
if (isset($_POST['Rechercher']))
{
    $mot = $_POST['mot']; 
    $like = array("nomConvetion", "nbHeures");
    $lesConvetions = $unControleur->selectSearch($like, $mot); 
}
else {
    $lesConvetions = $unControleur->selectAll (); 
}

require_once ("vue/vue_les_conventions.php"); 
?>
