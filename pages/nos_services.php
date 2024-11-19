<?php  
    require_once __DIR__ . "/../templates/header.php";
    require_once __DIR__ . "/../lib/services.php";


$counter = 0;
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
        <?php foreach ($services as $service) { 
            $serviceImage = getServiceImageById($pdo, $service['id']);
            ?>
            <div class="<?php echo $counter % 2 === 0 ? 'bg-white' : 'bg-black'; ?>">
                <article class="container-xl mx-auto py-5 row align-items-center">
                    <div class="col-12 col-lg-6 <?php echo $counter % 2 === 0 ? 'order-lg-1' : 'order-lg-2'; ?>">
                        <img src="<?php echo BASE_URL.$serviceImage['file_path']?>" class="img-fluid rounded" alt="Image représentant les services d'Arcadia">
                    </div>
                    <div class="col-12 col-lg-6 <?php echo $counter % 2 === 0 ? 'order-lg-2' : 'order-lg-1'; ?>">
                        <h2 class="title-div <?php echo $counter % 2 === 0 ? 'text-primary' : 'text-dark'; ?> pt-3 "><?=$service['name']?></h2>
                            <p class="<?php echo $counter % 2 === 0 ? 'text-body-tertiary' : 'text-white'; ?>">Profitez d’un moment de détente dans nos espaces de restauration. Nous proposons des menus variés élaborés avec des produits locaux et biologiques pour une pause gourmande en harmonie avec nos valeurs écologiques.</p>
                        
                        
                    </div>
                </article>
            </div>
            <?php $counter++;?>
            <?php }; ?>
    </section>
</main>
<?php  
    require_once __DIR__ . "/../templates/footer.php";
?>