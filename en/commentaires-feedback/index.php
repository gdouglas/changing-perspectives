<!DOCTYPE html>
<html class="no-js" lang="en" xml:lang="en" dir="ltr">
<head>
    <title>Feedback | Changing Perspectives</title>
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
        <?php include $_SERVER['DOCUMENT_ROOT']."/en-header.php" ?>
    </header>
    <main id="main" role="main" tabindex="-1">
        <h1>Comments and Feedback</h1>
        <form class="contact-form" name="contactform" method="post" action="send.php" onsubmit="return validate.check(this)">
            <fieldset>
                <legend>Please enter your contact information and message</legend>
                <label class="required">Name:<span class="required_star">*</span> <br> <input id="email_sender_name" name="email_sender_name" type="text" placeholder="Firstname, lastname" class="required" autocomplete="name" required></label>
                <label class="required">Email:<span class="required_star">*</span> <br> <input id="email_sender_email" name="email_sender_email" type="email" class="required" required autocomplete="email" placeholder="example@email.com"></label>
                <hr>
                <label class="required">Subject:<span class="required_star">*</span> <br> <input id="subject" name="subject" type="text" required placeholder="Message Subject" maxlength="78"></label>
                <label class="required">Message:<span class="required_star">*</span> <br> <textarea id="email_body" name="email_body" id="email-body" cols="30" rows="10" class="required" required placeholder="Lorem ipsum dolor sit amet..."></textarea></label>
                <button type="reset" class="reset-btn" value="Reset">Reset</button>
                <button type="submit" value="Submit">Submit</button>
            </fieldset>
            <p class="disclaimer">The Internet is a public forum and electronic information can be intercepted. For reasons of security and privacy, we ask that you not send us any personal or confidential information, such as your Social Insurance Number (SIN), home or business address.</p>
        </form>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT']."/en-footer.php" ?>
</body>
</html>