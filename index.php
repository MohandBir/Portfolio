<?php
session_start();
require __DIR__ . '/src/data/projects.php';

$status = $_GET['status'] ?? null;
$featuredProjects = getFeaturedProjects(3);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio de Mohand BIR, développeur web full stack (Symfony / PHP) en recherche d'alternance : projets, compétences et contact.">
    <link rel="icon" type="image/svg+xml" href="/images/favicon.svg">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="/css/index-style.css">
    <title>Mohand BIR — Développeur Web Full Stack</title>
</head>
<body>
    <?php require __DIR__ . '/src/shared/_header.php'; ?>

    <section class="hero-section" id="hero">
        <div class="hero-content">
            <h1 class="hero-subtitle">Développeur Web Full Stack</h1>
            <p class="hero-title">Créer des expériences digitales <span class="gradient-text">modernes</span></p>
            <p class="hero-description">
                Passionné par le développement web, je conçois des applications Symfony / PHP :
            </p>
            <ul class="hero-skills">
                <li>🎨 élégantes</li>
                <li>🚀 performantes</li>
                <li>🔒 sécurisées</li>
            </ul>
            <div class="hero-actions">
                <a href="/src/projects.php" class="btn btn-primary">Voir mes projets</a>
                <a href="/index.php#contact" class="btn btn-outline">Me contacter</a>
            </div>
        </div>
    </section>

    <section class="about-section" id="about">
        <div class="container">
            <h2 class="section-title reveal">À propos de moi</h2>
            <p class="section-subtitle reveal">Qui je suis et ce qui me motive au quotidien.</p>

            <div class="about-grid reveal">
                <div class="about-photo">
                    <img src="/images/profil.jpg" alt="Photo de Mohand BIR">
                </div>
                <div class="about-text">
                    <p>
                        Je m'appelle <strong>Mohand BIR</strong>, développeur web full stack passionné par le
                        développement d'applications fiables, performantes et construites sur des technologies
                        à jour. Depuis mes débuts en BTS SIO, je me suis naturellement orienté vers le
                        développement fullstack, avec une préférence pour PHP et Symfony côté serveur.
                    </p>
                    <p>
                        Mon parcours est aussi celui d'une reconversion : après un Master en Électrotechnique
                        Industrielle, j'ai choisi de me réorienter vers le développement web par passion pour
                        la technologie. Cette double expérience m'a donné de la rigueur et une vraie capacité
                        à apprendre vite. Aujourd'hui, je recherche une alternance pour poursuivre en Bachelor
                        Concepteur Développeur d'Applications.
                    </p>

                    <div class="about-facts">
                        <div class="about-fact">
                            <span class="fact-label">Localisation</span>
                            <span class="fact-value">Ile-De-France</span>
                        </div>
                        <div class="about-fact">
                            <span class="fact-label">Disponibilité</span>
                            <span class="fact-value">En recherche d'alternance</span>
                        </div>
                        <div class="about-fact">
                            <span class="fact-label">Email</span>
                            <span class="fact-value">birmoho@gmail.com</span>
                        </div>
                        <div class="about-fact">
                            <span class="fact-label">Formation visée</span>
                            <span class="fact-value">Bachelor CDA — 2027</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    $skillGroups = [
        'Langages' => [
            ['HTML / CSS', 4],
            ['PHP', 4],
            ['JavaScript', 3],
            ['SQL', 3],
        ],
        'Frameworks & outils' => [
            ['Symfony 7', 3],
            ['Bootstrap', 3],
            ['Git / GitHub', 3],
            ['Docker', 2],
        ],
        'Méthodes & modélisation' => [
            ['Méthode Scrum', 3],
            ['UML', 4],
            ['Merise', 4],
        ],
    ];
    ?>
    <section class="skills-section" id="skills">
        <div class="container">
            <h2 class="section-title reveal">Compétences</h2>
            <p class="section-subtitle reveal">Les technologies et méthodes avec lesquelles je travaille le plus souvent.</p>

            <div class="skills-groups reveal">
                <?php foreach ($skillGroups as $groupName => $skills): ?>
                    <div class="skill-group">
                        <h3><?= htmlspecialchars($groupName) ?></h3>
                        <div class="skill-levels">
                            <?php foreach ($skills as [$skillName, $level]): ?>
                                <div class="skill-level-item">
                                    <span class="skill-level-name"><?= htmlspecialchars($skillName) ?></span>
                                    <div class="skill-level-track">
                                        <?php for ($i = 1; $i <= 5; $i++): ?>
                                            <span class="<?= $i <= $level ? 'filled' : '' ?>"></span>
                                        <?php endfor; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endforeach; ?>

                <div class="skill-group">
                    <h3>Savoir-être &amp; langues</h3>
                    <div class="skill-extra">
                        <div class="skill-extra-block">
                            <h4>Soft skills</h4>
                            <div class="skill-badges">
                                <span class="skill-badge">Autonomie</span>
                                <span class="skill-badge">Rigueur</span>
                                <span class="skill-badge">Travail d'équipe</span>
                                <span class="skill-badge">Adaptabilité</span>
                            </div>
                        </div>
                        <div class="skill-extra-block">
                            <h4>Langues</h4>
                            <div class="skill-badges">
                                <span class="skill-badge">🇫🇷 Français — C2</span>
                                <span class="skill-badge">🇬🇧 Anglais — B2</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="certifications-section" id="certifications">
        <div class="container">
            <h2 class="section-title reveal">Certifications</h2>
            <p class="section-subtitle reveal">Des compétences complémentaires validées par des organismes reconnus.</p>

            <div class="certifications-grid reveal">
                <div class="certification-card">
                    <div class="certification-icon"><i class="fa-solid fa-users-gear"></i></div>
                    <div class="certification-body">
                        <h3>Scrum Fundamentals Certified (SFC)</h3>
                        <p class="certification-issuer">SCRUMstudy — obtenu le 4 mars 2024</p>
                        <p class="certification-desc">
                            Certification validant la maîtrise des fondamentaux de la méthode agile Scrum
                            (rôles, cérémonies, artefacts). Certificat ID 1019033.
                        </p>
                        <a href="/assets/certificates/scrum-fundamentals-certified.pdf" class="certification-link" target="_blank" rel="noopener">
                            <i class="fa-solid fa-file-arrow-down"></i> Voir le certificat
                        </a>
                    </div>
                </div>

                <div class="certification-card">
                    <div class="certification-icon"><i class="fa-solid fa-robot"></i></div>
                    <div class="certification-body">
                        <h3>Développeur Augmenté</h3>
                        <p class="certification-issuer">Hunik Academy — délivré le 10/08/2026</p>
                        <p class="certification-desc">
                            Certificat de compétences complémentaire au Titre Professionnel DWWM (910h) :
                            gestion de projet agile (Scrum, Jira), travail collaboratif (GitHub), environnements
                            conteneurisés (Docker) et développement assisté par IA (prompt engineering, Claude Code).
                        </p>
                        <a href="/assets/certificates/certificat-developpeur-augmente.pdf" class="certification-link" target="_blank" rel="noopener">
                            <i class="fa-solid fa-file-arrow-down"></i> Voir le certificat
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="experience-section" id="experience">
        <div class="container">
            <h2 class="section-title reveal">Expérience &amp; Formation</h2>
            <p class="section-subtitle reveal">Mon parcours jusqu'à aujourd'hui.</p>

            <div class="timeline reveal">
                <div class="timeline-item">
                    <span class="timeline-date">En cours</span>
                    <h3 class="timeline-title">Bachelor CDA — Concepteur Développeur d'Applications</h3>
                    <p class="timeline-place">Objectif juillet 2027 — en recherche d'alternance</p>
                    <p class="timeline-desc">
                        Rythme visé : 1 semaine en école, 3 semaines en entreprise. Développement full stack,
                        API REST, SQL/NoSQL, cloud &amp; DevOps (Docker, CI/CD), Agile et gestion de projet.
                    </p>
                </div>
                <div class="timeline-item">
                    <span class="timeline-date">Mai — Août 2026</span>
                    <h3 class="timeline-title">Stagiaire — Développeur Web Junior</h3>
                    <p class="timeline-place">Castelis</p>
                    <p class="timeline-desc">
                        Participation à la conception de fonctionnalités et analyse des besoins métier :
                        calcul d'augmentation de loyer, génération automatique de quittances de loyer en PDF.
                        Développement backend, gestion de base de données, intégration d'API et correction de
                        bugs, dans un cadre Agile (daily meetings, sprints, tickets Jira).
                    </p>
                </div>
                <div class="timeline-item">
                    <span class="timeline-date">Jan. — Juil. 2026</span>
                    <h3 class="timeline-title">Titre Professionnel DWWM + Certificat Développeur Augmenté</h3>
                    <p class="timeline-place">Hunik Academy — 910 heures de formation</p>
                    <p class="timeline-desc">
                        Développement d'applications web sécurisées (front-end, back-end, bases de données,
                        API) avec Symfony 7. Enseignements complémentaires : gestion de projet agile
                        (Scrum, Jira), GitHub, Docker et développement assisté par IA.
                    </p>
                </div>
                <div class="timeline-item">
                    <span class="timeline-date">Nov. 2023 — Oct. 2024</span>
                    <h3 class="timeline-title">Alternant — Chargé de Contenus Numériques</h3>
                    <p class="timeline-place">Learning Systems</p>
                    <p class="timeline-desc">
                        Création et mise à jour de fiches de formation, gestion et organisation de contenus
                        pédagogiques numériques, support bureautique et assistance aux équipes.
                    </p>
                </div>
                <div class="timeline-item">
                    <span class="timeline-date">2022 — 2024</span>
                    <h3 class="timeline-title">BTS SIO — option SLAM</h3>
                    <p class="timeline-place">ISBE - Learning Systems</p>
                    <p class="timeline-desc">
                        Bases de l'informatique, développement d'applications web et logicielles, bases de
                        données et cybersécurité des services informatiques.
                    </p>
                </div>
                <div class="timeline-item">
                    <span class="timeline-date">2019 — 2021</span>
                    <h3 class="timeline-title">Master Électrotechnique Industrielle</h3>
                    <p class="timeline-place">Université de Béjaïa</p>
                    <p class="timeline-desc">
                        Systèmes électriques industriels, automatismes, électronique de puissance et
                        maintenance industrielle — avant ma réorientation vers le développement web.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="projects-section" id="projects">
        <div class="container">
            <h2 class="section-title reveal">Projets à la une</h2>
            <p class="section-subtitle reveal">Quelques réalisations parmi mes projets récents.</p>

            <div class="featured-projects-list reveal">
                <?php foreach ($featuredProjects as $project): ?>
                    <article class="project-card">
                        <div class="project-card-cover">
                            <i class="<?= htmlspecialchars($project['icon']) ?>"></i>
                        </div>
                        <div class="project-content">
                            <span class="project-category"><?= htmlspecialchars($project['category']) ?></span>
                            <h3 class="project-title"><?= htmlspecialchars($project['title']) ?></h3>
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
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="projects-more reveal">
                <a href="/src/projects.php" class="btn btn-outline">Voir tous les projets</a>
            </div>
        </div>
    </section>

    <section class="contact-section" id="contact">
        <div class="container">
            <h2 class="section-title reveal">Contact</h2>
            <p class="section-subtitle reveal">Une question, une opportunité ? N'hésite pas à m'écrire.</p>

            <div class="reveal">
                <?php if ($status === 'success'): ?>
                    <p class="form-message success" style="margin-bottom: 30px;">Votre message a bien été envoyé, merci ! Je vous répondrai rapidement.</p>
                <?php elseif ($status === 'error'): ?>
                    <p class="form-message error" style="margin-bottom: 30px;">Une erreur est survenue. Merci de vérifier les champs et de réessayer.</p>
                <?php endif; ?>

                <div class="contact-columns">
                    <div class="contact-info">
                        <a href="mailto:birmoho@gmail.com" class="contact-info-item">
                            <i class="fa-solid fa-envelope"></i>
                            <span>
                                <span class="label">Email</span>
                                <span class="value">birmoho@gmail.com</span>
                            </span>
                        </a>
                        <a href="https://linkedin.com/in/mohandbir" class="contact-info-item" target="_blank" rel="noopener">
                            <i class="fa-brands fa-linkedin-in"></i>
                            <span>
                                <span class="label">LinkedIn</span>
                                <span class="value">linkedin.com/in/mohandbir</span>
                            </span>
                        </a>
                        <a href="https://github.com/MohandBir" class="contact-info-item" target="_blank" rel="noopener">
                            <i class="fa-brands fa-github"></i>
                            <span>
                                <span class="label">GitHub</span>
                                <span class="value">github.com/MohandBir</span>
                            </span>
                        </a>
                    </div>

                    <form class="contact-form" action="/src/contact-handler.php" method="post">
                        <input type="text" name="website" class="form-honeypot" tabindex="-1" autocomplete="off">

                        <div class="form-row">
                            <div class="form-group">
                                <label for="name">Nom</label>
                                <input type="text" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="subject">Sujet</label>
                            <input type="text" id="subject" name="subject">
                        </div>

                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">
                            <i class="fa-solid fa-paper-plane"></i> Envoyer le message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php require __DIR__ . '/src/shared/_footer.php'; ?>
</body>
</html>
