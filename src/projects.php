<?php
session_start();
require __DIR__ . '/data/projects.php';

$projects = getProjects();
$categories = array_values(array_unique(array_column($projects, 'category')));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Liste des projets réalisés par Mohand BIR, développeur web full stack (Symfony / PHP).">
    <link rel="icon" type="image/svg+xml" href="/images/favicon.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="/css/projects-style.css">
    <title>Projets — Mohand BIR</title>
</head>
<body>
    <?php require __DIR__ . '/shared/_header.php'; ?>

    <section class="projects-section">
        <div class="container">
            <div class="projects-hero">
                <h1 class="section-title reveal">Mes projets</h1>
                <p class="section-subtitle reveal">Une sélection de projets réalisés en autonomie ou en formation.</p>
            </div>

            <div class="projects-filters reveal" data-filters>
                <button type="button" class="filter-btn active" data-filter="all">Tous</button>
                <?php foreach ($categories as $category): ?>
                    <button type="button" class="filter-btn" data-filter="<?= htmlspecialchars($category) ?>"><?= htmlspecialchars($category) ?></button>
                <?php endforeach; ?>
            </div>

            <div class="projects-list reveal" data-projects-list>
                <?php foreach ($projects as $project): ?>
                    <article class="project-card" data-category="<?= htmlspecialchars($project['category']) ?>">
                        <div class="project-card-cover">
                            <i class="<?= htmlspecialchars($project['icon']) ?>"></i>
                        </div>
                        <div class="project-content">
                            <span class="project-category"><?= htmlspecialchars($project['category']) ?></span>
                            <h2 class="project-title"><?= htmlspecialchars($project['title']) ?></h2>
                            <p class="project-description"><?= htmlspecialchars($project['description']) ?></p>
                            <div class="project-tags">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <span class="project-tag"><?= htmlspecialchars($tag) ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="project-links">
                                <a href="/src/show.php?id=<?= (int) $project['id'] ?>" class="project-link">
                                    <i class="fa-solid fa-arrow-right"></i> Détails
                                </a>
                                <?php if ($project['github'] !== '#'): ?>
                                    <a href="<?= htmlspecialchars($project['github']) ?>" class="project-link" target="_blank" rel="noopener">
                                        <i class="fa-brands fa-github"></i> Code
                                    </a>
                                <?php endif; ?>
                                <?php if ($project['demo'] !== '#'): ?>
                                    <a href="<?= htmlspecialchars($project['demo']) ?>" class="project-link" target="_blank" rel="noopener">
                                        <i class="fa-solid fa-arrow-up-right-from-square"></i> Démo
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php require __DIR__ . '/shared/_footer.php'; ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var buttons = document.querySelectorAll('[data-filters] .filter-btn');
            var cards = document.querySelectorAll('[data-projects-list] .project-card');

            buttons.forEach(function (btn) {
                btn.addEventListener('click', function () {
                    buttons.forEach(function (b) { b.classList.remove('active'); });
                    btn.classList.add('active');

                    var filter = btn.getAttribute('data-filter');
                    cards.forEach(function (card) {
                        var match = filter === 'all' || card.getAttribute('data-category') === filter;
                        card.style.display = match ? '' : 'none';
                    });
                });
            });
        });
    </script>
</body>
</html>
