<?php
// Handle form submission
$message_sent = false;
$error = "";
 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST["message"]));
 
    if (!empty($name) && !empty($email) && !empty($message)) {
        $to = "your-email@example.com"; // Change to your email
        $subject = "New Contact Message from $name";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
 
        if (mail($to, $subject, $body)) {
            $message_sent = true;
        } else {
            $error = "Sorry, we couldn't send your message.";
        }
    } else {
        $error = "Please fill all fields.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Rehan.Education</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
 
<header>
    <h1 style="color:#00f5d4;">Rehan.Education</h1>
    <nav>
        <a href="index.php">Home</a>
        <a href="curriculum.php">Curriculum</a>
        <a href="facilitators.php">Facilitators</a>
        <a href="contact.php">Contact Us</a>
    </nav>
</header>
 
<main style="max-width:800px; margin:auto; padding:20px;">
    <h2>Contact Us</h2>
    <p>We’d love to hear from you. Get in touch via the form below or reach us directly.</p>
 
    <div style="margin-bottom:20px;">
        <p><strong>Phone / WhatsApp:</strong> +44 7418 359852</p>
        <p><strong>Email:</strong> info@rehan.education</p>
        <p><strong>Address:</strong> Karachi, Pakistan</p>
    </div>
 
    <?php if ($message_sent): ?>
        <p style="color:green;">✅ Thank you! Your message has been sent.</p>
    <?php elseif (!empty($error)): ?>
        <p style="color:red;">❌ <?= $error ?></p>
    <?php endif; ?>
 
    <form action="" method="post" style="background:#f9f9f9; padding:20px; border-radius:10px;">
        <label>Your Name:</label>
        <input type="text" name="name" required style="width:100%; padding:8px; margin-bottom:10px;">
 
        <label>Your Email:</label>
        <input type="email" name="email" required style="width:100%; padding:8px; margin-bottom:10px;">
 
        <label>Your Message:</label>
        <textarea name="message" rows="5" required style="width:100%; padding:8px; margin-bottom:10px;"></textarea>
 
        <button type="submit" style="background:#00f5d4; padding:10px 20px; border:none; cursor:pointer;">Send Message</button>
    </form>
 
    <div style="text-align:center; margin-top:20px;">
        <img src="assets/images/contact_3d.svg" alt="3D Contact Illustration" style="max-width:250px;">
    </div>
</main>
 
<footer style="text-align:center; padding:10px; margin-top:20px; background:#222; color:#fff;">
    &copy; <?php echo date("Y"); ?> Rehan.Education. All rights reserved.
</footer>
 
</body>
</html>
 
