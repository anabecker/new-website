<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Applications/MAMP/htdocs/ana/user/config/site.yaml',
    'modified' => 1453272814,
    'data' => [
        'title' => 'Ana Asnes Becker',
        'author' => [
            'name' => 'Ana Becker',
            'email' => 'anabdesigns@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Grav is an easy to use, yet powerful, open source flat-file CMS'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => [
            '/redirect-test' => '/',
            '/old/(.*)' => '/new/$1'
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/new/(.*)' => '/blog/$1'
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
