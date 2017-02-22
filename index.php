<?php require_once "layout/header.php"; ?>

<?php require_once "model/database.php"; ?>

<?php $liste_services = getAllServices(); ?>

<?php $liste_actualites = getAllActualitesAfficher(); ?>

<?php $liste_categories = getAllCategories(); ?>


<main>

    <div id="jssor_1">

        <div data-u="slides" class="slides" >
            <div>
                <img src="images/slider1.jpg" />

            </div>
            <div>
                <img src="images/slider2.jpg" />
            </div>

        </div>


    </div>

    <section class="produits clearfix grid">

        <?php foreach ($liste_categories as $categorie) : ?>
            <article class="clearfix" style="margin-right: 25px;">
                <h1><?php echo $categorie['nom']; ?></h1>
                <hr class="soulignage">
                <img src="images/<?php echo $categorie['image']; ?>">
                <p><?php echo $categorie['description']; ?></p>
                <a href="#" class="btn">en savoir +</a>
            </article>
        <?php endforeach; ?>


        <a href="#"><article class="promotions">
                <div class="bandeau"><h1>promotions</h1></div>
                <p>retrouvez toutes nos offres en cours</p>
            </article></a>

    </section>

    <div class="bg_grey">
        <section class="grid services clearfix">

            <h1>Nos services</h1>
            <hr class="soulignage">

            <?php foreach ($liste_services as $service) : ?>
                <article>
                    <p class="hidden_text" style="background:url(uploads/<?php echo $service['picto']; ?>);background-repeat:no-repeat; background-position:center; height:100px; width:150px;">Image</p>
                    <a href="#"><?php echo $service['nom']; ?></a>
                </article>
            <?php endforeach; ?>

        </section>
    </div>

    <section class="grid actualites clearfix">

        <h1>Nos actualités</h1>
        <hr class="soulignage">

        <div class="clearfix">

            <?php foreach ($liste_actualites as $actualite) : ?>
                <article class="clearfix">
                    <img src="uploads/<?php echo $actualite['image']; ?>">
                    <h2><?php echo $actualite['titre']; ?></h2>
                    <p style="margin-bottom:10px;"><?php echo $actualite['date_creation_format']; ?></p>
                    <p><?php echo $actualite['description_courte']; ?><a href="#">Lire la suite</a></p>
                </article>
            <?php endforeach; ?>

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

<?php require_once'layout/footer.php'; ?>