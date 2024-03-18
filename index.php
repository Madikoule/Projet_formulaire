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
                <form id="contact-form" method="post" action="" role="form">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="firstname">Prénom<span class="bleu">*</span></label>
                            <input type="text" id="fistname" name="firstname" class="form-control" placeholder="Votre prenom">
                            <p class="comments">Message d'erreur</p>
                        </div>

                        <div class="col-md-6">
                            <label for="name">Nom<span class="bleu">*</span></label>
                            <input type="text" id="name" name="name" class="form-control" placeholder="Votre prenom">
                            <p class="comments">Message d'erreur</p>
                        </div>

                        <div class="col-md-6">
                            <label for="email">Email<span class="bleu">*</span></label>
                            <input type="text" id="email" name="email" class="form-control" placeholder="Votre téléphone">
                            <p class="comments">Message d'erreur</p>
                        </div>

                        <div class="col-md-6">
                            <label for="name">Téléphone</label>
                            <input type="text" id="phone" name="phone" class="form-control" placeholder="Votre prenom">
                            <p class="comments">Message d'erreur</p>
                        </div>

                        <div class="col-md-12">
                            <label for="message">Message<span class="bleu"> *</span></label>
                            <textarea id="message" name="message" class="form-control" placeholder="Votre message" rows="4" ></textarea>
                            <p class="comments">Message d'erreur</p>
                        </div>

                        <div class="col-md-12">
                            <p class="info"><strong>* Ces information sont requises</strong></p>
                        </div>
                        
                        <div class="col-md-12">
                            <input type="submit" class="button1" value="Envoyer">
                        </div>


                    

                            <p class="thank-you">Votre message a bien ete envoye. Merci de m'avoir contacte :) </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>



</html>