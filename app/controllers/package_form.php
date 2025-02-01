<?php
// Include Composer's autoloader
require ($_SERVER['DOCUMENT_ROOT'] . '/app/vendor/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['package-enquiry-btn'])) {
    // Sanitize and collect form inputs
    $packageId = htmlspecialchars($_POST['package-id']);
    $packageName = htmlspecialchars($_POST['package-name']);
    $packagePage = htmlspecialchars($_POST['package-page']);
    $fullName = htmlspecialchars($_POST['full-name']);
    $phoneNo = htmlspecialchars($_POST['phone-no']);
    $email = htmlspecialchars($_POST['email']);
    $rooms = htmlspecialchars($_POST['rooms']);
    $location = htmlspecialchars($_POST['location']);

    // Email content
    $emailBody = "
        <h2>Package Enquiry Details</h2>
        <p><strong>Full Name:</strong> $fullName</p>
        <p><strong>Phone Number:</strong> $phoneNo</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Number of Rooms:</strong> $rooms</p>
        <p><strong>Current Location:</strong> $location</p>
        <p><strong>Package ID:</strong> $packageId</p>
        <p><strong>Package Name:</strong> $packageName</p>
        <p><strong>Package Page:</strong> $packagePage</p>
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
        $mail->Subject = 'New Package Enquiry - ' . uniqid();
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
