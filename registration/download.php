<?php

if (!isset($_GET["t"]) || ($_GET["t"] != getenv("VIEW_REGISTRATIONS_TOKEN"))){
    http_response_code(404);
    include('../errors/404/index.php');
    exit();
}

$db = new SQLite3('registrations.db');

$res = $db->query("SELECT * FROM registrations");

header('Content-Type: application/csv');
header('Content-Disposition: attachment; filename="registrations.csv";');

// open the "output" stream
// see http://www.php.net/manual/en/wrappers.php.php#refsect2-wrappers.php-unknown-unknown-unknown-descriptioq
$f = fopen('php://output', 'w');

foreach ($res as $line) {
    fputcsv($f, $line, ',');
}