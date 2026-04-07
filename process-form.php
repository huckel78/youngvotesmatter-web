<?php
// Initialize variables for the UI feedback
$status = "";
$feedback_message = "";

// Check if the form was submitted via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Sanitize and Validate Inputs (Security First)
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $subject_type = strip_tags(trim($_POST["subject"]));
    $message = trim($_POST["message"]);

    // UPDATED: Destino del correo electrónico
    $recipient = "saxh00@gmail.com"; 

    // 2. Check for empty fields or invalid email
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = "error";
        $feedback_message = "Oops! There was a problem with your submission. Please ensure all fields are filled out correctly and your email is valid.";
    } else {
        // 3. Format the Email Content
        $email_subject = "New Website Inquiry: [" . strtoupper($subject_type) . "]";
        
        $email_content = "You have received a new message from the Vote For Democracy contact form.\n\n";
        $email_content .= "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Topic: $subject_type\n\n";
        $email_content .= "Message:\n$message\n";

        // 4. Set Headers
        // Nota: Es mejor usar un correo asociado a tu dominio en el "From" para evitar filtros de spam de Gmail
        $email_headers = "From: Project OMega Website <noreply@youngvotesmatter.com>\r\n";
        $email_headers .= "Reply-To: $email\r\n";
        $email_headers .= "X-Mailer: PHP/" . phpversion();

        // 5. Send the Email
        if (mail($recipient, $email_subject, $email_content, $email_headers)) {
            $status = "success";
            $feedback_message = "Thank you, $name! Your message has been sent successfully. Our team will review it and get back to you shortly.";
        } else {
            $status = "error";
            $feedback_message = "Oops! Something went wrong on our server, and we couldn't send your message. Please try again later.";
        }
    }
} else {
    // If someone visits this page directly without submitting the form
    $status = "error";
    $feedback_message = "There was a problem with your submission. Please go back and try again.";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission | Project OMega</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,700;1,300&family=Playfair+Display:wght@700;900&display=swap" rel="stylesheet">
</head>
<body>

    <?php include 'header.php'; ?>

    <main id="main-content">
        <section class="hero hero-internal" style="min-height: 70vh;">
            <div class="hero-bg"></div>
            <div class="hero-stars" id="stars-container" aria-hidden="true"></div>
            
            <div style="position: relative; z-index: 1; max-width: 600px; margin: 0 auto; background: rgba(255, 255, 255, 0.02); border: 1px solid rgba(255, 255, 255, 0.08); padding: 4rem; border-radius: 16px; backdrop-filter: blur(10px);">
                
                <?php if ($status == "success"): ?>
                    <div style="font-size: 4rem; margin-bottom: 1rem;">✅</div>
                    <h1 class="hero-title" style="font-size: 3rem;">MESSAGE <span class="accent">SENT</span></h1>
                    <p style="color: rgba(255, 255, 255, 0.8); font-size: 1.1rem; margin-bottom: 2rem;"><?php echo $feedback_message; ?></p>
                    <a href="index.php" class="btn btn-primary">Return Home</a>
                <?php else: ?>
                    <div style="font-size: 4rem; margin-bottom: 1rem;">⚠️</div>
                    <h1 class="hero-title" style="font-size: 3rem;">SUBMISSION <span class="accent">FAILED</span></h1>
                    <p style="color: rgba(255, 255, 255, 0.8); font-size: 1.1rem; margin-bottom: 2rem;"><?php echo $feedback_message; ?></p>
                    <a href="contact.php" class="btn btn-outline">Try Again</a>
                <?php endif; ?>

            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>

</body>
</html>
