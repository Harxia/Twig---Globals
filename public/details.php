<?php

// Get a $twig object from this file.
require_once __DIR__ . '/../config/twig.php';

$mail = 'harxiadev@gmail.com';

echo $twig->render('details.html.twig', ['mail' => $mail]);
