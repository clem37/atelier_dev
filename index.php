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
          
          <main>
              
              <div id="jssor_1">
 
        <div data-u="slides" class="slides" >
            <div>
                <img  src="images/slider1.jpg" />
                
            </div>
            <div>
                <img src="images/slider2.jpg" />
            </div>
            
        </div>

        
    </div>
          
          <section class="produits clearfix grid">
              
              <article class="article1 clearfix">
              <h1>Porte badge</h1>
                  <hr class="soulignage">
                  <img src="images/produit1.jpg">
                  <p>Découvrez notre gamme complète de porte badges rigides injectés haute qualité, protection 2 faces d'1 ou 2 badges</p>
                  <a href="#" class="btn">en savoir +</a>
              </article>
              
              <article class="article2">
              <h1>Protège carte</h1>
                  <hr class="soulignage">
                  <img src="images/produit2.jpg">
                  <p>Découvrez notre gamme complète de porte-cartes rigides injectés haute qualité, pour 1 ou 2 cartes</p>
                  <a href="#" class="btn">en savoir +</a>
              </article>
              
              <article>
              <h1>RFID wall</h1>
                  <hr class="soulignage">
                  <img src="images/produit3.jpg">
                  <p>Découvrez notre gamme de protection RFID WALL : protège-passeport, protège-cartes pour 1 ou 2 cartes</p>
                  <a href="#" class="btn">en savoir +</a>
              </article>
              
              <a href="#"><article class="promotions">
              <div class="bandeau"><h1>promotions</h1></div>
                  <p>retrouvez toutes nos offres en cours</p>
                  </article></a>
              
          </section>
              
              <div class="bg_grey">
              <section class="grid services clearfix">
                  
                 <h1>Nos services</h1>
                  <hr class="soulignage">
                  
                  <article class="article1">
                      <p class="hidden_text">Image 1</p>
                      <a href="#">Impression numérique</a>
                  </article>
                  
                  <article class="article2">
                  
                      <p class="hidden_text">Image 2</p>
                      <a href="#">Sérigraphie / Tampographie</a>
                  </article>
                  
                  <article class="article3">
                  <p class="hidden_text">Image 3</p>
                      <a href="#">Gravure</a>
                  </article>
                  
                  <article class="article4">
                  <p class="hidden_text">Image 4</p>
                      <a href="#">Fabrication en coloris spécifique</a>
                  </article>
                  
                  <article class="article5">
                  <p class="hidden_text">Image 5</p>
                      <a href="#">Pose d'étiquettes</a>
                  </article>
                  
                  <article class="article6">
                  <p class="hidden_text">Image 6</p>
                      <a href="#">Fourniture de dépliants personnalisés</a>
                  </article>
                  
                  <article class="article7">
                  <p class="hidden_text">Image 7</p>
                      <a href="#">Mise sous blister</a>
                  </article>
              </section>
                  </div>
              
              <section class="grid actualites clearfix">
                  
                  
                  
                      
                 <h1>Nos actualités</h1>
                  <hr class="soulignage">
                  
                  <div class="clearfix">
                  <article class="clearfix">
                  <img src="images/actualite1.jpg">
                      <h2>Jugement cours d'appel de Rennes du 27/10/2015</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Lire la suite</a></p>
                  </article>
                  
                  <article class="clearfix">
                  <img src="images/actualite2.jpg">
                      <h2>Attestation protection RFID</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Lire la suite</a></p>
                  </article>
                  
                  <article>
                  <img src="images/actualite2.jpg">
                      <h2>RFID WALL</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... <a href="#">Lire la suite</a></p>
                  </article>
                  </div>
                  <a href="#" class="btn">Voir +</a>
              
              </section>
              
              <section class="bg_grey apropos">
              <div class="grid">
              <h1>à propos</h1>
                  <hr class="soulignage">
                  
                  <h2>Fabrication de porte cartes et porte Badge</h2>
                  
                  <p>Spécialisés dans la fabrication de porte cartes et porte Badge depuis 1987, l'équipe d'AP Cards conçoit et fabrique en France, en partenariat avec les professionnels de la carte, une gamme complète et innovante adaptée aux besoins des marchés du contrôle d'accès, des transports publiques, de la banque etc.. .
</p>
                  
                  <p>Les porte cartes et Porte Badges APCards sont réalisés dans des Ateliers ISO 9001 V2000, selon la Norme Reach, garantissant un haut niveau de qualité, une traçabilité et sécurité d'usage à leurs utilisateurs. La qualité de fabrication des protège cartes permet d'offrir une protection optimale de la carte et des informations et sont munis de frein de retenue la carte évitant la chute intempestive de celle-ci.
</p>
                  <p>Différents modèles pour 1, 2 ,3 ou 4 cartes sont disponibles en matériau transparent ou couleur, avec option anti RFID (marque déposée RFID Wall ), biodégradables etc.. Toute la gamme est personnalisable aux logos et couleurs clients.
</p>
                  <div class="clearfix">
                  <div class="contactez-nous">
                  <h2>Contactez-nous</h2>
                      <p>AP Cards, 3 rue Joseph Cugnot </p>
                      <p>35220 Chateaubourg - France</p>
                      <p>Email :<a href="mailto:info@apcards.fr"> info@apcards.fr</a></p>
                      <p>Tél : + 33 2 99 00 85 85</p>
                      <p>Fax : + 33 2 99 00 73 30</p>
                  </div>
                  
                  <div class="maps">
                  <img src="images/maps.jpg">
                  </div>
                  </div>
                  
                  <div class="clearfix">
                  <div class="echantillon">
                      <h2>Demande d'échantillon</h2>
                  <p>Si vous souhaitez recevoir des échantillons de la gamme de porte-badges/porte-cartes, veuillez s'il vous plaît remplir le formulaire.</p>
                      <a href="#" class="btn">Découvrir</a>
                  </div>
                  
                  <div class="metier">
                      <h2>Métier</h2>
                      <p>Forte d'une expérience industrielle exercée auprès de grands comptes, AP Cards est amenée à travailler au design et développement de nombreux produits.</p>
                      <a href="#" class="btn">Découvrir</a>
                  </div>
                      </div>
              </div>
          </section>
          
          
          
          </main>
          
          <footer>
          <div class="grid">
              <nav>
                <ul>
                  
                  <li><a href="#">Accueil /</a></li>
                    <li><a href="#">Partenaires /</a></li>
                    <li><a href="#">Contact /</a></li>
                    <li><a href="#">Plan du site /</a></li>
                    <li><a href="#">Référencement /</a></li>
                    <li><a href="#">Mentions Légales</a></li>
                  </ul>
                          </nav>
              
              <h1 class="hidden_text">LOGO</h1>
              
              <p>© Clémence Chassaing</p>
              
              
          </div>
          </footer>
      
          
         
          
          <script src="js/script.js"></script>
      </body>
      
      
      
</html>