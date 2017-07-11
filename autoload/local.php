<?php
/**
 * Local application configuration
 *
 * Insert your local database credentials here
 * and provide the email address the system should use.
 */

ini_set('date.timezone', 'Europe/Berlin');

return array(
    'db' => array(
        'database' => 'scourt24',
        'username' => 'scortuser',
        'password' => 'only401ikey',

        'hostname' => 'sql06.sprit.org',
        'port' => null,
    ),
    'mail' => array(
        'type' => 'sendmail', // or 'smtp' or 'smtp-tls'
        'address' => 'joerg@wigger-consulting.com',

        'host' => 'smtp.sprit.org', // for 'smtp' type only, otherwise remove or leave as is
        'user' => 'joerg@wigger-consulting.com', // for 'smtp' type only, otherwise remove or leave as is
        'pw' => 'only401ikey', // for 'smtp' type only, otherwise remove or leave as is

        'port' => 'auto', // for 'smtp' type only, otherwise remove or leave as is
    ),
    'i18n' => array(
        'locale' => 'de-DE',
        'currency' => 'EUR',
    ),
);
