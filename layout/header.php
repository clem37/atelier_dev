<!doctype html>
  <html>
  <head>
  <meta charset="UTF-8"> <!-- Langue de référence -->
  <meta name="description" content="Site apcards">
  
  <title>Ap Cards</title>
  
      <!-- BALISE HTML5 VIEUX NAVIGATEUR-->
          <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->
      
      
          
  <link rel="stylesheet" type="text/css" href="css/normalize.css">
      <link rel="stylesheet" type="text/css" href="css/style.css">
      
      <script src="js/jquery-1.11.3.min.js" type="text/javascript"></script>
    <script src="js/jssor.slider-22.2.7.mini.js" type="text/javascript"></script>
      <script type="text/javascript" src="js/script.js"></script>
      
      <!-- IMPERATIF POUR LE RESPONSIVE WEBDESIGN -->
      <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0"> <!-- meta à mettre absolument pour bien que tout se redimensionne -->
      
      </head>
      
      <body>
          
           <header class="grid">
               <nav id="myNav" class="overlay">
                   <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
               <ul class="overlay-content">
                   <li>
                   <a href="#">Accueil</a>
                   </li>
                   
                   <li>
                   <a href="#">Société</a>
                       <ul>
                        <li><a href="#">Métier</a></li>
                        <li><a href="#">Charte-Environnement</a></li>
                        
                      </ul>
                   </li>
                   
                   <li>
                   <a href="#">Produits</a>
                       <ul>
                        <li><a href="#">Porte Badge</a></li>
                        <li><a href="#">Protège Carte</a></li>
                        <li><a href="#">Sécuritaire</a></li>
                        <li><a href="#">Gamme RFID WALL</a></li>
                        <li><a href="#">Produit sur mesure</a></li>
                        <li><a href="#">Promotions</a></li>
                        
                      </ul>
                   </li>
                   
                   <li>
                   <a href="#">Contact</a>
                   </li>
                   
                   <li>
                   <a href="#">Accès réservé</a>
                   </li>
                </ul>
               </nav>
               <img src=images/menu_hamburger.png onclick="openNav()" id="menu-hamburger">
               
               <nav class="langues">
               <a href="#">FR</a>
                   <a href="#">EN</a>
               </nav>
               
               <h1 class="hidden_text">LOGO</h1>
               
              <form method="post" action="">
               <p class="hidden_text">img</p>
                
                   <input name="mail" type="text" id="mail" value="mail">
                    <input name="mdp" type="text" id="mdp" value="mdp">
                    <input name="connexion" type="submit" value="OK" id="ok">
                    <a href="#">Mot de passe ?</a>
                </form>
              
          </header>
