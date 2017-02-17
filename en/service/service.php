<?php
  $first_name = $_POST['first_name'];
  $enterprise = $_POST['enterprise'];
  $email = $_POST['email'];
  $service = $_POST['service'];
  $tel = $_POST['tel'];
  $cel = $_POST['cel'];
  $budget = $_POST['budget'];
  $budget_check = $_POST['budget_check'];
  $mesage = $_POST['mesage'];
  $from = 'From: www.brumker.com';
  $to = 'info@brumker.com';
  $subject = 'we want your service';

  $body = "From: $first_name\n Enterprise: $enterprise\n E-Mail: $email\n Service: $service\n Tel: $tel\n Cel: $cel\n Budget: $budget\n Budget_check: $budget_check\n mesage:\n $mesage";

  if ($_POST['submit']) {
    if (mail ($to, $subject, $body, $from)) {
         echo '<p>Tu mensaje ha sido enviado éxitosamente</p>';
     } else {
         echo '<p>Something went wrong, go back and try again!</p>';
     }
  }
?>
