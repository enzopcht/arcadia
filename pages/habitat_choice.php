<?php  
    require_once __DIR__ . "/../lib/animals.php";
    require_once __DIR__ . "/../lib/habitats.php";
    require_once __DIR__ . "/../templates/header.php";

    // $habitatId = isset($_GET['habitat_id']) ? intval($_GET['habitat_id']) : null;
    $habitat = getHabitatById($pdo, $_GET['id']);
    $habitatImage = getHabitatImageById($pdo, $_GET['id']);
    

    if (!$habitat) {
        // Rediriger vers une page d'erreur ou par défaut
        header("Location: " . BASE_URL ); // Redirection vers l'accueil
        exit;
    }

?>
<main>
    <article class="container-xl mx-auto py-5 row align-items-center">
        <div class="col-12 col-lg-6 order-lg-2">
            <img src="<?php echo BASE_URL; ?><?= $habitatImage["file_path"] ?>" class="img-fluid rounded" alt="Image représentant la devanture du Zoo Arcadia">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="title-div text-primary pt-3 ">
                <?php 
                    echo $habitat['name'];
                ?>
            </h1>
            <p class="text-body-tertiary"><?= $habitat['description']; ?></p>
        </div>
    </article>
    <section class="container-xl">
        <h2 class="text-dark">Les animaux</h2>
        <div class="row gap-2 justify-content-center justify-content-lg-evenly">

            <?php foreach ($animals as $animal) {
                $animalImage = getAnimalImageById($pdo, $animal['id']);
                $animalSpecies = getAnimalSpeciesById($pdo, $animal['species_id']);
                if ($animal['habitat_id'] === $habitat['id']) { 
                    ?>
                    <div class="card shadow col-5 col-lg-3 p-0">
                        <div class="card-header text-center text-white bg-dark">
                            <?= htmlspecialchars($animal['name']) ?>
                        </div>
                        <img src="<?php echo BASE_URL; ?><?= $animalImage["file_path"] ?>"  alt="Image de notre <?=$animalSpecies['label']?> <?=$animal['name']?>">
                        <div class="card-body text-center">
                            <a href="<?php echo route('animal_choice'). "?id=".$animal['id']; ?>" class="btn btn-dark">En savoir plus sur <?=$animal['name']?></a>
                        </div>
                    </div>
                <?php } ?>
            <?php };?>

            <!-- <div class="card shadow col-5 col-lg-3 p-0">
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
            </div> -->

        </div>
    </section>
        
</main>
<?php  
    require_once __DIR__ . "/../templates/footer.php";
?>
