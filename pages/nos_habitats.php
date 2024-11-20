<?php  
    require_once __DIR__ . "/../templates/header.php";
    require_once __DIR__ . "/../lib/habitats.php";

    // $habitatImage = getHabitatImageById($pdo, $_GET['id']);
    
?>
<main>
    <div class="hero-scene">
        <div class="">
            <div class="hero-scene-content d-flex align-items-center justify-content-center">
                <h1 class="text-primary text-center">NOS HABITATS</h1>
            </div>
        </div>
    </div>
    <section>
        <div class="container-xl text-body-tertiary justify-text py-4">
        <h1 class=" text-primary pt-3 ">Des habitats adaptés pour chaque espèce</h1>
        <p class="text-body-tertiary">Au Zoo Arcadia, chaque espèce vit dans un habitat spécialement conçu pour recréer les conditions de son environnement naturel. Nous avons aménagé des espaces diversifiés et immersifs afin d’assurer le bien-être de nos résidents et d’offrir à nos visiteurs une expérience enrichissante et respectueuse de la biodiversité. Découvrez les différents habitats qui abritent nos animaux et permettent une rencontre harmonieuse avec la nature.</p>
        </div>
        <div class="container-xl">
            <div class="row justify-content-center gap-5 justify-content-lg-evenly">
                <?php foreach ($habitats as $habitat) {
                    $habitatImage = getHabitatImageById($pdo, $habitat['id'])
                    ?>
                    <div class="card shadow col-lg-4 p-0" style="width: 18rem;">
                        <div class="card-header text-center text-white bg-dark">
                            <?= htmlspecialchars($habitat['name']); ?>
                        </div>
                        <img src="<?php echo BASE_URL; ?><?= $habitatImage["file_path"] ?>"  alt="Image de notre habitat <?=$habitat['name']?>">
                        <div class="card-body text-center">
                            <a href="<?php echo route('habitat'). "?id=".$habitat['id']; ?>" class="btn btn-dark">Découvrir</a>
                        </div>
                    </div>
                <?php };?>
            </div>
        </div>
    </section>
</main>
<?php  
    require_once __DIR__ . "/../templates/footer.php";
?>