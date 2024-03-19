<?php

$firstname = $name = $email = $phone = $message = '';   // les variable du formulaire

$firstnameError = $nameErroR = $emailError = $phoneError = $messageError = ''; // variable erreur dans le formulaire


// toute cette condition sera exécuter une fois que le client rentrera ces données 

if ($_SERVER["REQUEST_METHOD"] == "POST")           // condition requete method egale post
{
    $firstname = verifyInput($_POST["firstname"]);
    $name = verifyInput($_POST["name"]);
    $email = verifyInput($_POST["email"]);
    $phone = verifyInput($_POST["phone"]);
    $message = verifyInput($_POST["message"]);
    $isSuccess = true ;
    $emailText = "" ;     // le mail a qui sera envoyé



    if(empty($firstname))           // cette condition sert a quand utilisateur ne rentre pas ces donner lui affichera ce message
    {
        $firstnameError = "Je veux connaitre ton prénom";
        $isSuccess = false ;
    }
    else 
    {
        $emailText .= "firstname : $firstname\n";
    }



    if(empty($name))
    {
        $nameErroR = " Et oui je veux tout savoir. Mème ton nom !!";
        $isSuccess = false ;
    }
    else{
        $emailText .= "name : $name\n";
    }



    if(empty($message))
    {
        $messageErroR = " Et oui je veux tout savoir !!";
        $isSuccess = false ;
    }
    else
    {
        $emailText .= "message : $message\n";
    }



    if(!isEmail($email))  //  si message d'erreur... il sagit de la validation du email
    {
        $emailError = "T'essaies de me rouler ? C'est pas un email !!";
        $isSuccess = false ;
    }
    else
    {
        $emailText .= "email : $email\n";
    }



    if(!isPhone($phone))   // si message d'erreur , sa affiche message .. 
    {
        $phoneError = "Que des chiffres et des espaces, stp ...";
        $isSuccess = false ;
    }
    else
    {
        $emailText .= "Phone : $phone\n";
    }



    if($isSuccess)
    {
        //  LA FONCTION qui envoi le contenue de l'email 

        $headers = "From: $firstname $name <$email>\r\nReply-To: $email";
        mail($emailTo, "un message de votre site", $emailText , $headers);
        $firstname = $name = $email = $phone = $message = ''; // les champ des variable seront vide avec cette fonction 
    }


}

// fonction qui relie les condition 

function isPhone($var)
{
    return preg_match("/^[0-9 ]*$/", $var);   // expression reguliere pour le nombre de caractère pour le phone
}


function isEmail($var)
{
    return filter_var($var, FILTER_VALIDATE_EMAIL);
}


function verifyInput ($var)         // element pour masquer les element html dans la fonction
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);

    return $var ;
}


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactez-moi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.goofleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
</head>

<body>

    <div class="container">
        <div class="divider"></div>
        <div class="heading">
            <h2>Contactez-moi</h2>
        </div>
    
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <form id="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prénom<span class="bleu">*</span></label>
                            <input type="text" id="fistname" name="firstname" required class="form-control" placeholder="Votre prenom" value="<?php echo $firstname ;?>">
                            <p class="comments"><?php echo $firstnameError;?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="name">Nom<span class="bleu">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom" value="<?php echo $name ;?>">
                            <p class="comments"><?php echo $nameError;?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="email">Email<span class="bleu">*</span></label>
                            <input type="text" id="email" required name="email" class="form-control" placeholder="Votre email" value="<?php echo $email ;?>">
                            <p class="comments"><?php echo $emailError ;?></p>
                        </div>

                        <div class="col-md-6">
                            <label for="name">Téléphone</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Votre telephone" value=" <?php echo $phone ;?>">
                            <p class="comments"><?php echo $phoneError;?></p>
                        </div>

                        <div class="col-md-12">
                            <label for="message">Message<span class="bleu"> *</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4" ><?php echo $message ;?></textarea>
                            <p class="comments"><?php echo $messageError;?></p>
                        </div>

                        <div class="col-md-12">
                            <p class="info"><strong>* Ces information sont requises</strong></p>
                        </div>
                        
                        <div class="col-md-12">
                            <input type="submit" class="button1" value="Envoyer">
                        </div>


                    
                                <!---- le message apparaitra une fois que le formulaire a été validé avec ( succes)--->
                            <p class="thank-you" style="display:<?php if($isSuccess) echo 'block'; else echo 'none' ;?> " >Votre message a bien ete envoye. Merci de m'avoir contacte :) </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>



</html>