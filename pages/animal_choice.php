<?php  
    require_once __DIR__ . "/../templates/header.php";
?>

<main>
    <section class="container-xl p-2">
        <div class="row align-items-center">
            <div class="col-5">
                <img src="<?php echo BASE_URL; ?>/assets/images/animaux/lion_simba.jpg"  alt="Image de notre lion Simba" class="img-fluid rounded shadow">
            </div>
            <div class="col-7">
                <p><span class="text-primary">Prénom : </span>Simba</p>
                <p><span class="text-primary">Race : </span>Lion d'Afrique</p>
                <p><span class="text-primary">Habitat : </span><a href="<?php echo route('habitat_choice'); ?>">Savane</a></p>
                <p><span class="text-primary">Etat : </span>Parfait</p>
            </div>
        </div>
        <div class="text-body-tertiary justify-text">
            <p>Simba est un majestueux lion de l’espèce des lions d’Afrique, connu pour sa crinière dense et son allure imposante. Né dans le parc, il est devenu l’un des animaux les plus emblématiques du Zoo Arcadia. Son tempérament est calme et observateur, mais il reste un leader naturel au sein de son groupe. Simba passe ses journées à se reposer sous les acacias de la savane, surveillant son territoire tout en profitant du soleil. Les visiteurs peuvent souvent l’apercevoir, immobile et serein, ou en interaction avec les autres lions de son habitat. La conservation de cette espèce est au cœur des actions du zoo, et Simba incarne ce lien précieux avec la nature africaine.</p>
        </div>
    </section>
</main>

<?php  
    require_once __DIR__ . "/../templates/footer.php";
?>