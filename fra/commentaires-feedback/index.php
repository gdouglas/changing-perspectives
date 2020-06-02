<!DOCTYPE html>
<html class="no-js" lang="fr" xml:lang="fr" dir="ltr">

<head>
    <title>Changer de Perspective Feedback Form</title>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/head.php" ?>
    <title>Changer de Perspective | Feedback</title>
    <script src="/scripts/validation.js"></script>
    <script>
        required.add('email_sender_name', 'NOT_EMPTY', 'Full Name');
        required.add('email_sender_email', 'EMAIL', 'Email Address');
        required.add('email_subject', 'NOT_EMPTY', 'Your Subject');
        required.add('email_body', 'NOT_EMPTY', 'Your Message');
        required.add('AntiSpam', 'NOT_EMPTY', 'Anti-Spam Question');
    </script>
    <link rel="stylesheet" type="text/css" href="/styles/form.css">
</head>

<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT'] . "/fra-header.php" ?>
    </header>
    <main id="main">
        <form lang="fr" class="contact-form" name="contactform" method="post" action="send.php" onsubmit="return validate.check(this)">
            <h1>Commentaires</h1>
            <fieldset>
                <legend>Coordonnées et message</legend>
                <label class="required"><span>Nom:<span class="required_star">*</span></span> <br> <input id="email_sender_name" name="email_sender_name" type="text" placeholder="Firstname, lastname" class="required" autocomplete="name" required></label>
                <label class="required">Courriel:<span class="required_star">*</span> <br> <input id="email_sender_email" name="email_sender_email" type="email" class="required" required autocomplete="email" placeholder="example@email.com"></label>
                <hr>
                <label class="required">Objet:<span class="required_star">*</span> <br> <input id="email_subject" name="email_subject" type="subject" required placeholder="Message Subject" maxlength="78"></label>
                <label class="required">Commentaires:<span class="required_star">*</span> <br> <textarea id="email_body" name="email_body" id="email-body" cols="30" rows="10" class="required" required placeholder="Lorem ipsum dolor sit amet..."></textarea></label>
                <button type="reset" class="reset-btn" value="Reset">Reset</button>
                <button type="submit" value="Submit">Submit</button>
            </fieldset>
            <p class="disclaimer">Internet est un forum public et les informations électroniques peuvent être interceptées. Pour des raisons de sécurité et de confidentialité, nous vous demandons de ne pas nous envoyer d'informations personnelles ou confidentielles, telles que votre numéro d'assurance sociale (NAS), votre domicile ou votre entreprise.</p>
        </form>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT'] . "/fra-footer.php" ?>
</body>

</html>