<?php
function connexion()
{
    $con=mysqli_connect("localhost","root","","ppe");
    if ($con == null)
    {
        echo "<br/> Erreur de connexion au serveur !</br>";
    }
    return $con;
}
function deconnexion($con)
{
    mysqli_close ($con);
}

//___________________________________fonction inscription____________________________________________________

function insertclient($tab)
{
    
                        
                $con = connexion ();
                    if ($con != null)                            
                        {
                        $requete="insert into client values (null,'".$_POST['nom_client']."','".$_POST['prenom_client']."','".$_POST['telephone']."','".$_POST['sexe']."','".$_POST['email']."','".$_POST['login']."','".$_POST['mot_de_passe']."'); ";
                            
                        mysqli_query($con, $requete);
                        mysqli_close($con);
                        }}

function selectAllProjet()

{
    $con=connexion();
    if ($con != null)
        {
            $requete= "select * from projet; ";
            $resultats= mysqli_query ($con,$requete);
            deconnexion($con);
            return $resultats ;
        }
}

function deleteProjet($id_p)     
        {
            $con = connexion();
            if ($con != null)
            {
                $requete="delete from projet where id_p=".$id_p.";";
                mysqli_query($con,$requete);
                deconnexion($con);
            }
        }