<?php
ob_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="fr" xml:lang="fr" dir="ltr">

<head>
    <title>Vos commentaires | Nouvelles perspectives</title>
    <meta name="description" content="Laissez un commentaire sur le site web Nouvelles perspectives.">
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <link rel="stylesheet" type="text/css" href="/styles/form.css">

</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/fr-header.php" ?>
    </header>
    <main id="main" role="main" tabindex="-1">
        <h1>Vos commentaires</h1>
        <p class="narrow-container centered-margin pad-bottom">Vos commentaires seront envoyés au Vancouver Maritime
            Museum. Ils seront également envoyés au Musée canadien de l’histoire qui chapeaute Musées numériques Canada
            à des fins de recherche publique. Veuillez vous référer à la <a href="https://www.museesnumeriques.ca/avis/"
                target="_blank" rel="noopener"> Politique sur la protection des renseignements personnels des MNC</a>
            pour plus d’information.</p>
        <?php include "send.php" ?>
        <form class="contact-form" name="contactform" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> lang="fr" novalidate>
            <fieldset>
                <div class="width-100">
                    <legend>Veuillez inscrire vos informations de contact ainsi que votre message</legend>
                    <label class="required">Nom:<span class="required_star">*</span>
                        <br>
                        <input id="email_sender_name" name="email_sender_name" type="text"
                            placeholder="Prénom, nom de famille" class="required" autocomplete="name" required value="<?php if (isset($_POST['email_sender_name'])) {
                                echo $_POST['email_sender_name'];
                            } ?>">
                    </label>
                    <label class="required">Courriel&nbsp;<span class="required_star">*</span>
                        <br>
                        <input id="email_sender_email" name="email_sender_email" type="email" class="required" required
                            autocomplete="email" placeholder="example@email.com" value="<?php if (isset($_POST['email_sender_email'])) {
                                echo $_POST['email_sender_email'];
                            } ?>"></label>
                </div>
                <label class="required">Sujet:<span class="required_star">*</span>
                    <br>
                    <input id="subject" name="subject" type="text" required placeholder="Sujet du message"
                        maxlength="78" value="<?php if (isset($_POST['subject'])) {
                            echo $_POST['subject'];
                        } ?>"></label>
                <label class="required">Message:<span class="required_star">*</span>
                    <br>
                    <textarea id="email_body" name="email_body" id="email-body" cols="30" rows="10" class="required"
                        required placeholder="Lorem ipsum dolor sit amet..." value="<?php if (isset($_POST['email_body'])) {
                            echo $_POST['email_body'];
                        } ?>"></textarea></label>
                <div class="form-controls">
                    <button type="reset" class="reset-btn" value="Reset">Réinitialiser</button>
                    <button type="submit" value="Submit">Soumettre</button>
                </div>
            </fieldset>
            <p class="disclaimer">L'Internet est un forum public et les informations électroniques peuvent être
                interceptées. Pour des raisons de sécurité et de confidentialité, nous vous demandons ne n’envoyer
                aucune information personnelle ou confidentielle, telle que votre numéro d’assurance sociale (NAS) ou
                votre adresse personnelle ou professionnelle.</p>
        </form>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/fr-footer.php" ?>
</body>

</html>