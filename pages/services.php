<?php  
    require_once __DIR__ . "/../templates/header.php";
?>
<main>
    <div class="hero-scene">
        <div class="">
            <div class="hero-scene-content d-flex align-items-center justify-content-center">
                <h1 class="text-primary text-center">NOS SERVICES</h1>
            </div>
        </div>
    </div>
    <section>
        <div class="container-xl text-body-tertiary justify-text pt-5">
            <p>Le Zoo Arcadia met tout en œuvre pour offrir une expérience unique et enrichissante à chaque visiteur. Nous avons conçu une gamme de services pour rendre votre visite confortable, ludique et éducative, tout en restant fidèles à nos valeurs écologiques et à notre mission de sensibilisation à la biodiversité.</p>
        </div>
        <article class="container-xl mx-auto py-5 row align-items-center">
            <div class="col-12 col-lg-6 order-lg-2">
                <img src="<?php echo BASE_URL; ?>/assets/images/services/restauration.jpg" class="img-fluid rounded" alt="Image représentant les services d'Arcadia">
            </div>
            <div class="col-12 col-lg-6">
                <h2 class="title-div text-primary pt-3 ">La restauration</h2>
                    <p class="text-body-tertiary">Profitez d’un moment de détente dans nos espaces de restauration. Nous proposons des menus variés élaborés avec des produits locaux et biologiques pour une pause gourmande en harmonie avec nos valeurs écologiques.</p>
                
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </article>
        <div class="bg-black">
            <article class="container-xl mx-auto py-5 row align-items-center">
                <div class="col-12 col-lg-6 order-lg-2">
                    <img src="<?php echo BASE_URL; ?>/assets/images/services/visite_guidee.jpg" class="img-fluid rounded" alt="Image représentant les services d'Arcadia">
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="title-div text-dark pt-3 ">Visites guidées des habitats</h2>
                    <div class="text-white">
                        <p>Découvrez les secrets des habitats de nos animaux avec nos guides passionnés. Nos visites guidées vous offrent une immersion unique dans la vie des animaux et vous informent sur les efforts de conservation du zoo.</p>
                    </div>
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-dark">En savoir plus</a>
                    </div>
                </div>
            </article>
        </div>
        <article class="container-xl mx-auto py-5 row align-items-center">
            <div class="col-12 col-lg-6 order-lg-2">
                <img src="<?php echo BASE_URL; ?>/assets/images/services/petit_train.jpg" class="img-fluid rounded" alt="Image représentant les services d'Arcadia">
            </div>
            <div class="col-12 col-lg-6">
                <h2 class="title-div text-primary pt-3 ">Petit train écologique</h2>
                <div class="text-body-tertiary">
                    <p>Parcourez le zoo en tout confort grâce à notre petit train écologique. Ce tour complet est adapté pour tous, petits et grands, et vous offre une vue d’ensemble de chaque habitat et de ses résidents.</p>
                    
                </div>
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary">En savoir plus</a>
                </div>
            </div>
        </article>
        <div class="bg-black">
            <article class="container-xl mx-auto py-5 row align-items-center">
                <div class="col-12 col-lg-6 order-lg-2">
                    <img src="<?php echo BASE_URL; ?>/assets/images/services/ateliers_enfant.jpg" class="img-fluid rounded" alt="Image représentant les services d'Arcadia">
                </div>
                <div class="col-12 col-lg-6">
                    <h2 class="title-div text-dark pt-3 ">Ateliers pédagogiques pour enfants</h2>
                    <div class="text-white">
                        <p>Sensibilisez les plus jeunes à la protection de la biodiversité avec nos ateliers pédagogiques. Les enfants participent à des activités interactives comme la création de refuges pour insectes et l’apprentissage du recyclage, le tout de manière ludique.</p>
                    </div>
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-dark">En savoir plus</a>
                    </div>
                </div>
            </article>
        </div>
    </section>
</main>
<?php  
    require_once __DIR__ . "/../templates/footer.php";
?>