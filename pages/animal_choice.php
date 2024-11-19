<?php  
    require_once __DIR__ . "/../templates/header.php";
    require_once __DIR__ . "/../lib/animals.php";
    require_once __DIR__ . "/../lib/habitats.php";

    $animalId = getAnimalById($pdo, $_GET['id']);
    $animalSpecies = getAnimalSpeciesById($pdo, $animalId['species_id']);
    $habitat = getHabitatById($pdo, $animalId['habitat_id']);
    $animalImage = getAnimalImageById($pdo, $animalId['id']);

    if (!$animalId) {
        // Rediriger vers une page d'erreur ou par défaut
        header("Location: " . BASE_URL ); // Redirection vers l'accueil
        exit;
    }
?>

<main>
    <section class="container-xl p-2">
        <div class="row align-items-center">
            <div class="col-5">
                <img src="<?php echo BASE_URL; ?><?=$animalImage['file_path']?>"  alt="Image de notre <?=$animalSpecies['label']?> <?=$animalId['name']?>" class="img-fluid rounded shadow">
            </div>
            <div class="col-7">
                <p><span class="text-primary">Prénom : </span><?=$animalId['name']?></p>
                <p><span class="text-primary">Race : </span><?=$animalSpecies['label']?></p>
                <p><span class="text-primary">Habitat : </span><a href="<?php echo route('habitat'). "?id=".$habitat['id']; ?>"><?=$habitat['name']?></a></p>
                <p><span class="text-primary">Etat : </span>Parfait</p>
            </div>
        </div>
        <!-- <div class="text-body-tertiary justify-text">
            <p>Simba est un majestueux lion de l’espèce des lions d’Afrique, connu pour sa crinière dense et son allure imposante. Né dans le parc, il est devenu l’un des animaux les plus emblématiques du Zoo Arcadia. Son tempérament est calme et observateur, mais il reste un leader naturel au sein de son groupe. Simba passe ses journées à se reposer sous les acacias de la savane, surveillant son territoire tout en profitant du soleil. Les visiteurs peuvent souvent l’apercevoir, immobile et serein, ou en interaction avec les autres lions de son habitat. La conservation de cette espèce est au cœur des actions du zoo, et Simba incarne ce lien précieux avec la nature africaine.</p>
        </div> -->
    </section>
</main>

<?php  
    require_once __DIR__ . "/../templates/footer.php";
?>