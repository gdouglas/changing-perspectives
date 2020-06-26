<!DOCTYPE html>
<html class="no-js" lang="fra" xml:lang="fra" dir="ltr">
<head>
    <title>Feedback | Changing Perspectives</title>
    <meta name="description" content="Leave feedback about the Changing Perspectives website.">
    <?php include $_SERVER['DOCUMENT_ROOT']."/head.php" ?>
    <script src="/scripts/validation.js"></script>
	<script>
	required.add('email_sender_name','NOT_EMPTY','Full Name');
	required.add('email_sender_email','EMAIL','Email Address');
	required.add('subject','NOT_EMPTY','Your Subject');
	required.add('email_body','NOT_EMPTY','Your Message');
    </script>
    <link rel="stylesheet" type="text/css" href="/styles/form.css">
</head>
<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT']."/fra-header.php" ?>
    </header>
    <main id="main" role="main" tabindex="-1">
        <h1>Commentaires et rétroaction</h1>
        <?php include "send.php" ?>
        <form class="contact-form" name="contactform" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> onsubmit="return validate.check(this)">
            <fieldset>
                <legend>Veuillez saisir vos coordonnées et votre message</legend>
                <label class="required">Nom:<span class="required_star">*</span> <br> <input id="email_sender_name" name="email_sender_name" type="text" placeholder="Firstname, lastname" class="required" autocomplete="name" required></label>
                <label class="required">Email:<span class="required_star">*</span> <br> <input id="email_sender_email" name="email_sender_email" type="email" class="required" required autocomplete="email" placeholder="example@email.com"></label>
                <hr>
                <label class="required">Matière:<span class="required_star">*</span> <br> <input id="subject" name="subject" type="text" required placeholder="Message Subject" maxlength="78"></label>
                <label class="required">Message:<span class="required_star">*</span> <br> <textarea id="email_body" name="email_body" id="email-body" cols="30" rows="10" class="required" required placeholder="Lorem ipsum dolor sit amet..."></textarea></label>
                <div class="form-controls">
                    <button type="reset" class="reset-btn" value="Reset">Réinitialiser</button>
                    <button type="submit" value="Submit">Soumettre</button>
                </div>
            </fieldset>
            <p class="disclaimer">Internet est un forum public et les informations électroniques peuvent être interceptées. Pour des raisons de sécurité et de confidentialité, nous vous demandons de ne pas nous envoyer d'informations personnelles ou confidentielles, telles que votre numéro d'assurance sociale (NAS), votre domicile ou votre adresse professionnelle.</p>
        </form>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT']."/fra-footer.php" ?>
</body>
</html>