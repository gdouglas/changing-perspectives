<?php
ob_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en" dir="ltr">

<head>
    <title>Vos commentaires | Nouvelles perspectives</title>
    <meta name="description" content="Leave feedback about the Nouvelles perspectives website.">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <script src="/scripts/validation.js"></script>
    <script>
        required.add('email_sender_name', 'NOT_EMPTY', 'Full Name');
        required.add('email_sender_email', 'EMAIL', 'Email Address');
        required.add('subject', 'NOT_EMPTY', 'Your Subject');
        required.add('email_body', 'NOT_EMPTY', 'Your Message');
    </script>
    <link rel="stylesheet" type="text/css" href="/styles/form.css">
    
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/fr-header.php" ?>
    </header>
    <main id="main" role="main" tabindex="-1">
        <h1>Vos commentaires</h1>
        <p class="narrow-container centered-margin pad-bottom">Vos commentaires seront envoyés au Vancouver Maritime Museum. Ils seront également envoyés au Musée canadien de l’histoire qui chapeaute Musées numériques Canada à des fins de recherche publique. Veuillez vous référer à la <a href="https://www.museesnumeriques.ca/avis/" target="_blank" rel="noopener"> Politique sur la protection des renseignements personnels des MNC</a> pour plus d’information.</p>
        <?php include "send.php" ?>
        <form class="contact-form" name="contactform" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> onsubmit="return validate.check(this)">
            <fieldset>
                <div class="width-100">
                    <legend>Veuillez inscrire vos informations de contact ainsi que votre message</legend>
                    <label class="required">Nom:<span class="required_star">*</span> <br> <input id="email_sender_name" name="email_sender_name" type="text" placeholder="Prénom, nom de famille" class="required" autocomplete="name" required></label>
                    <label class="required">Courriel :<span class="required_star">*</span> <br> <input id="email_sender_email" name="email_sender_email" type="email" class="required" required autocomplete="email" placeholder="example@email.com"></label>
                </div>
                <label class="required">Sujet:<span class="required_star">*</span> <br> <input id="subject" name="subject" type="text" required placeholder="Sujet du message" maxlength="78"></label>
                <label class="required">Message:<span class="required_star">*</span> <br> <textarea id="email_body" name="email_body" id="email-body" cols="30" rows="10" class="required" required placeholder="Lorem ipsum dolor sit amet..."></textarea></label>
                <div class="form-controls">
                    <button type="reset" class="reset-btn" value="Reset">Réinitialiser</button>
                    <button type="submit" value="Submit">Soumettre</button>
                </div>
            </fieldset>
            <p class="disclaimer">L'Internet est un forum public et les informations électroniques peuvent être interceptées. Pour des raisons de sécurité et de confidentialité, nous vous demandons ne n’envoyer aucune information personnelle ou confidentielle, telle que votre numéro d’assurance sociale (NAS) ou votre adresse personnelle ou professionnelle.</p>
        </form>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/fr-footer.php" ?>
</body>

</html>