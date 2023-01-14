<?php

return [

    'layouts' => [

        'header' => [
            'about' => 'ABOUT',
            'skills' => 'MY SKILLS',
            'experiences' => 'MY EXPERIENCES',
            'contact' => 'CONTACT ME',
            'download_resume' => 'DOWNLOAD MY RESUME',
        ],

        'footer' => [
            'legals' => 'Legal Notice',
            'privacy-policy' => 'Privacy Policy',
        ],
    ],

    'resume' => [

        'title' => 'Resume',

        'index' => [
            'title' => 'PHP Developer',
            'about' => [
                'title' => 'ABOUT',
                'intro' => "My name is Marc COLLET, I am passionate about new technologies and computing, I work as a developer. <br/>After 5 years in the company Nameshield as a developer and then application manager, I wanted to carry out a long-standing project by setting up my own business as a freelance developer.",
                'introduce_skills' => "Here is a list of things I can help you put in place to best meet your needs :",
                'skills' => [
                    'development' => 'Feature development and bug fixes.',
                    'refacto' => "Refactoring of technical debts with recent tools (Laravel or Symfony)",
                    'design' => 'Improvement of your architecture',
                    'code_quality' => "Implementation of tools to improve the quality of your applications (style and/or code quality)",
                    'tests' => 'Implementation of automated tests',
                    'code_review' => 'Conducting code reviews',
                    'doc' => 'Writing technical documentatione',
                ],
                'bonus_skills' => "In addition to these purely technical skills, my experience as a lead dev can allow me to train your teams or monitor projects.",
                'outro' => "Need more information or a quote ? Contact me, I will be happy to answer your request."
            ],
            'skills' => [
                'title' => 'MY SKILLS',
                'php' => 'PHP',
                'laravel' => 'Laravel',
                'symfony' => 'Symfony',
                'vue' => 'VueJS',
                'node' => 'Node',
                'cicd' => 'CI/CD',
                'versions' => 'Versions',
                'linux' => 'Linux',
                'code_review' => 'Code review',
                'static_analysis' => 'Static analysis',
            ],
            'experiences' => [
                'title' => 'MY EXPERIENCES',
                'graduation' => [
                    'label' => 'Web Development BTS graduation',
                    'date' => 'July 2017',
                ],
                'first_job' => [
                    'label' => 'Developer at Nameshield',
                    'date' => 'November 2017',
                ],
                'second_job' => [
                    'label' => 'Application Manager at Nameshield',
                    'date' => 'October 2020',
                ],
            ],
            'contact' => [
                'title' => 'CONTACT ME',
                'work_with_me' => 'Want to work with me ?',
                'ask_infos' => 'Contact me for any further information.',
                'follow' => 'FOLLOW ME',
                'success' => 'Thank you !! Your contact request has been sent',
            ],
            'services' => [
                'features' => 'FEATURES<br/>DEVELOPMENT',
                'web' => 'WEBSITE<br/>CREATION',
                'legacy' => 'REVISION OF<br/>TECHNICAL DEBTS',
            ],
        ],
    ],

    'legals' => [

        'index' => [
            'title' => 'Legal Notice'
        ],
    ],

    'privacy-policy' => [

        'index' => [
            'title' => 'Privacy Policy'
        ],
    ],

];
