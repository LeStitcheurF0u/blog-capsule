<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="shortcut icon" href="assets/media/lacapsule_favicon.webp" type="image/webp">
    <link rel="stylesheet" href="css/articles.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Blog de La Capsule - Articles</title>
</head>

<body>
    <?php
    include 'import/header.html';
    include 'import/social.html';
    ?>
    <main>
        <h1>Blog de La Capsule</h1>
        <h2>Les derniers articles</h2>
        <section class="lastests-articles">
            <article class="article">
                <div class="article-image">
                    <img src="assets/uploads/article-1.jpg" alt="">
                </div>
                <div class="article-category">
                    <span>Informatique</span>
                </div>
                <div class="article-head">
                    <h3>Titre de l'article</h3>
                </div>
                <div class="article-author">
                    Par <span class='name'>LeStitcheurFou</span>
                    Il y a <strong>10 heures</strong>
                </div>
            </article>
            <article class="article">
                <div class="article-image">
                    <img src="assets/uploads/article-1.jpg" alt="">
                </div>
                <div class="article-category">
                    <span>Linux</span>
                </div>
                <div class="article-head">
                    <h3>Titre de l'article</h3>
                </div>
                <div class="article-author">
                    Par <span class='name'>LeStitcheurFou</span>
                    Il y a <strong>10 heures</strong>
                </div>
            </article>
            <article class="article">
                <div class="article-image">
                    <img src="assets/uploads/article-1.jpg" alt="">
                </div>
                <div class="article-category">
                    <span>Développement Web</span>
                </div>
                <div class="article-head">
                    <h3>Titre de l'article</h3>
                </div>
                <div class="article-author">
                    Par <span class='name'>LeStitcheurFou</span>
                    Il y a <strong>10 heures</strong>
                </div>
            </article>
            <article class="article">
                <div class="article-image">
                    <img src="assets/uploads/article-1.jpg" alt="">
                </div>
                <div class="article-category">
                    <span>Médiation</span>
                </div>
                <div class="article-head">
                    <h3>Titre de l'article</h3>
                </div>
                <div class="article-author">
                    Par <span class='name'>LeStitcheurFou</span>
                    Il y a <strong>10 heures</strong>
                </div>
            </article>
        </section>
    </main>
    <?php
    include 'import/footer.html';
    ?>
</body>

</html>