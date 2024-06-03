<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $moveInDate = $_POST['moveInDate'];
    $soberDate = $_POST['soberDate'];
    $drugOfChoice = $_POST['drugOfChoice'];
    $medications = $_POST['medications'];
    $treatment = $_POST['treatment'];
    $recoveryCenter = $_POST['recoveryCenter'];
    $referredBy = $_POST['referredBy'];
    $otherInfo = $_POST['otherInfo'];

    // Compose email message
    $to = 'destinyestates1@gmail.com';
    $subject = 'New Application Form Submission';
    $message = "First Name: $firstName\n"
        . "Last Name: $lastName\n"
        . "Phone: $phone\n"
        . "Email: $email\n"
        . "Date of Birth: $dob\n"
        . "Desired Move In Date: $moveInDate\n"
        . "Clean/Sober Date: $soberDate\n"
        . "Drug of Choice: $drugOfChoice\n"
        . "Prescription Medications: $medications\n"
        . "In Treatment or Attending IOP/PHP: $treatment\n"
        . "Treatment/Recovery Center: $recoveryCenter\n"
        . "Referred By: $referredBy\n"
        . "Other Information: $otherInfo";

    // Send email
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo '<script>alert("Your application has been submitted successfully. We will contact you soon."); window.location.href = "apply.html";</script>';
    } else {
        echo '<script>alert("There was a problem submitting your application. Please try again later."); window.location.href = "apply.html";</script>';
    }
}
?>
