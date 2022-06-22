<?php
echo "Statut de votre message : <br>";
$messagedumail="Vous avez reçu un nouveau message de ".$_GET['name']." Son mail est le suivant : ".$_GET["email"]." Objet du message : ".$_GET["sujet"]." Son message est : ".$_GET['message'];
$retour= mail('crisislerouge@gmail.com', $messagedumail, 
'From: crisislerouge@gmail.com');
if($retour) {
    echo"Mon message a bien été envoyé, vous aurez une réponse tout bientôt ! :)";
} else{
    echo"Mon message a malheureusement rencontré un problème et n'a donc pas pu être envoyé ! :(";
}
?>