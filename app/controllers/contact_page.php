<?php
// Include Composer's autoloader

require ($_SERVER['DOCUMENT_ROOT'] . '/app/vendor/autoload.php');


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact-form'])) {
    // Sanitize and collect form inputs
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);
   

    // Email content
    $emailBody = "
        <h2>Contact form submission</h2>
        <p><strong>Full Name:</strong> $name</p>
        <p><strong>Email:</strong> $phoneNo</p>
        <p><strong>Subject:</strong> $subject</p>
        <p><strong>Message:</strong> $message</p>
    ";

    // Create a new PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        // SMTP configuration
        $mail->isSMTP();
        $mail->Host = 'sh004.hostgator.in'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'noreply@tripcore.in';// email address
        $mail->Password = 'Srinagar@1234'; 
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //  SSL encryption
        $mail->Port = 465;

        // Email settings
        $mail->setFrom('noreply@tripcore.in', 'Kashmir tour package');
        $mail->addAddress('mohtashimanayat@gmail.com'); // Your email to receive the enquiries
        $mail->isHTML(true);
        $mail->Subject = 'Contact form submission - ' . uniqid();
        $mail->Body = $emailBody;

        // Send the email
        $mail->send();
        header("Location: " . $_SERVER['PHP_SELF'] . "?insert=true");
        exit();
   
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        header("Location: " . $_SERVER['PHP_SELF'] . "?error=true");
        exit();
    }
}
// Handle success or error message on GET request
if (isset($_GET['insert'])) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
               const successModal = new bootstrap.Modal(document.getElementById('successModal'));
                successModal.show();
            });
          </script>";
}

if (isset($_GET['error'])) {
    echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
               const errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                errorModal.show();
            });
          </script>";
}

// Clear the URL parameters after displaying the message
echo "<script>
        if(window.location.search.includes('insert=true') || window.location.search.includes('error=true')) {
            window.history.replaceState(null, null, window.location.pathname);
        }
      </script>";
?>
