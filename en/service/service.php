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
      echo '<!DOCTYPE html>
     <html>
       <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <title>Successful message</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
         <link rel="stylesheet" href="../../css/brumker.css">
         <link rel="icon" href="../../assets/imagenes/brumker_flavicon.png" type="image/png">
         <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       </head>

        <body>
          <header>
            <div class="row container">
              <div class="col s12">
                <a href="../index.html" class="teal-text text-lighten-2"><i class="material-icons">keyboard_return</i><p>Back to Brumker.com</p></a>
              </div>
            </div>
          </header>

          <main class="container">
           <div class="row">
             <div class="col s12 center-align">
               <h6 class="grey-text text-darken-3">Your message has been successfully sent</h6>
               <p class="grey-text">We will respond as soon as possible.</p>
             </div>
           </div>
          </main>

          <footer>
            <div class="container">
              <div class="row">
                <div class="col l6 m8 s12">
                  <img class="responsive-img" id="logo_foot" src="../../assets/imagenes/brumker_logo_blanco.png" alt="Brumker_logo">
                  <h1 class="center-align white-text">Design for future.</h1>
                </div>
                <div class="col l4 m6 s12">
                  <h2 class="white-text">Contact us</h2>
                  <ul>
                    <li><i class="material-icons">email</i> info@brumker.com</li>
                    <li><i class="material-icons">smartphone</i> +57 319 2701288</li>
                    <li><i class="material-icons">place</i> Cra 80 #47-52 (Medellín-Colombia)</li>
                  </ul>
                </div>
                <div class="col l2 m6 s12">
                  <h2 class="white-text">Follow us on:</h2>
                  <ul>
                    <li><a class="hvr-push" id="fb_foot" target="_blank" href="https://www.facebook.com/brumkerStudios/"></a></li>
                    <li><a class="hvr-push" id="insta_foot" target="_blank" href="https://www.instagram.com/brumker.studios/"></a></li>
                    <li><a class="hvr-push" id="you_foot" target="_blank" href="https://www.youtube.com/channel/UCVwie1L37KcclACyCh6mKEw"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </footer>

          <div class="footer-copyright">
            <div class="container">
              <div class="row">
                <div class="col l6 m8 s12">
                  <h1><i class="material-icons md-18">copyright</i> 2017 Brumker All rights reserved</h1>
                </div>
                <div class="col l4 offset-l2 m4 s12">
                  <h1><a class="white-text" href="../terminos-y-condiciones.html">Terms and Conditions</a></h1>
                </div>
              </div>
            </div>
          </div>

          <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
        </body>
      </html>';
     } else {
       '<!DOCTYPE html>
       <html>
         <head>
           <meta charset="utf-8">
           <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
           <title>Failed message</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
           <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
           <link rel="stylesheet" href="../../css/brumker.css">
           <link rel="icon" href="../../assets/imagenes/brumker_flavicon.png" type="image/png">
           <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
         </head>

          <body>
            <header>
              <div class="row container">
                <div class="col s12">
                  <a href="../index.html" class="teal-text text-lighten-2"><i class="material-icons">keyboard_return</i><p>Back to Brumker.com</p></a>
                </div>
              </div>
            </header>

            <main class="container">
             <div class="row">
               <div class="col s12 center-align">
               <h6 class="grey-text text-darken-3">:( Something went wrong.</h6>
               <p class="grey-text">go back and try again!</p>
               </div>
             </div>
            </main>

            <footer>
              <div class="container">
                <div class="row">
                  <div class="col l6 m8 s12">
                    <img class="responsive-img" id="logo_foot" src="../../assets/imagenes/brumker_logo_blanco.png" alt="Brumker_logo">
                    <h1 class="center-align white-text">Design for future.</h1>
                  </div>
                  <div class="col l4 m6 s12">
                    <h2 class="white-text">Contact us</h2>
                    <ul>
                      <li><i class="material-icons">email</i> info@brumker.com</li>
                      <li><i class="material-icons">smartphone</i> +57 319 2701288</li>
                      <li><i class="material-icons">place</i> Cra 80 #47-52 (Medellín-Colombia)</li>
                    </ul>
                  </div>
                  <div class="col l2 m6 s12">
                    <h2 class="white-text">Follow us on:</h2>
                    <ul>
                      <li><a class="hvr-push" id="fb_foot" target="_blank" href="https://www.facebook.com/brumkerStudios/"></a></li>
                      <li><a class="hvr-push" id="insta_foot" target="_blank" href="https://www.instagram.com/brumker.studios/"></a></li>
                      <li><a class="hvr-push" id="you_foot" target="_blank" href="https://www.youtube.com/channel/UCVwie1L37KcclACyCh6mKEw"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </footer>

            <div class="footer-copyright">
              <div class="container">
                <div class="row">
                  <div class="col l6 m8 s12">
                    <h1><i class="material-icons md-18">copyright</i> 2017 Brumker All rights reserved</h1>
                  </div>
                  <div class="col l4 offset-l2 m4 s12">
                    <h1><a class="white-text" href="../terminos-y-condiciones.html">Terms and Conditions</a></h1>
                  </div>
                </div>
              </div>
            </div>

            <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
          </body>
        </html>';
     }
  }
?>
