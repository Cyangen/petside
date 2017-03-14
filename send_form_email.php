<?php
if(isset($_POST['submit'])){
    $to = "matteoratti90@gmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $msn = $_POST['msg'];
    $subject = "Form submission";
    $message = $name . " wrote the following:" . "\n\n" . $msn;

    $headers = "From:" . $from;
    if(mail($to,$subject,$message,$headers)){
        mail($to,$subject,$message,$headers);
        header('location:contact_success.html');
    };
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
}
?>