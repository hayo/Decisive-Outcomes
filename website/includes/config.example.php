<?php
// Voorbeeldconfiguratie. Kopieer naar config.php op de server en vul in.
// config.php staat in .gitignore en komt nooit in de repo.
return [
    // Ontvanger van het contactformulier (het echte teamadres).
    'mail_naar' => '',
    // Afzender van de mails die het formulier verstuurt, op het eigen domein (SPF/DKIM).
    'mail_van' => '',
    // Lang willekeurig geheim voor het formuliertoken, bijvoorbeeld: php -r 'echo bin2hex(random_bytes(32));'
    'formulier_geheim' => '',
];
