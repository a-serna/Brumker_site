<?php
  $first_name = $_POST['first_name'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $textarea1 = $_POST['textarea1'];
  $from = 'From: www.brumker.com';
  $to = 'info@brumker.com';
  $subject = 'Hello';

  $body = "From: $first_name\n E-Mail: $email\n Tel: $tel\n Textarea1:\n $textarea1";

  if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
         echo '<p>Tu mensaje ha sido enviado éxitosamente</p>';
     } else {
         echo '<p>Something went wrong, go back and try again!</p>';
     }
  }
?>
