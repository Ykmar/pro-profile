<?php

return [

    'layouts' => [

        'meta' => [
            'description' => 'Prestations disponibles d\'un développeur en freelance'
        ],

        'header' => [
            'about' => 'À PROPOS',
            'skills' => 'MES COMPÉTENCES',
            'experiences' => 'MES EXPÉRIENCES',
            'contact' => 'ME CONTACTER',
            'download_resume' => 'TÉLÉCHARGER MON CV',
        ],

        'footer' => [
            'legals' => 'Mentions légales',
            'privacy-policy' => 'Politique de confidentialité',
        ],
    ],

    'resume' => [

        'title' => 'Resume',

        'index' => [
            'title' => 'Développeur PHP',
            'about' => [
                'title' => 'À PROPOS',
                'intro' => "Je m'appelle Marc COLLET, passionné de nouvelles technologies et d'informatique, j'exerce le métier de développeur. <br/>Après 5 ans passés en entreprise chez Nameshield en tant que développeur puis responsable d'applications, j'ai voulu réaliser un projet de longue date en me lançant à mon compte en tant que développeur indépendant.",
                'introduce_skills' => "Voici la liste des choses que je peux faire afin de répondre au mieux à vos besoins :",
                'skills' => [
                    'development' => 'Développement de fonctionnalités et corrections de bugs.',
                    'refacto' => "Refactorisation de dettes techniques avec des outils récents (Laravel ou Symfony)",
                    'design' => 'Amélioration de votre architecture',
                    'code_quality' => "Mise en place d'outils visants à améliorer la qualité de vos applications (style et/ou qualité du code)",
                    'tests' => 'Implémentation de tests automatisés',
                    'code_review' => 'Faire des revues de code',
                    'doc' => 'Rédaction de documentations techniques',
                ],
                'bonus_skills' => "En plus de ces compétences purement techniques, mon expérience en tant que lead dev peut me permettre de faire de la formation auprès de vos équipes ou encore du suivi de projets.",
                'outro' => "Besoin de renseignements complémentaires ou d'une demande de devis ? Contactez moi, je me ferais un plaisir de répondre à votre demande."
            ],
            'skills' => [
                'title' => 'MES COMPÉTENCES',
                'php' => 'PHP',
                'laravel' => 'Laravel',
                'symfony' => 'Symfony',
                'vue' => 'VueJS',
                'node' => 'Node',
                'cicd' => 'CI/CD',
                'versions' => 'Versions',
                'linux' => 'Linux',
                'code_review' => 'Revue de code',
                'static_analysis' => 'Analyse statique',
            ],
            'experiences' => [
                'title' => 'MES EXPÉRIENCES',
                'graduation' => [
                    'label' => 'Diplôme BTS Développement Web',
                    'date' => 'Juillet 2017',
                ],
                'first_job' => [
                    'label' => 'Développeur chez Nameshield',
                    'date' => 'Novembre 2017',
                ],
                'second_job' => [
                    'label' => 'Responsable d\'applications chez Nameshield',
                    'date' => 'Octobre 2020',
                ],
            ],
            'contact' => [
                'title' => 'ME CONTACTER',
                'work_with_me' => 'Envie de travailler avec moi ?',
                'ask_infos' => 'N\'hésitez pas à me contacter pour tout renseignement complémentaire.',
                'follow' => 'ME SUIVRE',
                'success' => 'Merci !! Votre demande de contact a bien été envoyée',
            ],
            'services' => [
                'features' => 'DÉVELOPPEMENT<br/>DE FONCTIONNALITÉS',
                'web' => 'CRÉATION<br/>DE SITES WEB',
                'legacy' => 'RÉVISION DE<br/>DETTES TECHNIQUES'
            ],
        ],
    ],

    'legals' => [

        'index' => [
            'title' => 'Mentions légales'
        ],
    ],

    'privacy-policy' => [

        'index' => [
            'title' => 'Politique de confidentialité'
        ],
    ],

];
