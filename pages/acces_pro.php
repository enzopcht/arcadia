<?php
    require_once __DIR__ . "/../templates/header.php";
    require_once __DIR__ . "/../lib/user.php";
    require_once __DIR__ . "/../lib/session.php";
    $password = 'Arcadia2024@';
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    var_dump($_SESSION);
    $errors = [];

    if (isset($_POST['loginUser'])) {
        $user = verifyUserEmailPassword($pdo, $_POST['username'], $_POST['password']);

        if ($user) {
            // on va le connecter => session
            $_SESSION['user'] = $user;
            header('location: '.route(''));
        } else {
            // afficher une erreur
            $errors[] = "Email ou mot de passe incorrect";
        }

    }
?>

<main>
    <div class="container-xl text-body-tertiary justify-text pt-5 text-center">
        <h1 class="text-primary pt-3 ">Connexion personnel</h1>
        <p>Cette page de connexion est réservée au <span class="text-primary">personnel du zoo Arcadia.</span></p>
    </div>
    <div class="container-xl mx-auto">
    <form action="" method="POST" class="p-3 mx-auto col-12 col-lg-6">
    <?php if (!empty($errors)) { ?>
        <?php foreach ($errors as $error) { ?>
            <div class="alert alert-danger container-xl mt-3">
                <?= htmlspecialchars($error); ?>
            </div>
        <?php } ?>
    <?php } ?>
    
    <div class="mb-3">
        <label for="username" class="form-label text-primary">Email :</label>
        <input 
            type="email" 
            class="form-control" 
            id="username" 
            name="username"
            required
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
        >
        <small class="text-danger d-none" id="emailError">Veuillez entrer un email valide.</small>
    </div>
    
    <div class="mb-3">
        <label for="password" class="form-label text-primary">Mot de passe :</label>
        <input 
            type="password" 
            class="form-control" 
            id="password" 
            name="password" 
            required
        >
    </div>
    
    <div class="mb-3 text-center">
        <input 
            type="submit" 
            class="btn btn-primary" 
            name="loginUser" 
            value="Connexion" 
            id="submitButton" 
            disabled
        >
    </div>
</form>
    </div>
</main>

<script>
    const emailInput = document.getElementById('username');
    const passwordInput = document.getElementById('password');
    const submitButton = document.getElementById('submitButton');
    const emailError = document.getElementById('emailError');

    function validateForm() {
        const isEmailValid = emailInput.validity.valid;
        const isPasswordFilled = passwordInput.value.trim() !== '';

        emailError.classList.toggle('d-none', isEmailValid);

        // Active le bouton si les deux champs sont valides
        submitButton.disabled = !(isEmailValid && isPasswordFilled);
    }

    // Vérifie en temps réel les champs
    emailInput.addEventListener('input', validateForm);
    passwordInput.addEventListener('input', validateForm);

    // Ajoute un style pour un champ email invalide
    emailInput.addEventListener('invalid', () => {
        emailError.classList.remove('d-none');
    });
</script>

<?php
    require_once __DIR__ . "/../templates/footer.php";
?>