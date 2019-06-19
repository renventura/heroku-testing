<?php

$dbopts = parse_url( getenv( 'DATABASE_URL' ) );

return [
    'default' => 'default',
    'connections' => [
        'default' => [
            'driver' => 'pgsql',
            'host' => $dbopts['host'],
            'database' => ltrim( $dbopts['path'], '/' ),
            'username' => $dbopts['user'],
            'password' => isset( $dbopts['pass'] ) ? $dbopts['pass'] : '',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
        ],
    ]
];