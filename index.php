<?php 
 session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GO ONLINE</title>
    <meta name="description" content="Création de site web, Création de site vitrine, boutique e-commerce, avec react et next js. Assurez votre visibilité en ligne grace à une boutique e-commerce moderne qui répond à vos besoins spécifiques">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <?php include('include/Navbar.php');?>
        <main>
            <div class="sub-container-main-1">
                <div class="sub-container-main-2">
                    <h1 style="text-align: start;">Boutique en ligne et integration des moyens de paiement avec un budget plus légé !</h1>
                    <p style="font-size: 1.2rem;">Booster votre image de marque, augmenter votre taux de conversion, démarqué vous de vos concurents grâce à notre offre <strong> LEVEL UP</strong> qui vous propose la nouvelle et meilleure solution pour la création des sites web.</p>
                </div>

                <div class="sub-container-main-3">
                    <h3 style="font-size: 1.6rem;">Présentation de l'offre</h3>
                    <p style="font-size: 1.2rem; line-height: 1.6rem;">Avoir une boutique en ligne c’est bien mais avoir une boutique qui répond à des besoins spécifiques c’est encore mieux. Que vous soyez chef d’entreprise, entrepreneur, infopreneur, e-commerçant débutant ou professionnel, cette solution est faite pour vous.
                    Avec cette nouvelle solution de création de site internet (e-commerce, blog, site vitrine etc.), nous vous donnons la possibilité d’avoir des pages dynamiques et hyper-réactives avec des moyens de paiements intégrés ce qui améliore votre image perçue et la confiance envers votre marque tout en augmentant considérablement votre taux de conversion. </p>
                </div>

                <div id="a-propos" class="sub-container-main-4">
                    <h4 style="font-size: 1.2rem;">Pourquoi nous choisir ?</h4>
                    <p style="font-size: 1.2rem; line-height: 1.6rem;"><strong>LEVEL UP</strong> utilise La technologie Next js pour la création de vos sites web. Cette technologie de pointe offre une solution ultra moderne pour la création des sites web, applications web, boutiques e-commerce, page de vente, blog plus dynamique que les technologies classiques. Avec cette technologie, votre plateforme aura les bénéfices suivants : </p>
                </div>

                <div class="sub-container-main-5">
                    <p style="font-size: 1.3rem;"><strong>- Vitesse de chargement de vos pages 5 fois plus rapide</strong></p>
                    <p style="font-size: 1.2rem;"><strong>- Optimisation de vos pages pour le S.E.O</strong></p>
                    <p style="font-size: 1.2rem;"><strong>- Intégration des moyens de paiement locaux et internationnaux fluide et sécurisé :</strong></p>
                    <p style="font-size: 1.2rem;"><strong>- Design personnalisé et flexible à volonté </strong></p>

                </div>

            </div>
             <?php include('include/Offers.php');?>
             <?php include('include/Form.php');?>
             <a href="#contact" style="background-color: #f4cf00; color: black;" id="CTA">Souscrire à l'offre</a>
        </main>
   <script src="script.js"></script>
</body>
</html>