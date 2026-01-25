<?php if($_SERVER["REQUEST_METHOD"] == "POST"){
        $to = "prasad.k24@gmail.com"; 
        $subject = "New Contact Form Submission"; 
        $message = "School Name: " . $_POST['school-name'] . "\n"; 
        $message = "Full Name: " . $_POST['full-name'] . "\n"; 
        $message = "Designation: " . $_POST['designation'] . "\n"; 
        $message .= "Phone: " . $_POST['phone'] . "\n"; 
        $message .= "Email: " . $_POST['email'] . "\n"; 
        $message .= "Message: " . $_POST['comments']; 
        $headers = "From: noreply@accesscompany.in"; 
        mail($to, $subject, $message, $headers); 
        echo "Message sent successfully!"; 
} ?>