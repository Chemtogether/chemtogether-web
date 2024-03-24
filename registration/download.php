<?php

if (!isset($_GET["t"]) || ($_GET["t"] != getenv("VIEW_REGISTRATIONS_TOKEN"))){
    http_response_code(404);
    include('../errors/404/index.php');
    exit();
}

$db = new SQLite3('registrations.db');

$res = $db->query("SELECT * FROM registrations");

header( 'Content-Type: application/csv' );
header( 'Content-Disposition: attachment; filename="CT_registrations.csv";' );

// clean output buffer
ob_end_clean();
    
$handle = fopen( 'php://output', 'w' );

// use keys as column titles
fputcsv( $handle, array_keys( $res->fetchArray(SQLITE3_ASSOC)), ";" );

while (( $value = $res->fetchArray(SQLITE3_ASSOC) )) {
    fputcsv( $handle, $value, ";" );
}

fclose( $handle );

// flush buffer
ob_flush();

// use exit to get rid of unexpected output afterward
exit();