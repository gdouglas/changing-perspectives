<?php

/**
 *
 * URL: www.freecontactform.com
 *
 * Version: FreeContactForm Free V2.3
 *
 * Copyright (c) 2019 freecontactform.com
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 *
 * Notice: The free version is free to use, but all credit and references
 * to freecontactform.com must be kept intact.
 *
 *  If you want to remove the author link,
 *  please purchase an unbranded version from: https://www.freecontactform.com/unbranded_form.php
 *  Or upgrade to the more professional version at: https://www.freecontactform.com/responsive_form.php
 */

$return_error = "";
if (isset($_POST['email_sender_email'])) {
    include 'form_settings.php';

    function died($error)
    {
        global $return_error;
        // $_SESSION[]
        $return_error = "<div class='error narrow-container'>";
        $return_error .= "<p class='error-title'>Please fix these errors to send your message.</p>";
        $return_error .= "<ol>$error</ol>";
        $return_error .= "</div>";
        echo $return_error;
    }

    if (
        !isset($_POST['email_sender_name']) ||
        !isset($_POST['email_sender_email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['email_body'])
    ) {
        $error_message .= "Something went wrong with the submission. Please try again.";
    }

    $full_name = $_POST['email_sender_name']; // required
    $email_from = $_POST['email_sender_email']; // required
    $subject = "Changing Perspectives feedback | " . $_POST['subject']; // required
    $comments = $_POST['email_body']; // required

    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
    if (preg_match($email_exp, $email_from) == 0) {
        $error_message .= "<li>The Email Address you entered does not appear to be valid.</li>";
    }
    if (strlen($full_name) < 2) {
        $error_message .= "<li>Your Name does not appear to be valid.</li>";
    }
    if (strlen($comments) < 2) {
        $error_message .= "<li>The Comments you entered do not appear to be valid.</li>";
    }

    if (strlen($error_message) > 0) {
        died($error_message);
    } else {
        $email_message = "Form details below.\r\n";

        function clean_string($string)
        {
            $bad = array("content-type", "bcc:", "to:", "cc:");
            return str_replace($bad, "", $string);
        }

        $email_message .= "Full Name: " . clean_string($full_name) . "\r\n";
        $email_message .= "Email: " . clean_string($email_from) . "\r\n";
        $email_message .= "Message: " . clean_string($comments);
        $confirm_email_message = "Thank you for your email about the Changing Perspectives website. We are looking forward to reviewing your message.";
        $headers = array('From: ' . $email_from . "\r\n" .
            'Reply-To: donotreply@grmdgs.com ' . "\r\n" .
            'X-Mailer: PHP/' . phpversion());
        $headers = implode("\r\n", $headers);

        if (mail($email_to, $subject, $email_message, $headers)) {
            //
        } else {
            $errorMessage = 'Oops, something went wrong. Please try again later';
            var_dump($error_message);
            die();
        }
        if ( mail($email_from, "re: " . $subject, $confirm_email_message, $headers) ) {
            
        } else {
            $errorMessage = 'Oops, something went wrong. Responding to you. Please try again later';
            var_dump($error_message);
            die();
        }
        
        header("Location: $thankyou");
        echo "<script>location.replace('$thankyou')</script>";
    }
}
// die();
