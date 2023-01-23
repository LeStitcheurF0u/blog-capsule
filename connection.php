<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog de La Capsule - Page de Connection</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="assets/media/lacapsule_favicon.webp" type="image/webp">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/connection.css">
</head>

<body>
    <?php include 'import/header.html'; ?>
    <main>
        <form action="traitements/login.php" method="post">
            <h1>Se connecter</h1>
            <div class="input-group">
                <input class="input" type="email" name="mail" id="mail" placeholder=" ">
                <label class="placeholder">Mail</label>
            </div>
            <div class="input-group">
                <input class="input" type="password" name="password" id="password" placeholder=" ">
                <label class="placeholder">Mot de passe</label>
            </div>
            <button type="submit" class="btn-link">Se connecter</button>
        </form>
    </main>
    <?php include 'import/footer.html'; ?>
</body>

</html>