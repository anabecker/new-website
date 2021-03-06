<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/ana/user/themes/pricklypear/blueprints.yaml',
    'modified' => 1453264955,
    'data' => [
        'name' => 'Prickly Pear',
        'version' => '1.0.2',
        'description' => 'A FREE simple single page by CaribThemes inspired by Fractal by HTML5up.',
        'icon' => 'paw',
        'author' => [
            'name' => 'MATsxm for CaribThemes',
            'email' => 'contact@caribthemes.io',
            'url' => 'http://caribthemes.io'
        ],
        'homepage' => 'https://github.com/CaribThemes/grav-theme-pricklypear',
        'demo' => 'http://demo.caribthemes.io/pricklypear',
        'keywords' => 'theme, responsive, html5, css3, design, onepage',
        'bugs' => 'https://github.com/CaribThemes/grav-theme-pricklypear/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
