<?php
require __DIR__ . '/../includes/bootstrap.php';
http_response_code(410);
pagina_begin(['titel' => 'Pagina verwijderd', 'beschrijving' => 'Deze pagina is verwijderd.', 'pad' => '/410/']);
component('hero', ['label' => 'Foutcode 410', 'kop' => 'Deze pagina is verwijderd', 'intro' => 'De inhoud die hier stond, is bewust van de site gehaald.', 'knoppen' => [['/', 'Naar de homepage', 'goud']]]);
pagina_einde();
