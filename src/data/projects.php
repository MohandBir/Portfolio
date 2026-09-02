<?php

/**
 * Source de donnees des projets du portfolio.
 */
function getProjects(): array
{
    return [
        [
            'id' => 1,
            'title' => 'AssuMotor',
            'category' => 'Assurance en ligne',
            'icon' => 'fa-solid fa-car',
            'description' => "Plateforme de souscription à une assurance auto 100% en ligne : devis instantané, dépôt de justificatifs et suivi de dossier en temps réel.",
            'fullDescription' => [
                "AssuMotor est une application web complète permettant à des particuliers de souscrire à une assurance automobile entièrement en ligne, sans avoir à se déplacer. L'utilisateur obtient un devis instantané, dépose ses justificatifs et suit l'avancement de son dossier en temps réel. Un espace administrateur permet de gérer l'ensemble des souscriptions avec un workflow de validation structuré.",
                "Architecture MVC avec Symfony 7 et Doctrine ORM, gestion des fichiers uploadés avec validation côté serveur, actions AJAX pour la mise à jour des statuts sans rechargement de page. Application conteneurisée avec Docker et déployée en production sur AlwaysData.",
            ],
            'features' => [
                'Formulaire de devis instantané avec calcul automatique du tarif',
                'Souscription 100% digitale via un tunnel étape par étape',
                "Dépôt de justificatifs (permis, carte grise, relevé d'informations)",
                'Suivi de dossier en temps réel côté utilisateur',
                'Back-office admin : tableau de bord, workflow de validation, gestion des statuts',
                'Authentification sécurisée avec rôles ROLE_USER / ROLE_ADMIN',
            ],
            'tags' => ['Symfony 7', 'PHP 8', 'MariaDB', 'Twig', 'Bootstrap 5', 'AJAX', 'Docker'],
            'year' => 'Février – Août 2026',
            'github' => 'https://github.com/MohandBir/Assu_Motor',
            'demo' => 'https://assu-motor-bir.alwaysdata.net',
            'featured' => true,
        ],
        [
            'id' => 2,
            'title' => 'Esprit Déco',
            'category' => 'E-commerce',
            'icon' => 'fa-solid fa-cart-shopping',
            'description' => "Boutique en ligne de décoration intérieure : catalogue, panier intelligent, paiement Stripe et back-office admin complet.",
            'fullDescription' => [
                "Esprit Déco est une boutique en ligne spécialisée dans la décoration intérieure d'inspiration italienne. Le projet couvre l'intégralité du cycle e-commerce : navigation dans le catalogue, gestion du panier, tunnel de commande et paiement en ligne, avec un espace administrateur complet pour gérer les produits, les images et les commandes.",
                "Panier intelligent stocké en session pour les visiteurs non connectés puis basculé en base de données à la connexion via un EventSubscriber. Gestion des images en AJAX (image principale, suppression, réorganisation sans rechargement) et protection CSRF sur les actions sensibles du back-office.",
            ],
            'features' => [
                'Catalogue responsive avec fiche produit et carrousel d\'images',
                'Panier intelligent (session → base de données à la connexion)',
                'Tunnel de vente complet avec paiement Stripe',
                'Filtres par catégorie, recherche et historique des commandes',
                'Back-office admin : CRUD produits, gestion des images en AJAX, statuts de commande',
                'Inscription avec vérification par email',
            ],
            'tags' => ['Symfony 7', 'PHP 8', 'MySQL', 'Twig', 'Bootstrap 5', 'Stripe API', 'Docker'],
            'year' => '2026',
            'github' => 'https://github.com/MohandBir/EspritDeco',
            'demo' => '#',
            'featured' => true,
        ],
        [
            'id' => 3,
            'title' => 'Enchères Secrètes',
            'category' => 'Plateforme d\'enchères',
            'icon' => 'fa-solid fa-gavel',
            'description' => "Plateforme d'enchères où chaque utilisateur ne peut placer qu'une seule offre secrète par objet, avec attribution automatique au meilleur enchérisseur.",
            'fullDescription' => [
                "Enchères Secrètes permet à des utilisateurs connectés de placer des offres secrètes sur des objets rares publiés par un administrateur. Chaque utilisateur ne peut faire qu'une seule offre par objet, sans voir les offres des autres. Lorsque l'administrateur clôture une enchère, l'objet est attribué automatiquement au meilleur enchérisseur.",
                "Sécurité gérée via l'authentification Symfony avec rôles ROLE_USER / ROLE_ADMIN, protection CSRF sur toutes les actions sensibles et contrôle des accès par firewall. Impossible de placer une enchère sur un objet déjà clôturé.",
            ],
            'features' => [
                'Consultation des objets avec tri par catégorie',
                'Placement d\'une enchère secrète (1 offre max par utilisateur)',
                'Clôture d\'enchère avec attribution automatique du gagnant',
                'Vue admin : liste des enchérisseurs, publication/dépublication réversible',
                'CRUD complet des objets côté administrateur',
                'Protection CSRF et contrôle des accès par firewall',
            ],
            'tags' => ['Symfony 7', 'PHP 8', 'MySQL', 'Twig', 'Bootstrap 5', 'Doctrine ORM'],
            'year' => '2026',
            'github' => 'https://github.com/MohandBir/Encheres_secrete',
            'demo' => '#',
            'featured' => true,
        ],
        [
            'id' => 4,
            'title' => 'Liste de Voyages',
            'category' => 'Application de voyage',
            'icon' => 'fa-solid fa-earth-europe',
            'description' => "Application permettant à chaque utilisateur de gérer sa liste personnelle de destinations, entre envies (Rêvé) et souvenirs (Visité).",
            'fullDescription' => [
                "Application web permettant à chaque utilisateur inscrit de gérer sa liste personnelle de destinations à travers le monde : consulter toutes les destinations disponibles, ajouter celles qui l'intéressent à sa liste personnelle, et changer leur statut entre Rêvé et Visité. L'accès public permet de parcourir les destinations sans inscription.",
                "Contrainte technique volontaire : aucune utilisation du composant Symfony Form, toutes les actions (ajout, changement de statut, suppression) passent par de simples liens, avec un layout commun et une navbar dynamique selon l'état de connexion.",
            ],
            'features' => [
                'Accès public à la liste des destinations (pays, description, image)',
                'Espace personnel avec tri par statut',
                'Changement de statut Rêvé → Visité via des liens directs',
                'Protection des routes réservées aux utilisateurs connectés',
                'Fixtures : 10+ destinations pré-chargées avec DoctrineFixturesBundle',
            ],
            'tags' => ['Symfony 7', 'PHP 8', 'MySQL', 'Twig', 'Bootstrap 5'],
            'year' => '2026',
            'github' => 'https://github.com/MohandBir/voyage',
            'demo' => '#',
            'featured' => false,
        ],
    ];
}

function getProjectById(int $id): ?array
{
    foreach (getProjects() as $project) {
        if ($project['id'] === $id) {
            return $project;
        }
    }

    return null;
}

function getFeaturedProjects(int $limit = 3): array
{
    $featured = array_values(array_filter(getProjects(), fn ($p) => $p['featured']));

    return array_slice($featured, 0, $limit);
}
