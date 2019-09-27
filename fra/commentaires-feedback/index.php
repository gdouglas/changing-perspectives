<!DOCTYPE html>
<html lang="en">
<head>
    <title>Changing Perspectives Feedback Form</title>
    <?php include $_SERVER['DOCUMENT_ROOT']."/head.php" ?>
    <title>Changing Perspectives | Feedback</title>
    <script src="/scripts/validation.js"></script>
	<script>
	required.add('email_sender_name','NOT_EMPTY','Full Name');
	required.add('email_sender_email','EMAIL','Email Address');
	required.add('email_subject','NOT_EMPTY','Your Subject');
	required.add('email_body','NOT_EMPTY','Your Message');
	required.add('AntiSpam','NOT_EMPTY','Anti-Spam Question');
    </script>
    <link rel="stylesheet" type="text/css" href="/styles/form.css">
</head>
<body>
    <header>
        <?php include $_SERVER['DOCUMENT_ROOT']."/en-header.php" ?>
        <h1>Changing Perspectives</h1>
    </header>
    <main>
        <form class="text-center" name="contactform" method="post" action="send.php" onsubmit="return validate.check(this)">
            <fieldset>
                <legend>Contact information</legend>
                <label class="required">Name:<span class="required_star">*</span> <input id="email_sender_name" name="email_sender_name" type="text" placeholder="Firstname, lastname" class="required" required></label>
                <label class="required">Email:<span class="required_star">*</span> <input id="email_sender_email" name="email_sender_email" type="email" class="required" required placeholder="example@email.com"></label>
                <label class="required">Subject:<span class="required_star">*</span> <input id="email_subject" name="email_subject" type="subject" required placeholder="Message Subject" maxlength="78"></label>
                <label class="required">Message:<span class="required_star">*</span> <textarea id="email_body" name="email_body" id="email-body" cols="30" rows="10" class="required" required placeholder="Lorem ipsum dolor sit amet..."></textarea></label>
                <button type="reset" value="Reset">Reset</button>
                <button type="submit" value="Submit">Submit</button>
            </fieldset>
        </form>
        <p>The Internet is a public forum and electronic information can be intercepted. For reasons of security and privacy, we ask that you not send us any personal or confidential information, such as your Social Insurance Number (SIN), home or business address.</p>
        </div>
    </main>
    <?php include $_SERVER['DOCUMENT_ROOT']."/en-footer.php" ?>
</body>
</html>