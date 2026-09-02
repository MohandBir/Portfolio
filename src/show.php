<?php
session_start();
require __DIR__ . '/data/projects.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$project = getProjectById($id);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $project ? htmlspecialchars($project['description']) : 'Projet introuvable' ?>">
    <link rel="icon" type="image/svg+xml" href="/images/favicon.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="/css/show-style.css">
    <title><?= $project ? htmlspecialchars($project['title']) . ' — Mohand BIR' : 'Projet introuvable' ?></title>
</head>
<body>
    <?php require __DIR__ . '/shared/_header.php'; ?>

    <?php if (!$project): ?>
        <section class="not-found">
            <div class="container">
                <h1>404</h1>
                <p class="section-subtitle" style="margin-top: 16px;">Ce projet n'existe pas ou plus.</p>
                <a href="/src/projects.php" class="btn btn-primary">Retour aux projets</a>
            </div>
        </section>
    <?php else: ?>
        <section class="project-detail">
            <div class="container">
                <a href="/src/projects.php" class="back-link">
                    <i class="fa-solid fa-arrow-left"></i> Retour aux projets
                </a>

                <div class="project-detail-cover">
                    <i class="<?= htmlspecialchars($project['icon']) ?>"></i>
                </div>

                <div class="project-detail-header">
                    <span class="project-category"><?= htmlspecialchars($project['category']) ?></span>
                    <h1><?= htmlspecialchars($project['title']) ?></h1>
                    <div class="project-detail-meta">
                        <?php foreach ($project['tags'] as $tag): ?>
                            <span class="project-tag"><?= htmlspecialchars($tag) ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="project-detail-body">
                    <div>
                        <h2>Description</h2>
                        <?php foreach ($project['fullDescription'] as $paragraph): ?>
                            <p><?= htmlspecialchars($paragraph) ?></p>
                        <?php endforeach; ?>

                        <h2>Fonctionnalités clés</h2>
                        <ul style="padding-left: 20px; display: flex; flex-direction: column; gap: 8px;">
                            <?php foreach ($project['features'] as $feature): ?>
                                <li><?= htmlspecialchars($feature) ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>

                    <div class="project-detail-side">
                        <div class="side-card">
                            <h3>Année</h3>
                            <p><?= htmlspecialchars($project['year']) ?></p>
                        </div>
                        <?php if ($project['github'] !== '#' || $project['demo'] !== '#'): ?>
                            <div class="side-card">
                                <h3>Liens</h3>
                                <div class="project-links" style="flex-direction: column; align-items: stretch;">
                                    <?php if ($project['github'] !== '#'): ?>
                                        <a href="<?= htmlspecialchars($project['github']) ?>" class="project-link" target="_blank" rel="noopener">
                                            <i class="fa-brands fa-github"></i> Voir le code
                                        </a>
                                    <?php endif; ?>
                                    <?php if ($project['demo'] !== '#'): ?>
                                        <a href="<?= htmlspecialchars($project['demo']) ?>" class="project-link" target="_blank" rel="noopener">
                                            <i class="fa-solid fa-arrow-up-right-from-square"></i> Voir la démo
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php require __DIR__ . '/shared/_footer.php'; ?>
</body>
</html>
