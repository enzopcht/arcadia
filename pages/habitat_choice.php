<?php  
    require_once __DIR__ . "/../templates/header.php";
?>
<main>
    <article class="container-xl mx-auto py-5 row align-items-center">
        <div class="col-12 col-lg-6 order-lg-2">
            <img src="<?php echo BASE_URL; ?>/assets/images/habitats/savane_card.jpg" class="img-fluid rounded" alt="Image représentant la devanture du Zoo Arcadia">
        </div>
        <div class="col-12 col-lg-6">
            <h2 class="title-div text-primary pt-3 ">La savane</h2>
            <p class="text-body-tertiary">La savane du Zoo Arcadia est un espace vaste et ensoleillé, inspiré des paysages typiques d’Afrique. Cet habitat recrée la plaine ouverte des savanes africaines, avec de larges espaces herbeux parsemés d’acacias, où les lions, les girafes et d’autres espèces emblématiques peuvent se déplacer librement. Les visiteurs peuvent observer les interactions naturelles entre les différentes espèces et découvrir leur mode de vie. La savane est conçue pour fournir aux animaux suffisamment d’espace pour exprimer leurs comportements naturels, tout en étant proche de leur environnement d’origine. Nos panneaux éducatifs et nos guides enrichissent la visite avec des anecdotes sur la vie sauvage, les comportements sociaux, et les efforts de conservation pour protéger ces magnifiques espèces dans la nature.</p>
        </div>
    </article>
    <section class="container-xl">
        <h2 class="text-dark">Les animaux</h2>
        <div class="row gap-2 justify-content-center justify-content-lg-evenly">
            <div class="card shadow col-5 col-lg-3 p-0">
                <div class="card-header text-center text-white bg-dark">
                    Simba
                </div>
                <img src="<?php echo BASE_URL; ?>/assets/images/animaux/lion_simba.jpg"  alt="Image de notre habitat savane">
                <div class="card-body text-center">
                    <a href="<?php echo route('animal_choice'); ?>" class="btn btn-dark">Découvrir</a>
                </div>
            </div>
            <div class="card shadow col-5 col-lg-3 p-0">
                <div class="card-header text-center text-white bg-dark">
                    Zig Zag
                </div>
                <img src="<?php echo BASE_URL; ?>/assets/images/animaux/zebre_zigzag.jpg"  alt="Image de notre habitat savane">
                <div class="card-body text-center">
                    <a href="<?php echo route('animal_choice'); ?>" class="btn btn-dark">Découvrir</a>
                </div>
            </div>
            <div class="card shadow col-5 col-lg-3 p-0">
                <div class="card-header text-center text-white bg-dark">
                    Kaku
                </div>
                <img src="<?php echo BASE_URL; ?>/assets/images/animaux/girafe_kaku.jpg"  alt="Image de notre habitat savane">
                <div class="card-body text-center">
                    <a href="<?php echo route('animal_choice'); ?>" class="btn btn-dark">Découvrir</a>
                </div>
            </div>
        </div>
    </section>
        
</main>
<?php  
    require_once __DIR__ . "/../templates/footer.php";
?>