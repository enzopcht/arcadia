<?php
    require_once __DIR__ . "/../lib/reviews.php";
    require_once __DIR__ . "/../templates/header.php";

    $messagesList = [];
    $errorsList = [];

    if (isset($_POST['saveReview'])) {
        $username = trim($_POST['username']);
        $description = trim($_POST['description']);

        if (strlen($username) > 0 && strlen($description) > 0) {
            
            $lastInsertedId = saveReview($pdo, $username, $description);
            $messagesList[] = "Votre avis a bien été pris en compte et va être validé par l'un de nos employés sous peu.";
        } else {
            $errorsList[] = "Tous les champs sont requis.";
        }
    }
?>
<main>
    <div class="hero-scene">
        <div class="">
            <div class="hero-scene-content d-flex align-items-center justify-content-center">
                <h1 class="text-primary text-center">NOS AVIS</h1>
            </div>
        </div>
    </div>
    <?php foreach ($messagesList as $message) { ?>
        <div class="alert alert-success container-xl mt-3">
            <?= $message; ?>
        </div>
    <?php } 
    foreach ($errorsList as $error) { ?>
        <div class="alert alert-danger container-xl mt-3">
            <?= $error; ?>
        </div>
    <?php } ?>
    <section>
        <div class="container-xl text-body-tertiary justify-text pt-5">
            <h1 class=" text-primary pt-3 ">Bienvenue sur la page des avis du Zoo Arcadia !</h1>
            <p>Votre opinion compte beaucoup pour nous. Ici, nous partageons les retours de nos visiteurs qui ont vécu une expérience unique au sein de notre parc. Que ce soit pour louer la beauté de nos habitats, saluer le dévouement de nos équipes, ou nous donner des idées pour nous améliorer, chaque avis est précieux.</p>
            <p>Nous vous invitons à parcourir les témoignages et à découvrir ce que d’autres pensent de leur visite. Vous souhaitez également partager votre expérience ? Rien de plus simple : remplissez le formulaire ci-dessous et faites-nous part de vos impressions.</p>
            <p>Chez Arcadia, nous croyons fermement qu’un dialogue ouvert avec nos visiteurs est la clé pour continuer à offrir des moments inoubliables à tous. <span class="text-primary">Merci pour votre confiance et votre soutien !</span></p>
        </div>
        <div class="row container-xl mx-auto justify-content-center gap-4">
            <?php foreach ($lastTenReviews as $lastTenreview) { ?>
                <div class="card col-12 col-lg-3 p-0" >
                    <div class="card-header bg-dark text-white text-center"><?= $lastTenreview['username'] ?></div>
                    <div class="card-body">
                        <p class="card-text text-center"><?= $lastTenreview['description'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="bg-black mt-4">
            <div class="container-xl">
            <h3 class="text-center text-white pt-5">Donnez-nous votre avis</h3>
        <!-- Formulaire -->
        <form action="" method="POST" class="p-3 mx-auto col-12 col-lg-8" >
            <div class="mb-3">
                <label for="pseudo" class="form-label text-white">Pseudo</label>
                <input 
                    type="text" 
                    class="form-control" 
                    id="username" 
                    name="username" 
                    placeholder="Votre pseudo" 
                    maxlength="50" 
                    required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label text-white">Votre avis</label>
                <textarea 
                    class="form-control" 
                    id="description" 
                    name="description" 
                    rows="5" 
                    placeholder="Partagez votre expérience du zoo Arcadia" 
                    maxlength="255" 
                    required></textarea>
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-dark" name="saveReview" value="Envoyer">
            </div>
        </form>
            </div>
        </div>
</main>
<?php
    require_once __DIR__ . "/../templates/footer.php";
?>