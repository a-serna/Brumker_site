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
      echo '<!DOCTYPE html>
     <html>
       <head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
         <title>Mensaje exitoso</title>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
         <link rel="stylesheet" href="./css/brumker.css">
         <link rel="icon" href="./assets/imagenes/brumker_flavicon.png" type="image/png">
         <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
       </head>

        <body>
          <header>
            <div class="row container">
              <div class="col s12">
                <a href="index.html" class="teal-text text-lighten-2"><i class="material-icons">keyboard_return</i><p>Regresar a Brumker.com</p></a>
              </div>
            </div>
          </header>

          <main class="container">
           <div class="row">
             <div class="col s12 center-align">
               <h6 class="grey-text text-darken-3">Tu mensaje ha sido enviado éxitosamente</h6>
               <p class="grey-text">Responderemos lo antes posible</p>
             </div>
           </div>
          </main>

          <footer>
            <div class="container">
              <div class="row">
                <div class="col l6 m8 s12">
                  <img class="responsive-img" id="logo_foot" src="./assets/imagenes/brumker_logo_blanco.png" alt="Brumker_logo">
                  <h1 class="center-align white-text">Design for future.</h1>
                </div>
                <div class="col l4 m6 s12">
                  <h2 class="white-text">Contáctanos</h2>
                  <ul>
                    <li><i class="material-icons">email</i> info@brumker.com</li>
                    <li><i class="material-icons">smartphone</i> +57 319 2701288</li>
                    <li><i class="material-icons">place</i> Cra 80 #47-52 (Medellín-Colombia)</li>
                  </ul>
                </div>
                <div class="col l2 m6 s12">
                  <h2 class="white-text">Siguenos en:</h2>
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
                  <h1><i class="material-icons md-18">copyright</i> 2017 Brumker todos los derechos reservados</h1>
                </div>
                <div class="col l4 offset-l2 m4 s12">
                  <h1><a class="white-text" href="./terminos-y-condiciones.html">Términos y condiciones</a></h1>
                </div>
              </div>
            </div>
          </div>

          <script type="text/javascript" src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js"></script>
        </body>
      </html>';
     } else {
      echo '<!DOCTYPE html>
      <html>
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
          <title>Mensaje fallido</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/css/materialize.min.css">
          <link rel="stylesheet" href="./css/brumker.css">
          <link rel="icon" href="./assets/imagenes/brumker_flavicon.png" type="image/png">
          <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        </head>

         <body>
           <header>
             <div class="row container">
               <div class="col s12">
                 <a href="./index.html" class="teal-text text-lighten-2"><i class="material-icons">keyboard_return</i><p>Regresar a Brumker.com</p></a>
               </div>
             </div>
           </header>

           <main class="container">
            <div class="row">
              <div class="col s12 center-align">
              <h6 class="grey-text text-darken-3">:( algo salió mal lo sentimos</h6>
              <p class="grey-text">Por favor regresa e intenta de nuevo</p>
              </div>
            </div>
           </main>

           <footer>
             <div class="container">
               <div class="row">
                 <div class="col l6 m8 s12">
                   <img class="responsive-img" id="logo_foot" src="./assets/imagenes/brumker_logo_blanco.png" alt="Brumker_logo">
                   <h1 class="center-align white-text">Design for future.</h1>
                 </div>
                 <div class="col l4 m6 s12">
                   <h2 class="white-text">Contáctanos</h2>
                   <ul>
                     <li><i class="material-icons">email</i> info@brumker.com</li>
                     <li><i class="material-icons">smartphone</i> +57 319 2701288</li>
                     <li><i class="material-icons">place</i> Cra 80 #47-52 (Medellín-Colombia)</li>
                   </ul>
                 </div>
                 <div class="col l2 m6 s12">
                   <h2 class="white-text">Siguenos en:</h2>
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
                   <h1><i class="material-icons md-18">copyright</i> 2017 Brumker todos los derechos reservados</h1>
                 </div>
                 <div class="col l4 offset-l2 m4 s12">
                   <h1><a class="white-text" href="./terminos-y-condiciones.html">Términos y condiciones</a></h1>
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
